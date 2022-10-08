<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *     @property int $id
 *   * @property string $name
     * @property string $firstlastname
     * @property string $secondlastname
     * @property string $mail
     * @property string $photo
     * @property string $course
     * @property string $gender
     * @property string $school
 */
class Student extends Model
{
    // use HasFactory; // Permite crear registros de prueba para cargar la base de datos con informacion falsa o de prueba
    protected $table = 'students';
    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
     /**
     * @var string
     */
}

