<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    //show all the data in a table
    public function index() {
        //kaning Info gikan sa model
       $data = Info::orderBy('id', 'DESC')->paginate(50);
        
       return view('info.index',//kani na part is para kay route. 
       
            ['infos' => $data]);//kani na part is para sa variable nga buhaton para display
    }

    public function create() {
        return view('info.create');
    }
    //to show a single data
    // public function show($id) {
    //     $data = Info::findOrFail($id);
    //     return view('info.edit', ['info'=>$data]);
    // }

    public function edit(Info $info) {
            
        return view('info.edit',['info' => $info]);
    }
    // insert the data into the table
    public function store(Request $request) {
        $validated = $request->validate([
            "firstname" => ['required', 'min:4'],
            "lastname" => ['required', 'min:4'],
            "email" => ['required', 'email'],
            "age" => ['required'],
            "address" => ['required', 'min:4'],

        ]);

        Info::create($validated);

        return redirect('/info');
    }

    public function update(Request $request, Info $info) {
        $validated = $request->validate([
            "firstname" => ['required', 'min:4'],
            "lastname" => ['required', 'min:4'],
            "email" => ['required', 'email'],
            "age" => ['required'],
            "address" => ['required', 'min:4'],

        ]);
        
        $info->update($validated);

        return redirect('/info');
        
    }

    public function destroy(Info $info, Request $request) {
        //$employee = Employee::findOrFail($id);                
        
        $info->delete();        
        return redirect('/info');
    }
}
