<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='detalle_ingreso';

    protected $primaryKey='iddetalle_ingreso';

    public $timestamps=false;


    protected $fillable =[
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'precio_compra',
    	'compra_venta',
    	
    ];

    protected $guarded =[

    ];
}
