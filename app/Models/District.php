<?php

namespace App\Models;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\DistrictFactory;
class District extends Model
{   use HasFactory;

//    final public function guardians(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        return $this->BelongsToMany(Guardian::class);
//    }

}
