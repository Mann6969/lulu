<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = [
        'blog_title',
        'slug',
        'subtitle',
        'body',
        'status',
        'posted_by',
        'meta_key',
        'image',
        'meta_description',
        'created_at',
        'cid'

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'blog_title'
            ]
        ];
    }
}