<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxController extends Controller
{
    
    public function ajaxRequest()
    {
        return view('form.index');
        // return view('ajaxRequest');
    }

    
    public function ajaxRequestPost(Request $request)
    {
        // $input = $request->all();
        // Log::info($input);     
        // return response()->json(['success'=>'Got Simple Ajax Request.']);

        $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'nationalcode' => 'required|numeric|min:10',
            'age' => 'required|max:3',
            'mobile' => 'required|min:11|max:11',
            // 'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11'            
        ]);

        Patient::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'nationalcode' => $request->nationalcode,
            'sex' => $request->sex,
            'age' => $request->age,
            'married' => $request->married,
            'mobile' => $request->mobile,
            'users_id' => $request->users_id,
            'mainid' => $request->mainid
        ]);

        return response()->json(['success'=>'اطلاعات با موفقیت ذخیره شد.']);
    }


    public function getData($id)
    {
        // if($id == 0){
        //     $arr['data'] = Patient::orderBy('id', 'asc')->get(); 
        // }else{
        //     $arr['data'] = Patient::where('id', $id)->first();
        // }
        // echo json_encode($arr);
        // exit;

        $patient = Patient::find($id);
        return view('form.show', compact('patient'));
    }

}
