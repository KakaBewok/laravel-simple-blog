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

    //kata scope diawal method wajib untuk membuat scope query method
    //param default: Builder $query
    public function scopeFilter(Builder $query, array $filters): void
    {
        //search all blogs
        $query->when($filters['search'] ?? false, fn (Builder $query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        //search posts and categories
        $query->when(
            $filters['category'] ?? false,
            fn(Builder $query, $category) =>
            $query->whereHas('category', fn(Builder $query) => 
                $query->where('slug', $category)
            )
        );

        //search posts and authors
        $query->when(
            $filters['author'] ?? false,
            fn(Builder $query, $author) =>
            $query->whereHas(
                'author',
                fn(Builder $query) =>
                $query->where('username', $author)
            )
        );
    }
}
