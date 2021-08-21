<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatabaseConfig;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function config(){
        $admin_id = auth()->user()->id;
        $dbConfigDetails = DatabaseConfig::where('admin_id','=',$admin_id)->first();
        return view('admin.config')->with('databaseConfig',$dbConfigDetails);
    }

    public function config_submit(Request $request){
        $request->validate([
            'db_host'=>'bail|required',
            'db_password'=>'required'
        ]);

        DatabaseConfig::create([
            'name' => $request['name'],
            'db_name' => $request['db_name'],
            'db_host' => $request['db_host'],
            'db_user_name' => $request['db_user_name'],
            'db_password' => $request['db_password'],
            'admin_id' => auth()->user()->id
        ]);
        return redirect('/admin')->with( 'success','database Configuration saved!');;
    }
}
