<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guardian extends Model
{
    use HasFactory;

    final public function districts(): BelongsToMany
    {
        return $this->BelongsToMany(District::class, 'district_guardian', 'district_id', 'guardian_id');
    }


}
