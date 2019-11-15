<?php
namespace App\Http\Controllers;

use App\Form;
use App\Content;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class FormInsertController extends Controller
{
    public function insertform()
    {
        return view('form');
    }
    public function insert(Request $request)
    {
        $data = $request->input();
        $formCreate = Form::create($data);
        $forms=Form::find($formCreate['id']);
        $content = Content::all();

        $str=str_replace('@project_name@', $forms, $content);


        return view('template', ['forms' => $forms]);
        // return redirect()->back()->with('success', 'Record inserted successfully');

    }
}
