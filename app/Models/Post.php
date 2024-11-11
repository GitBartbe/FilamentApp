<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional if the table name follows Laravel conventions)
    protected $table = 'posts';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'thumbnail',
        'title',
        'color',
        'slug',
        'category_id',
        'content',
        'tags',
        'published',
    ];

    // Specify the casts for non-scalar fields
    protected $casts = [
        'tags' => 'array', // Cast the 'tags' field to an array
        
    ];

    /**
     * Define the relationship between the Post and Category models.
     * A Post belongs to a Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
