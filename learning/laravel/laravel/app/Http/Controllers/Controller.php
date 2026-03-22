<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\OrderConfirmed;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

abstract class Controller
{
    public function index(){
        $user = User::find(1);

        $data = [
            't' => "work $user->name",
            'me' => "testing"
        ];

        $user->notify(new OrderConfirmed($data));

        dd('it work');
    }

    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    // Single Action Controllers
    public function __invoke()
    {
        //
    }

    // Controller  Middleware

    public function middleware(): array
    {
        return [
            'auth',
            new Middleware ('log', only: ['index']),
            new Middleware('subscribed', only: ['store']),
        ];
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $name = $request->name;

    //     return redirect('/users');

    // }


}


// php artisan make:controller ProvisionServer 
// php artisan make:controller ProvisionServer --invokable
// php artisan make:controller ProvisionServer --resoucre