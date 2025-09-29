<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaModel extends Model
{
    protected $table = 'factura';
    protected $primaryKey =  'id';
    public $timestamps = true;

    public function hasDetalle(){
        return $this->hasMany(DetalleModel::class);
    }

    public function belongsCliente(){
        return $this->belongsTo(ClienteModel::class, 'cliente', 'id');
    }
}
