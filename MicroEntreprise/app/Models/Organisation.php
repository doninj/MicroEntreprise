<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisation extends Model
{
  use Uuids;
  protected $fillable = ['name','email'];
  use HasFactory;

  public function mission () {
    return $this->hasMany(Mission::class);
  }

}