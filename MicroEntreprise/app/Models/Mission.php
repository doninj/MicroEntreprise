<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
  use Uuids;
  use HasFactory;
  protected $guarded = ['id'];
  protected $with = ['missionLine','transaction'];

  public function organisation(){
    return $this->belongsTo(Organisation::class,'organisation_id');
  }
  public function missionLine(){
    return $this->hasMany(MissionLine::class);
  }
  public function transaction()
  {
    return $this->morphMany(Transaction::class, 'source');
  }
}
