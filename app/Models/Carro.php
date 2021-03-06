<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['modelo_id', 'placa', 'disponivel', 'km'];

    public function rules() {
        return [
            'modelo_id'  => 'exists:modelos,id',
            'placa'      => 'required',
            'disponivel' => 'required',
            'km'         => 'required'
        ];
    }

    public function modelo() {
        return $this->belongsTo('App\Models\Modelo');
    }
}
