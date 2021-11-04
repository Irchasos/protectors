<?php

namespace App\Models;
use App\Models\District;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    final public function districts(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->BelongsToMany(District::class);
    }


}
