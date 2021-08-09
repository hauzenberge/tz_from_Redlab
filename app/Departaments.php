<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Departament;
use DB;

class Departaments extends Model
{
    protected $table = 'departaments';
    protected $fillable =['id', 'staff_id', 'departament_id'];

    static function help($staff_id, $departament_id){
        if (count(Departaments::where('staff_id', '=', $staff_id)->where('departament_id', '=', $departament_id)->get()) > 0) {
            return true;
        }else return false;
    }

    public function del($where, $id){
        if (count(Departaments::where($where, '=', $id)->get()) > 0) {
            $departaments = Departaments::where($where, '=', $id);
            $departaments->delete();

            $massage = 'Complete';
        }else $massage = 'No Data';
        
        return $massage;
    }
    public function col($if, $id){
        $departament = Departaments::where('staff_id', '=', $id)
                ->join('departament', 'departaments.departament_id', '=', 'departament.id')
                ->select('departament.*')
                ->get();
        switch ($if) {
            case '=':
                $result = $departament;
                break;
            case '!=':
                $departaments = Departament::all();
                $result = $departaments->diff($departament);
                break;
            
            default:
                $result[] = [];
                break;
        }
        return $result;
    }
}
