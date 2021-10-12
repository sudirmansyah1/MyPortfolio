<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = "tb_blogs";

    public function users()
    {
    	return $this->hasOne(UserModel::class, 'id','uid');
    }
}
