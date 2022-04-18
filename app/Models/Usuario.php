<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property string $Id_U
 * @property string $Nomb_U
 * @property string $Cont_U
 * @property string|null $Corr_U
 * @property string $ApelPate_U
 * @property string|null $ApelMate_U
 * @property int $Rol_U
 * 
 * @property Grupo $grupo
 * @property Collection|Notificacion[] $notificacions
 * @property Collection|UsuarioMaterium[] $usuario_materia
 * @property Collection|UsuarioReporte[] $usuario_reportes
 * @property Collection|UsuarioSolicitud[] $usuario_solicituds
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'Id_U';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Rol_U' => 'int'
	];

	protected $fillable = [
		'Nomb_U',
		'Cont_U',
		'Corr_U',
		'ApelPate_U',
		'ApelMate_U',
		'Rol_U'
	];

	public function grupo()
	{
		return $this->hasOne(Grupo::class, 'Id_U_G');
	}

	public function notificacions()
	{
		return $this->hasMany(Notificacion::class, 'Id_U_N');
	}

	public function usuario_materia()
	{
		return $this->hasMany(UsuarioMaterium::class, 'Id_U_UM');
	}

	public function usuario_reportes()
	{
		return $this->hasMany(UsuarioReporte::class, 'Id_U_UR');
	}

	public function usuario_solicituds()
	{
		return $this->hasMany(UsuarioSolicitud::class, 'Id_U_US');
	}
}
