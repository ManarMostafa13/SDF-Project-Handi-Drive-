<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trainer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "trainer";
    public $timestamps = false;
    protected $fillable = ["driving_licence", "car_licence",'name',
    'email',
    'password',
    'national_id',
    'gender',
    'phone',
    'age',
    'city',
    'type_of_disapility',
    'image',
'car_model'];
    public function date(){
        return $this->hasMany(AvilabelDates::class);
    }

}
