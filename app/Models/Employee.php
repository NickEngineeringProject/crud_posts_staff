<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Post;

class Employee extends Model
{
    use HasFactory;
//    use SoftDeletes;

    protected $fillable = ['uuid', 'first_name', 'surname', 'patronymic', 'photo'];

    public function post() {
        return $this->hasMany(Post::class, 'user_uuid', 'uuid');
    }
}
