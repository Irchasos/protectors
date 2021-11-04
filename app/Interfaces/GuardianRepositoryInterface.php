<?php

namespace App\Interfaces;

interface GuardianRepositoryInterface
{

    public function getGuardiansOfWeek();
    public function newGuardians();
}
