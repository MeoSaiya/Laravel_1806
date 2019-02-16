<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profiles extends Model
{
    private $limit = 2; // 2 dong du lieu tren 1 trang
    protected $table = 'profiles';
    private function changeDataToArray($data){
    	return ($data) ? $data->toArray() : [];
    }
    public	function saveProfile($data){
    	$insert = DB::table('profiles')->insert($data);
    	if ($insert) {
    		return true;
    	}
    	return false;
    }
    public function getDataInfoProfileById($id){
        $info = Profiles::find($id);
        return $this->changeDataToArray($info);
    }
    public function deleteProfileById($id){
        $profile = Profiles::find($id);
        if ($profile->delete()) {
            return true;
        }
        return false;
    }
    public function updateProfileById(){
        $up = DB::table('profiles')
                    ->where('id', $id)
                    ->update($data);
        if ($up) {
            return true;
        }else{
            return false;
        }
    }
    public function getInfoProfileByActive($status){
        $info = Profiles::where('status', $status)
                        ->first();                        
        return $info;
    }
    public function getAllDataProfile($key = ''){
    	$data = Profiles::where('fullname', 'LIKE', '%'.$key.'%')
                        ->orWhere('email',  'LIKE', '%'.$key.'%')
                        ->orWhere('phone',  'LIKE', '%'.$key.'%')
                        ->paginate($this->limit);
    	// $data =  $this ->changeDataToArray($data);
        return $data;
    }
}
