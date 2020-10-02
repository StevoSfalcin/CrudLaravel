<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','password'];
    public $timestamps = false;

    public function search($filtro = null){
        $resultado = $this->where(function($query) use ($filtro){
            if($filtro){
                $query->where(['name','LIKE',"%{$filtro}%"]);
            }

        })->paginate();
        return $resultado;
    }
}
