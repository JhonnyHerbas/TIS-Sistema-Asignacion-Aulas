<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Materium
 * 
 * @property int $SisM_M
 * @property string $Nomb_M
 * 
 * @property Grupo $grupo
 * @property Collection|UsuarioMaterium[] $usuario_materia
 *
 * @package App\Models
 */
class Materium extends Model
{
	protected $table = 'materia';
	protected $primaryKey = 'SisM_M';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SisM_M' => 'int'
	];

	protected $fillable = [
		'Nomb_M'
	];

	public function grupo()
	{
		return $this->hasOne(Grupo::class, 'SisM_M_G');
	}

	public function usuario_materia()
	{
		return $this->hasMany(UsuarioMaterium::class, 'SisM_UM');
	}
}
