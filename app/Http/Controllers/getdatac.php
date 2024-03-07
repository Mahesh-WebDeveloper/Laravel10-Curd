<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getdatac extends Controller
{
    function showdata()
    {
        $datas = DB::table ('studentresult')->paginate(90);
        return view ('welcome', ['users' => $datas]);
    }

    function onedata($id)
    {
        $data = DB::table('studentresult')->where('id', $id)->get(); 
        return view('oneview', ['user' => $data]);
    }

    // insert function 
    function insertdata(Request $res)
    {
        $data = DB::table('studentresult')->insert(
            [
                "Name"  => $res->name,
                "age"  => $res->age,
                "city"  => $res->city
            ]
        ); 
        if ($data) {
            return redirect()->route('welcome');
        }
    }
     // insert function 

    function updatedsubmit(Request $updata,$id)
    {
        $data = DB::table('studentresult')->where('id',$id) ->update(
            [
                "Name"  => $updata->name,
                "age"  => $updata->age,
                "city"  => $updata->city
            ]
        ); 
        if ($data) {
            return redirect()->route('welcome');
        }        
    }
    
    function updateget(string $id)
    {
        $data = DB::table('studentresult')->find($id);
    
        return view('update', ['updata' => $data]);
    }


    function delete($id)
    {
        $data = DB::table('studentresult')->where('id',$id) ->delete( ); 

        if ($data) {
            return redirect()->route('welcome');
        }
        
    }

    
}
