<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Noticia extends Model
{
    
    
    protected $fillable = ['titulo','materia','idUser'];

    public function search($filtro = null){
        $resultado = $this->where(function($query) use ($filtro){
            if($filtro){
                Auth::id();
         
                $query->where([['titulo','LIKE',"%{$filtro}%"],['idUser','LIKE',Auth::id()]]);
            }

        })->paginate();
        return $resultado;
    }
}
