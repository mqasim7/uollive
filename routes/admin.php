<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    $categories=\App\Category::paginate(2);
    $subcategories=\App\Subcategory::paginate(2);
    return view('admin.home', compact('categories', 'subcategories'));
})->name('home');

