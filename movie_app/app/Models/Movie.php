<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],

        [
            'no' => 2,
            'judul' => 'The Expendables',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2004,
            'rating' => 8.8,
        ],

        [
            'no' => 3,
            'judul' => 'The Lord Of The Rings',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 7.8,
        ],

        [
            'no' => 4,
            'judul' => 'The Fast & Furious',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 6.5,
        ],

        [
            'no' => 5,
            'judul' => 'Brick Mansions',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2018,
            'rating' => 8.4,
        ]
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
