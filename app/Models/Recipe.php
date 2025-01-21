<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    protected $fillable = ['title', 'procedure', 'image', 'user_id', 'category_id'];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
