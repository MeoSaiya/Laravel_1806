<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreProfilePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $id = $request->input('idProfile');
        $ruleEmail = ($id) ? 'unique:profiles,email,'.$id : 'unique:profiles,email';
        return [
            'fullname'      => 'required|min:3|max:60',
            'email'         => 'required|email|'.$ruleEmail,
            'phone'         => 'required',
            'address'       => 'required',
            'birthday'      => 'required',
            'gender'        => 'required|numeric',
            'single'        => 'required|numeric',
            'description'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'      => ':attribute khong de trong',
            'fullname.min'           => ':attribute khong nho hon min ky tu',
            'fullname.max'           => ':attribute khong lon hon max ky tu',
            'email.required'         => ':attribute khong de trong',
            'email.email'            => ':attribute khong dung dinh dang',
            'email.unique'           => ':attribute da ton tai',
            'phone.required'         => ':attribute khong de trong',
            'address.required'       => ':attribute khong de trong',
            'birthday.required'      => ':attribute khong de trong',
            'gender.required'        => ':attribute khong de trong',
            'gender.numeric'         => ':attribute khong hop le',
            'single.required'        => ':attribute khong de trong',
            'single.numeric'         => ':attribute khong hop le',
            'description.required'   => ':attribute khong hop le'
        ];
    } 
}
