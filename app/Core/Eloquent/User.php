<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Str;

class User extends Model
{
    //
    protected $table="users";
    protected $conection="pgsql";
    protected $fillable=['name','email','password'];


  
  /*  public  static function boot()
    {
        static::creating(function($model){
            $model->slug=Str::slug($model->name);
            //$model->created_user=1;
            $model->updated_user=1;
        });
        parent::boot();
    }*/

    //metodo get
    /*getFirstNameAtttribute
    getVa*/

    //asesor
    /*public function getNameAttribute($value){
        return Str::upper($value);
    }*/

    //mutator transforma y guarda
    public function setNameAttribute($value){
        $this->attributes['name']=Str::upper($value);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
        

}
