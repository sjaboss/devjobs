<?php

namespace App\Models;

use App\Models\Candidato;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $dates = ['ultimo_dia'];

    protected $fillable = [
        'titulo',
        'salario_id',
        'categoria_id',
        'empresa',
        'ultimo_dia',
        'descripcion',
        'imagen',
        'user_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    public function candidatos()
    {
        return $this->hasMany(Candidato::class)->orderBy('created_at','DESC');
    }
    // esta nomnbre de la funcion es distinto a los que se espera, se llama reclutador porque es hacia el reclutador que genera la vacante. utilizando el modelo de User 
    public function reclutador()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
