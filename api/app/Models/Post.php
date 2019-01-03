<?php

namespace App\Models;

use App\Traits\Excludable;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use Excludable;
    protected $table = 'post';

    protected $fillable = [
        'titulo', 'resumo', 'user_id', 'conteudo', 'slug', 'situacao', 'img_destacada'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
