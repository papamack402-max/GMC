<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::prefix('/blog')->name('blog.')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/o', function () {
        return 'Bonjour';
    });
    Route::redirect('/n', '/u');

    Route::get('/u', function (Request $request) {
        $posts = \App\Models\Post::find(1);


        return $posts;

        return [
            "link" => route('blog.s.s', ['slug' => 'article', 'id' => 14]),
        ];
    })->name('s.b');

    Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
        return [
            "slug" => $slug,
            "id" => $id,
            "name" => $request->input('name')
        ];
    })->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('s.s');

    Route::get('/mapage', function () {
        return view('welcome');
    });

    Route::get('/sublime', function () {
        return view('ele');
    });
});
