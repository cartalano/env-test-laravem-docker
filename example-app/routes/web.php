<?php
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/blog', function (Request $request) {
    return [
        'article' => 'Article1',
        'name' => $request->url(),

    ];
});

route::get('/blog/{slug}-{id}', function(string $slug, string $id) {
    return [
        "slug" => $slug,
        'id' => $id
    ];
})->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+'
]);

/*
$post = new \app\Models\Post();
$post->title = 'Mon premier article';
$post->slug = 'mon-premier-article';
$post->content = 'Mon contenu';
$post->save();

return $post; */