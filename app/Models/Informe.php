<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $primaryKey = 'in_id';
    protected $table='informe';
    public $timestamps = false;
    protected $fillable=[
    'in_us',
    'in_ps',
    'in_nombre',
    'in_tipo',
    'in_date',
    'in_lugar',
    'in_pay_id'];

}
