<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primaryKey = 'pa_id';
    protected $table='personas';
    public $timestamps = false;
    protected $fillable=['pa_id','pa_us','pa_nombre','pa_lugar_nacimiento','fecha_nacimiento'];
}
