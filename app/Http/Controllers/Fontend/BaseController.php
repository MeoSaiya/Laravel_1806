<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;

use App\Model\Profiles;

class BaseController extends Controller
{
    protected function getDataInfoHeader($dbProfile, $status = 1){
    	$infoPfile = $dbProfile->getInfoProfileByActive($status);
    	return $infoPfile;
    }
}
