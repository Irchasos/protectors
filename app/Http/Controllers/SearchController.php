<?php

namespace App\Http\Controllers;
use App\Interfaces\GuardianRepositoryInterface;

class SearchController extends Controller
{
    public function __construct(GuardianRepositoryInterface $guardianRepository)
    {
        $this->GuardianRepository = $guardianRepository;
    }

    public function index()
    {

        return view('search.index');
    }

    public function list()
    {
        $allGuardians = $this->GuardianRepository->allGuardians();
        return view('search.list', ['guardians' => $allGuardians]);
    }
}
