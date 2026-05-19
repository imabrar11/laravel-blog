<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'description', 'img_path'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $slug = Str::slug($value);
        $original = $slug;
        $i = 1;

        while (self::where('slug', $slug)->exists()) {
            $slug = $original . '-' . $i++;
        }

        $this->attributes['slug'] = $slug;
    }
}
