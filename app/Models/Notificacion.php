<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacion
 * 
 * @property int $Id_N
 * @property string $Titu_N
 * @property int $Leid_N
 * @property string $Id_U_N
 * @property int $Id_RR_N
 * 
 * @property ReporteReserva $reporte_reserva
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Notificacion extends Model
{
	protected $table = 'notificacion';
	protected $primaryKey = 'Id_N';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id_N' => 'int',
		'Leid_N' => 'int',
		'Id_RR_N' => 'int'
	];

	protected $fillable = [
		'Titu_N',
		'Leid_N',
		'Id_U_N',
		'Id_RR_N'
	];

	public function reporte_reserva()
	{
		return $this->belongsTo(ReporteReserva::class, 'Id_RR_N');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_U_N');
	}
}
