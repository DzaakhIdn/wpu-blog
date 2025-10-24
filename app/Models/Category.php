<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    // #[Scope]
    // protected function category(Builder $query)
    // {
    //     $query->when(request('keyword') ?? false, function ($query) {
    //         return $query->where('blog_title', 'like', '%' . request('keyword') . '%');
    //     });
    // }
}
