<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudReserva
 * 
 * @property int $Id_SR
 * @property Carbon $Fech_SR
 * @property Carbon $HoraInic_SR
 * @property int $NumePeri_SR
 * @property int $NumeEstu_SR
 * @property int $EstaAten_SR
 * @property string|null $Moti_SR
 * @property string $Dia_SR
 * @property Carbon $HoraFina_SR
 * 
 * @property Collection|ReporteReserva[] $reporte_reservas
 * @property Collection|UsuarioSolicitud[] $usuario_solicituds
 *
 * @package App\Models
 */
class SolicitudReserva extends Model
{
	protected $table = 'solicitud_reserva';
	protected $primaryKey = 'Id_SR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Id_SR' => 'int',
		'NumePeri_SR' => 'int',
		'NumeEstu_SR' => 'int',
		'EstaAten_SR' => 'int'
	];

	protected $dates = [
		'Fech_SR',
		'HoraInic_SR',
		'HoraFina_SR'
	];

	protected $fillable = [
		'Fech_SR',
		'HoraInic_SR',
		'NumePeri_SR',
		'NumeEstu_SR',
		'EstaAten_SR',
		'Moti_SR',
		'Dia_SR',
		'HoraFina_SR'
	];

	public function reporte_reservas()
	{
		return $this->hasMany(ReporteReserva::class, 'Id_SR_RR');
	}

	public function usuario_solicituds()
	{
		return $this->hasMany(UsuarioSolicitud::class, 'Id_SR_US');
	}
}
