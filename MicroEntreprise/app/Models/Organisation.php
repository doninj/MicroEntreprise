<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisation extends Model
{
  use Uuids;
  protected $guarded = ['id'];
  use HasFactory;

  public function mission () {
    return $this->hasMany(Mission::class);
  }
  public function contribution () {
    return $this->hasMany(Contribution::class);
  }
}