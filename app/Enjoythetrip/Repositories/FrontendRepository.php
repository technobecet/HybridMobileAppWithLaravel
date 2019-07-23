<?php

namespace App\Enjoythetrip\Repositories;

use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface;
use App\Model\TouristObject;

class FrontendRepository implements FrontendRepositoryInterface {

    public function getObjectsForMainPage()
    {
        return TouristObject::all();
    }
}