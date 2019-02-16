<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //xu li viec admin da login chua
        //xu li theo before middleware
        $id = $this->getIdSessionAdmin();
        // $user = $this->getUserSessionAdmin();
        if ($id <= 0 ) {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }

    private function getIdSessionAdmin(){
        $idAdmin = Session::get('id');
        $idAdmin = is_numeric($idAdmin) ? $idAdmin : 0;
        return $idAdmin;
    }

    // private function getUserSessionAdmin(){
    //     $user = Session::get('user');
    //     return $user;
    // }
}
