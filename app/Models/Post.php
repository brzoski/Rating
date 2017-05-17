<?php

namespace App\Models;


use Ghanem\Rating\Contracts\Rating;
use Ghanem\Rating\Traits\Ratingable as RatingTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Rating
{
    use RatingTrait;
}