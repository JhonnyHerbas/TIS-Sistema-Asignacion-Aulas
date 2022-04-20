<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 * 
 * @property string $Nume_G
 * @property int $NumeEstuResg_G
 * @property int $SisM_M_G
 * @property int $Id_U_G
 * 
 * @property Materium $materium
 * @property Usuario $usuario
 *
 * @package App\Models
 */
class Grupo extends Model
{
	protected $table = 'grupo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NumeEstuResg_G' => 'int',
		'SisM_M_G' => 'int',
		'Id_U_G' => 'int'
	];

	protected $fillable = [
		'Nume_G',
		'NumeEstuResg_G',
		'SisM_M_G',
		'Id_U_G'
	];

	public function materium()
	{
		return $this->belongsTo(Materium::class, 'SisM_M_G');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Id_U_G');
	}
}
