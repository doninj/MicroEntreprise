<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
  use Uuids;
  use HasFactory;

  public function organisation(){
    return $this->belongsTo(Organisation::class);
  }
  public function missionLine(){
    return $this->hasMany(MissionLine::class);
  }
  public function transaction()
  {
    return $this->morphMany(Transaction::class, 'transactionable');
  }
}
