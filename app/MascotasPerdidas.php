<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MascotasPerdidas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_mascotasPerdidas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lng_idusuario', 'str_dueno', 'str_telefono', 'str_correo', 'str_mascota', 'str_especie', 'str_ruta_foto', 'str_ciudad','str_sector','str_fecha_perdida','txt_descripcion',
    ];

}
