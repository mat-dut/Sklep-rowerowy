<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Element;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function elements_table(){
        
        $elements = Element::orderBy('id', 'asc')->get();
        $columns = Schema::getColumnListing('elements');

        return view('admin.elements_table', [
            'elements' => $elements,
            'columns' => $columns
        ]);
    }

    public function edit($element_id){
        $element = Element::where('element_id', $element_id)->first();
        return view('admin.edit_form', [
            'element' => $element
        ]);
    }

    public function update(Request $request){
        $request->validate(
            [
                'title'=>'required',
                'content'=>'required'
            ]
        );

        $element_id = $request->element_id;
        $title = $request->title;
        $subtitle = $request->subtitle;
        $content = $request->content;

        $affected = Element::where('element_id', $element_id)->update(
            [
                'element_title'=>$title,
                'element_subtitle'=>$subtitle,
                'element_content'=>$content
            ]
        );
        session(['alertNoti' => true]);
        return redirect('/');

    }

}
