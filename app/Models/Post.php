<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Muhamad Sahyudi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quos provident! Ipsa eum, autem assumenda tenetur, quaerat laborum cumque veniam nisi nostrum velit sed tempora placeat suscipit a adipisci expedita?',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Muhamad Sahyudi',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt error eveniet ullam quasi ad magni sit fuga, praesentium explicabo quos nobis veniam, deleniti necessitatibus impedit alias inventore ex tenetur ut.',
            ],
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            return abort(404);
        }

        return $post;
    }
}
