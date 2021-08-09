<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departaments;
use App\Departament;
use App\Staff;

class StaffController extends Controller
{
    public function destroy($id){
        $departaments = new Departaments;
        $departaments->del('staff_id', $id);
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/home');
    }

    public function edit($id){
        $departaments = new Departaments;
        return view('staff.edit',[
            'staff' => Staff::find($id),
            'departament' => $departaments->col('=',$id),
            'departaments' => $departaments->col('!=',$id),
        ]);
    }
    public function update($id, Request $request){
        $staff = Staff::find($id);
        $staff->name = $request->input('name');
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->male = $request->input('male');
        $staff->wage = $request->input('wage');
        $staff->save();

        $departaments = new Departaments;
        $departaments->del('staff_id', $id);

        if ($request->input('departaments') != null) {
            foreach ($request->input('departaments') as $dep) {
                    $dept = new Departaments;
                    $dept->staff_id = $id;
                    $dept->departament_id = $dep;
                    $dept->save();
                }
        }
        
        return redirect('/staff/edit/'.$id);
    }

    public function add(){
        return view('staff.add', [
            'departaments' => Departament::all(),
        ]);
    }

    public function store(Request $request){
        $staff = new Staff;
        $staff->name = $request->input('name');
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->male = $request->input('male');
        $staff->wage = $request->input('wage');
        $staff->save();

        if ($request->input('departaments') != null) {
            foreach ($request->input('departaments') as $dep) {
                    $dept = new Departaments;
                    $dept->staff_id = $id;
                    $dept->departament_id = $dep;
                    $dept->save();
                }
        }
        
        return redirect('/');
    }

}
