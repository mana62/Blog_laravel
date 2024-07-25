<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = ['id', 'user_id'];
    protected $fillable = ['title', 'content'];

    public function comment()
    {

        return $this->belongsToMany(Comment::class);

    }


}
