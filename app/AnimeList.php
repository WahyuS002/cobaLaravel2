<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeList extends Model
{
    protected $table = 'animes';

    protected $fillable = ['title', 'image', 'score', 'episode', 'studio', 'source', 'synopsis'];
}
