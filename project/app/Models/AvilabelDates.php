<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AvilabelDates extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "available_dates";
    public $timestamps = false;
    protected $fillable = ["trainer_id","dates","duration","price"];
    public function session(){
        return $this->hasOne(Session::class,$foreignKey="available_date_id");
    }
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }
}
