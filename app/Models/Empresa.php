<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'gerente',
        'nit',
        'nombre',
        'rubro',
        'direccion',
        'telefono'
    ];

    public function periodo_contable(){
        return $this->hasMany(PeriodoContable::class);
    }

    public function sucursal(){
        return $this->hasMany(Sucursal::class);
    }
}
