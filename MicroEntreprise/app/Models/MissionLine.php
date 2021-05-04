<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MissionLine extends Model
{
  use Uuids;
  use HasFactory;
  protected $guarded = ['id'];

  public function mission(){
    return $this->belongsTo(Mission::class);
  }
}
