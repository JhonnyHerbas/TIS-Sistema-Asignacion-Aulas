<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioSolicitud
 * 
 * @property string $Id_U_US
 * @property int $Id_SR_US
 * 
 * @property SolicitudReserva $solicitud_reserva
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioSolicitud extends Model
{
	protected $table = 'usuario_solicitud';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id_SR_US' => 'int'
	];

	public function solicitud_reserva()
	{
		return $this->belongsTo(SolicitudReserva::class, 'Id_SR_US');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_U_US');
	}
}
