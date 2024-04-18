<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/transaction', function () {
    return view('transaction');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/trash', function () {
    return view('trash');
});
route::name('user.')->group(function(){
    route::view('/private', 'private')->middleware('auth')->name('private');

    route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login'); 

    route::post('/login', [])

    route::get('/logout',[])->('logout');

    route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
});
public function index(Request $request) {
    $basket_id = $request->cookie('basket_id');
    if (!empty($basket_id)) {
        $products = Basket::findOrFail($basket_id)->products;
        return view('basket.index', compact('products'));
    } else {
        abort(404);
    }
}


public function add(Request $request, $id) {
    $basket_id = $request->cookie('basket_id');
    $quantity = $request->input('quantity') ?? 1;
    if (empty($basket_id)) {
       
        $basket = Basket::create();
      
        $basket_id = $basket->id;
    } else {
     
        $basket = Basket::findOrFail($basket_id);
      
        $basket->touch();
    }
    if ($basket->products->contains($id)) {
      
        $pivotRow = $basket->products()->where('product_id', $id)->first()->pivot;
        $quantity = $pivotRow->quantity + $quantity;
        $pivotRow->update(['quantity' => $quantity]);
    } else {
       
        $basket->products()->attach($id, ['quantity' => $quantity]);
    }
   
    return back()->withCookie(cookie('basket_id', $basket_id, 525600));
}
}
