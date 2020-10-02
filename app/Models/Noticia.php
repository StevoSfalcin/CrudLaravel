<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    
    protected $fillable = ['titulo','materia','idUser'];

    public function search($filtro = null){
        $results = $this->where(function($query) use ($filtro){
            if($filtro){
                $query->where('titulo','LIKE',"%{$filtro}%");
            }

        })->paginate();
        return $results;
    }
}
