<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;
    protected $table = "session";
    public $timestamps = false;
    protected $fillable = ["trainee_id","available_date_id"];
    public function date(){
        return $this->belongsTo(AvilabelDates::class,$foreignKey="available_date_id");
    }
    public function user(){
        return $this->belongsTo(User::class,$foreignKey ="trainee_id");
    }
}
