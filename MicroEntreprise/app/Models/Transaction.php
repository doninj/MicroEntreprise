<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
  use Uuids;
  use HasFactory;
  protected $with = ['source'];

  public function source()
  {
    return $this->morphTo('source');
  }
}
