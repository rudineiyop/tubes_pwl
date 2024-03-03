<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Genre;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;


    // protected $fillable = ['title', 'excerpt', 'body', 'author_id'];

    protected $guarded = ['id'];

    protected $with = ['author', 'genre'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . $filters['search'] . '%');
                //   ->orWhere('excerpt', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function latestPosts()
    {
        return $this->orderBy('created_at', 'desc')->take(5)->get();
    }

    public function popularPosts()
    {
        return $this->orderBy('post_view', 'desc')->take(5)->get();
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    

    
    
}



