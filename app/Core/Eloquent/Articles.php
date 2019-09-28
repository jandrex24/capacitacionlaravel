<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function resource(){
        return $this->hasMany(Resource::class,'article_id','id');
    }

}
