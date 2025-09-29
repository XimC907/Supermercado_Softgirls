<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleModel extends Model
{
    protected $table = 'detalle';
    protected $primaryKey =  'id';
    public $timestamps = true;

    public function belongsFactura(){
        return this->belongsTo(FacturaModel::class, 'factura', 'id');
    }

    public function belongsProducto(){
        return $this->belongsTo(ProductoModel::class, 'producto', 'id');
    }
}
