<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioMaterium
 * 
 * @property int $SisM_UM
 * @property string $Id_U_UM
 * 
 * @property Materium $materium
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class UsuarioMaterium extends Model
{
	protected $table = 'usuario_materia';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SisM_UM' => 'int'
	];

	public function materium()
	{
		return $this->belongsTo(Materium::class, 'SisM_UM');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_U_UM');
	}
}
