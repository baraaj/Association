<?php

namespace App\Http\Controllers;
use App\Models\Utilisateurs;

use Illuminate\Http\Request;
use Session;
class UtilisateursController extends Controller
{
    

    public function index(){
        return view('index_1');
    }
    public function pass(){
      return view('change');
  }
    public function create(){
        $Utilisateur::Utilisateurs::all();
        return view("/create",compact("Utilisateurs"));

    }
    public function login(Request $request){
      
      /* $a= $request->input('username');
       $b= $request->input('password');*/
       $request->validate([
        "username"=>"required",
        "password"=>"required",
    ]);
       
       $name = $request->input('username');
       $pass = $request->input('password');
       
        $results = \DB::select('select * from utilisateurs where username = ? and password= ?', [$name,$pass]);
        $query = \DB::table('utilisateurs')  
                    ->where('username', $name)
                    ->where('password', $pass)
                    ->get();
        if($results){
            $id = \DB::select('select id from utilisateurs where username = ? and password= ?', [$name,$pass]);
           // Utilisateurs::inscription($request->all());
           // return view("/index",compact("Utilisateurs"));
           //return redirect()->route("/");
          // return view('dashboard_my_profile');
        
         
          
         
        return redirect('/profile');
          //   redirect('/profile');

         }
         else{
           // return redirect('/');
           // return redirect()->back()->with('fail_message', 'usere not found');
          // \Session :: flash ('message', 'Your message! ');
         //  return redirect()->back()->with('fail_message', 'usere not found');
        
         flash("Vous devez être connecté pour voir cette page.")->error();
         //Session::flash('echec','user not found');
       return redirect(('/'))->with('message', ['user not found']); 
       //return back();
         }


         
    }
    public function up(Request $request){
       $name = $request->input('username');
       $tel = $request->input('phone');
       $tr = $request->input('travail');
       $n = $request->input('niv');
       $mail = $request->input('email');
       $adr = $request->input('address');
       $old = $request->input('age');
      $dat=$request->input('date');
      $update=\DB::table('utilisateurs')->where('username',$name)->update(array('phone' => $tel,'travail'=>$tr,'niv'=>$n,'email'=>$mail,'address'=>$adr,'age'=>$old,'date'=>$dat));  
    //$update = \DB::table('utilisateurs') ->where('id', $data['id']) ->limit(1) ->update( [ 'username' => $data['username'], 'address' => $data['address'], 'email' => $data['email'], 'phone' => $data['phone'] ]); 
      if($update){
          return redirect("/");
      }
      else{
        return redirect("/profile");  
      }
    }
    public function store(Request $request){
        $request->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
       Utilisateurs::create([
            "username"=>$request->username,
            "email"=>$request->email,
            "password"=>$request->password,
        ]);
      
   
   $Utilisateurs = new Utilisateurs;
    $Utilisateurs->username = request('username');
    $Utilisateurs->email = request('email');
    $Utilisateurs->password = request('password');
    $psw= request('cpassword');
    if( $Utilisateurs->password==$psw)  {
    $Utilisateurs->save();
    Utilisateurs::create($request->all());
    return back()->with("success","New user");   
    }
    /*
    $Utilisateurs::create($request->all());
        return back()->with("success","New user");
    }*/
}};
?>