<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Model\Profiles;

class ProfileController extends BaseController
{
	private $statusProfile = 1;
    public function index(Profiles $dbProfile, Request $request) {
    	$infoPfile = $this->getDataInfoHeader($dbProfile, $this->statusProfile);
    	return view('frontend.profile.index')->with('info', $infoPfile);
    }
    public function lang() {
        return view('frontend.profile.lang');
    }
    
}
