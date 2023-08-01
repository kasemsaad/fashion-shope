<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\SocialiteController;




    Auth::routes(['register' => false]);

    Route::get('user/login', 'FrontendController@login')->name('login.form');
    Route::post('user/login', 'FrontendController@loginSubmit')->name('login.submit');
    Route::get('user/logout', 'FrontendController@logout')->name('user.logout');

    Route::get('user/register', 'FrontendController@register')->name('register.form');
Route::post('user/register', 'FrontendController@registerSubmit')->name('register.submit');
// /////Reset password
    Route::post('password-reset', 'FrontendController@showResetForm')->name('password.reset');
/////// Socialite
    Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
     Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');

    Route::get('/', 'FrontendController@home')->name('home');

    // Route::get('auth/google', [SocialiteController::class,'redirectToGoogle']);
    // Route::get('auth/google/callback', [SocialiteController::class,'handelGoogleCallback']);

// ///Frontend Routes
    Route::get('/home', 'FrontendController@index');
  Route::get('/about-us', 'FrontendController@aboutUs')->name('about-us');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
  Route::post('/contact/message', 'MessageController@store')->name('contact.store');
    Route::get('product-detail/{slug}', 'FrontendController@productDetail')->name('product-detail');
    Route::post('/product/search', 'FrontendController@productSearch')->name('product.search');
         Route::get('/product-cat/{slug}', 'FrontendController@productCat')->name('product-cat');
       Route::get('/product-sub-cat/{slug}/{sub_slug}', 'FrontendController@productSubCat')->name('product-sub-cat');
    Route::get('/product-brand/{slug}', 'FrontendController@productBrand')->name('product-brand');
// Cart section
  Route::get('/add-to-cart/{slug}', 'CartController@addToCart')->name('add-to-cart')->middleware('user');
     Route::post('/add-to-cart', 'CartController@singleAddToCart')->name('single-add-to-cart')->middleware('user');
 Route::get('cart-delete/{id}', 'CartController@cartDelete')->name('cart-delete');
 Route::post('cart-update', 'CartController@cartUpdate')->name('cart.update');
  // STORAGE LINKED ROUTE
  Route::get('storage-link',[\App\Http\Controllers\AdminController::class,'storageLink'])->name('storage.link');


    Route::get('/cart', function () {
        return view('frontend.pages.cart');
    })->name('cart');
    Route::get('/checkout', 'CartController@checkout')->name('checkout')->middleware('user');
// Wishlist
    Route::get('/wishlist', function () {
        return view('frontend.pages.wishlist');
    })->name('wishlist');
    Route::get('/wishlist/{slug}', 'WishlistController@wishlist')->name('add-to-wishlist')->middleware('user');
    Route::get('wishlist-delete/{id}', 'WishlistController@wishlistDelete')->name('wishlist-delete');
 // Route::post('cart/order', 'OrderController@store')->name('cart.order');
    // Route::get('order/pdf/{id}', 'OrderController@pdf')->name('order.pdf');
    Route::get('/income', 'OrderController@incomeChart')->name('product.order.income');
// Route::get('/user/chart','AdminController@userPieChart')->name('user.piechart');
    Route::get('/product-grids', 'FrontendController@productGrids')->name('product-grids');
         Route::get('/product-lists', 'FrontendController@productLists')->name('product-lists');
    Route::match(['get', 'post'], '/filter', 'FrontendController@productFilter')->name('shop.filter');

   ///////// Backend start

    Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/file-manager', function () {
            return view('backend.layouts.file-manager');
        })->name('file-manager');
        ////// user route
     Route::resource('users', 'UsersController');
        ////// Banner
        Route::resource('banner', 'BannerController');
        /////// Brand
     Route::resource('brand', 'BrandController');
        ////// Profile
        Route::get('/profile', 'AdminController@profile')->name('admin-profile');
          Route::post('/profile/{id}', 'AdminController@profileUpdate')->name('profile-update');
        ///// Category
 Route::resource('/category', 'CategoryController');
        ///// Product
     Route::resource('/product', 'ProductController');
          Route::post('/category/{id}/child', 'CategoryController@getChildByParent');

        Route::get('change-password', 'AdminController@changePassword')->name('change.password.form');
        Route::post('change-password', 'AdminController@changPasswordStore')->name('change.password');
    });


         ////// User start
    Route::group(['prefix' => '/user', 'middleware' => ['user']], function () {
        Route::get('/', 'HomeController@index')->name('user');
        // Profile
        Route::get('/profile', 'HomeController@profile')->name('user-profile');
        Route::post('/profile/{id}', 'HomeController@profileUpdate')->name('user-profile-update');
        //  Order
  Route::get('/order', "HomeController@orderIndex")->name('user.order.index');
             Route::get('/order/show/{id}', "HomeController@orderShow")->name('user.order.show');
               Route::delete('/order/delete/{id}', 'HomeController@userOrderDelete')->name('user.order.delete');

        /////////Password Change
        Route::get('change-password', 'HomeController@changePassword')->name('user.change.password.form');
        Route::post('change-password', 'HomeController@changPasswordStore')->name('change.password');

    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
