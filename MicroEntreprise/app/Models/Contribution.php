<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use Uuids;
    use HasFactory;

    public function transaction()
    {
      return $this->morphMany(Transaction::class, 'transactionable');
    }

    public function organisation(){
      return $this->belongsTo(Organisation::class);
    }
}
