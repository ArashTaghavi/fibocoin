<?php

namespace App\Models;

use App\EloquentHelpers\HasImage;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasImage;

    public $image_path = 'sliders';
    protected $fillable = ['profile_image'];


    public function scopePublished($query)
    {
        return $query->where('is_published', 1);
    }
}
