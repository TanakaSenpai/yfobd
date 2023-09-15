<?php

namespace App\Http\Controllers;

use App\Models\MemberRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class MemberRegisterController extends Controller
{
    public function store(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email|unique:members_list',
            'phone_number' => 'required|min:11|starts_with:01'
        ]);

        // if (Validator::fails()) {

        //   return response()->json(['errors'=>$validator->errors()]);
        // }

        MemberRegister::create([
            'name' => $request->username,
            'fathers_name' => $request->fathers_name,
            'mothers_name' => $request->mothers_name,
            'address' => $request->address,
            'qualification' => $request->qualification,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'msg' => $request->msg
        ]);

        return to_route('index');
    }
}
