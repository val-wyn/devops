<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

//    public function index(Request $request)
//    {
//        if (request('q') ==! null){
//            $users = User::where('first', 'like', '%'.request('q').'%')
//                ->orWhere("last", "like", '%'.request('q').'%')
//                ->orWhere("street", "like", '%'.request('q').'%')
//                ->orWhere("city", "like", '%'.request('q').'%')
//                ->orWhere("zip", "like", '%'.request('q').'%')->get();
//            return response()->json($users);
//        }
//        else {
//            $users = User::all();
//            return response()->json($users);
//        }
//    }

    public function show(Request $request){

        session(['key'=>$request->keywords]);
        $users=User::where(function($q){
            $value = session('key');
            $q->where("first", "like", "%".$value."%")
                ->orWhere("last", "like", "%".$value."%")
                ->orWhere("street", "like", "%".$value."%")
                ->orWhere("city", "like", "%".$value."%")
                ->orWhere("zip", "like", "%".$value."%")
                ->orWhere("id", "like", "%".$value."%")
                ->orWhere("guid", "like", "%".$value."%");
        })->get();
        return Response::json(['users'=>$users]);
    }

}
