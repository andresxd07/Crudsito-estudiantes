<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *     @property int $id
 *   * @property string $name_subject
     * @property string $teacher
     * @property string $hours
     * @property string $days
    
 */
class Subject extends Model
{
    use HasFactory; 
    protected $table = 'subjects';
    /**
     * @var string[]
     */

    protected $fillable = [
        'name_subject'
    ];
    /**
     * @var string[]
     */
}
