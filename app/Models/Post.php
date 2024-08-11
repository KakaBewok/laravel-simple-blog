<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['author', 'category'];

    protected $fillable = [
        'title',
        'author_id',
        'slug',
        'body',
        'post_category_id'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    //kata scope diawal method wajib untuk membuat scope query metho
    public function scopeFilter(Builder $query): void
    {
        $query->where('title', 'like', '%' . request('search') . '%');
    }
}
