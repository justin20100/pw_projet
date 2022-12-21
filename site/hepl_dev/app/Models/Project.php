<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'img_src',
        'alt',
        'href',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function create(mixed $data)
    {
        $project = new User();
        $project->title = $data['title'];
        $project->slug = Str::slug($data['title']);
        $project->short_description = $data['short_description'];
        $project->description = $data['description'];
        $project->img_src = $data['img_src'];
        $project->alt = $data['alt'];
        $project->href = $data['href'];
        $project->user_id = $data['user_id'];
        $project->save();
        return $project;
    }

    public static function store(){

    }
}
