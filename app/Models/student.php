<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\StudentRepository;
use App\Http\Controllers;



/**
 * @property int $id
 */
class student extends Model
{
    // use HasFactory; // Permite crear registros de prueba para cargar la base de datos con informacion falsa o de prueba
    protected $table = 'students';
    protected $fillable = [
        'name'
    ];



}
