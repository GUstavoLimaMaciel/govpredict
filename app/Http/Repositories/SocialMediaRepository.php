<?php

namespace App\Http\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class SocialMediaRepository
{
    public function getList(?string $minDate, ?string $maxDate, ?int $socialNetworkId, ?string $personName) : Collection{
        $socialMediaQuery = DB::table('social_media');
        
        if($minDate || $maxDate){
            $socialMediaQuery = $this->dateFilter($socialMediaQuery, $minDate, $maxDate);
        }

        if($socialNetworkId){
            $socialMediaQuery = $this->socialNetworkFilter($socialMediaQuery, $socialNetworkId);
        }

        if($personName){
            $socialMediaQuery = $this->personNameFilter($socialMediaQuery, $personName);
        }

        return $socialMediaQuery->get();
    }

    private function dateFilter($query, ?string $minDate, ?string $maxDate){
        switch(true){
            case $minDate && $maxDate:
                $query->whereBetween('date', [$minDate, $maxDate]);
                break;
            case $minDate && !$maxDate:
                $query->where('date', '>', $minDate);
                break;
            case !$minDate && $maxDate:
                $query->where('date', '<', $maxDate);
                break;
        }

        return $query;
    }

    private function socialNetworkFilter($query, int $socialNetworkId){
        $query->where('socialNetworkId', '=', $socialNetworkId);

        return $query;
    }

    private function personNameFilter(string $personName){
        $query->where('person', 'like', '%'.$personName.'%');

        return $query;
    }
}
