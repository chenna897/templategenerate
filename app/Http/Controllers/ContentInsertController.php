<?php
namespace App\Http\Controllers;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentInsertController extends Controller
{
    public function insertform()
    {
        return view('content');
    }
    public function insert(Request $request)
    {
        $data = $request->input();
        $form = Content::create($data);
        return redirect()->back()->with('success', 'Record inserted successfully');

    }
}
