<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departaments;
use App\Departament;

class DepartamentController extends Controller
{
    public function destroy($id){
        $departaments = new Departaments;
        $departaments->del('departament_id', $id);

        $departament = Departament::find($id);
        $departament->delete();
        return redirect('/');
    }

    public function edit($id){
        return view('departament.edit',[
            'departament' => Departament::find($id),
        ]);
    }

    public function update($id, Request $request){
        $departament = Departament::find($id);
        $departament->name = $request->input('name');
        $departament->save();
        return redirect('departament/edit/'.$id);
    }

    public function add(){
        return view('departament.add');
    }
    public function store(Request $request){
        $departament = new Departament;
        $departament->name = $request->input('name');
        $departament->save();
        return redirect('/');
    }
}
