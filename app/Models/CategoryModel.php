<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug'];

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
