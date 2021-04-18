<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Helpers\SocialMediaHelper;

class SocialMediaController extends BaseController
{
    public function __constructor(SocialMediaHelper $socialMediaHelper){
        $this->socialMediaHelper = $socialMediaHelper;
    }

    public function getList(Request $request){
        $list = $this->socialMediaHelper->getList($request->minDate, $request->maxDate, $request->socialNetwork, $request->personName);
        return response()->json($list);
    }
}
