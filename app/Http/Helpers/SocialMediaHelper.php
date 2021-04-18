<?php

namespace App\Http\Helpers;

use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Http\Repositories\SocialMediaRepository;

class SocialMediaHelper
{

    public function __constructor(SocialMediaRepository $socialMediaRepository){
        $this->socialMediaRepository = $socialMediaRepository;
    }

    public function getList(?string $minDate, ?string $maxDate, ?int $socialNetwork, ?string $personName) : Collection{
        if($minDate) $minDate = Carbon::parse($minDate)->format('YYYY-MM-DD')->timestamp;
        if($maxDate) $maxDate = Carbon::parse($maxDate)->format('YYYY-MM-DD')->timestamp;

        $list = $this->socialMediaRepository->getList($minDate, $maxDate, $socialNetwork, $personName);

        return $list;
    }
}
