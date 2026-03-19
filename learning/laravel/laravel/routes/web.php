<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Symfony\Component\HttpFoundation\Request;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

// 1. Basic Routing

// Route::get('/greeting', function () {
//     return 'Hello Word';
// });

// The default route file
// Route::get('greeting', [UserController::class, 'index']);

// API route (php artisan install:api)

// Route::get('/user', function (Request $request){
//     return $request->user();
// })->middleware('auth::sanctum');

// Avaivlabe route methods

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Redirect Routes (use for defining a route that 'redirect' ot another url)

// Route::redirect('/here', '/there', 301);
// Route::permanentRedirect('/here', '/there'); // method to return a status 301 code

// View route

// Route::view('/welcome', 'welcom');
// Route::view('/welcome', 'welcom', ['name' => 'Taylor']);

// Listing your route

// --php artisan route:list // provide an overview of all the route
// --php artisan route:list -v // display the route middleware
// --php artisan route:list -vv // groups
// --php artisan route:list --path=api // api
// --php artisan route:list --except=vendor // 
// --php artisan route:list --only=vendor

// Routing Customization

// loaded by the bootstrap/app.php file
// <?php

// use Illuminate\Foundation\Application;

// return Application::configure(basePath: dirname(__DIR__))
//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         commands: __DIR__.'/../routes/console.php',
//         health: '/up',
//     )->create();

// Route Parameters

// Route::get('/user/{id}', function (string $id) {
//     return 'User' . $id;
// });
// Route::get('/user/{id}/commnets/{comments}', function (string $id, string $commentId) {
//     return 'User' . $id. $commentId;
// });

// Optional Parameter

// Route::get('/user/{nsme?}', function (?string $name = null) {
//     return $name;
// });
// Route::get('/user/{nsme?}', function (?string $name = "Sok") {
//     return $name;
// });

// Regular Expression Constrainls (where, whereNumber, whereAlphaNumberic, whereUuid, whereUlid, whereIn)

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->whereAlphaNumeric('name');

// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUuid('id');

// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUlid('id');

// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', CategoryEnum::cases());

// Global Constraints

// 2 Named Routes

// Route::get('/user/profile', function () {
//     //
// })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// Generating URLs to nameed route

// $url = route('profile');
// return redirect()->route('profile');
// return to_route('profile');

// Inspecting the current route

// public function handle(Request $request, Closure $next): Response
// {
//     if ($request->route()->named('profile')) {
//         // ...
//     }
 
//     return $next($request);
// }

// 3 Route Groups

// Middleware

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Controller

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

// Subdomain routing

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('/user/{id}', function (string $account, string $id) {
//         // ...
//     });
// });

// Route Prefixes (provide each route in the group with the same url)

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

// 4 Route Model Binding

// 5 Fallback Routes
// 6 Rate Limiting
// 7 From Mehtod Spoofing
// 8 Accessing the Current Routes
// 9 Cross-Origin Resource Sharing (CORS)



// Assigning Middelware to Route

// Route::get('/prfile', function () {
//     // 
// })->middleware(EnsureTokenIsValid::class);

// Route::get('/prfile', function () {
//     // 
// })->middleware([First::class, Second::class]);


// Exclouding Middleware

// Route::middleware([EnsureTokenIsValid::class])->group(function () {
//     Route::get('/', function () {
//         // ...
//     });

//     Route::get('/profile', function () {
//         // ...
//     })->withoutMiddleware([EnsureTokenIsValid::class]);
// });

require __DIR__.'/settings.php';
