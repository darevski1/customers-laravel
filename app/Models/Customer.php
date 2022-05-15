<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contract;


class Customer extends Model
{
    use HasFactory;

    
    public function contract(){
        return $this->hasOne(Contract::class, "id");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
