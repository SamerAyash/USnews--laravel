<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('home');
    $trail->push(ucfirst($category), route('categoryNews',$category));
});

// Home > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {

    $trail->parent('category', str_replace(' ', '',strtolower($post->types->first()->category->name)));

    $trail->push($post->title, route('news-single',$post->id));
});

Breadcrumbs::for('tag', function ($trail ,$type) {
    $category=\App\category::where('id',$type->category_id)->first();
    $trail->parent('category', str_replace(' ', '',strtolower($category->name)));

    $trail->push($type->name);
});
