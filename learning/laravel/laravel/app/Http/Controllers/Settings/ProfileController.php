<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\ProfileDeleteRequest;
use App\Http\Requests\Settings\ProfileUpdateRequest;
use App\Models\User;
use App\Notifications\OrderConfirmed;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Log;  

class ProfileController extends Controller
{
    /**
     * Show the user's profile settings page.
     */

public function index()
{
    try {
        $user = User::find(4);
        
        if (!$user) {
            throw new \Exception('User with ID 4 not found');
        }
        
        Log::info('Sending notification to user', [
            'user_id' => $user->id,
            'user_email' => $user->email
        ]);
        
        $data = [
            'me' => "Hello {$user->name}, your profile has been updated successfully.",
            't' => 'Thank you for using our app!'
        ];
        
        $user->notify(new OrderConfirmed($data));
        
        Log::info('Notification sent successfully');
        
        return response()->json([
            'success' => true,
            'message' => 'Notification sent to ' . $user->email
        ]);
        
    } catch (\Exception $e) {
        Log::error('Notification failed: ' . $e->getMessage(), [
            'trace' => $e->getTraceAsString()
        ]);
        
        return response()->json([
            'success' => false,
            'error' => $e->getMessage()
        ], 500);
    }
}
    
    public function edit(Request $request): Response
    {
        return Inertia::render('settings/profile', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => $request->session()->get('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return to_route('profile.edit');
    }

    /**
     * Delete the user's profile.
     */
    public function destroy(ProfileDeleteRequest $request): RedirectResponse
    {
        $user = $request->user();

        Auth::logout();

        $user->delete();
        

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
