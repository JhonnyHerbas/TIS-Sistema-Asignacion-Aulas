<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioReporte
 * 
 * @property string $Id_U_UR
 * @property int $Id_RR_UR
 * 
 * @property ReporteReserva $reporte_reserva
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioReporte extends Model
{
	protected $table = 'usuario_reporte';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id_RR_UR' => 'int'
	];

	public function reporte_reserva()
	{
		return $this->belongsTo(ReporteReserva::class, 'Id_RR_UR');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_U_UR');
	}
}
