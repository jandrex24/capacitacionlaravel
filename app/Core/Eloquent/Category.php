<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Str;

class Category extends Model
{
   // use SoftDeletes;//trait

    protected $table="categories";
    protected $conection="pgsql";
    protected $fillable=['name','description'];

    public  static function boot()
    {
        static::creating(function($model){
            $model->slug=Str::slug($model->name);
            //$model->created_user=1;
            $model->updated_user=1;
        });
        parent::boot();
    }

    //metodo get
    /*getFirstNameAtttribute
    getVa*/

    //asesor
    public function getNameAttribute($value){
        return Str::upper($value);
    }

    //mutator transforma y guarda
    public function setNameAttribute($value){
        $this->attributes['name']=Str::upper($value);
    }

}
