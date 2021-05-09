<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seller;
use Validator;
use db;

use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "mishu";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'alamin')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('home.index', compact('id', 'name'));

    }

public function profile(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        return view('home.profile', compact('user'));
    }
 
    public function editprofile(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        return view('home.editprofile', compact('user'));
    }




    public function updateProfile(UserRequest $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
   
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->company_name = $request->company_name;
       
        $user->city             = $request->city;
        $user->country          = $request->country;
        $user->pic = $request->pic;

        $user->save();
        return redirect('/home/profile');
    }

   
    
    public function show($id){

        $user = User::find($id);
        //print_r($user);
        return view('home.details')->with('user', $user);
    }


 
   public function notification(){
        
        $notification = User::all();
        //$userlist = $this->getUserlist();
        return view('home.notification')->with('notification', $notification);
    }



     public function product(){
        
        $product = User::all();
        //$userlist = $this->getUserlist();
        return view('home.product')->with('product', $product);
    }

     public function cart(){
        
        $cart = User::all();
        //$userlist = $this->getUserlist();
        return view('home.cart')->with('cart', $cart);
    }


      public function messages(){
        
        $messages = User::all();
        //$userlist = $this->getUserlist();
        return view('home.messages')->with('messages', $messages);
    }

     public function help_center(){
        
        $help_center = User::all();
        //$userlist = $this->getUserlist();
        return view('home.help_center')->with('help_center', $help_center);
    }

     public function about(){
        
        $about = User::all();
        //$userlist = $this->getUserlist();
        return view('home.about')->with('about', $about);
    }

 public function comment(){
        
        $comment = User::all();
        //$userlist = $this->getUserlist();
        return view('home.comment')->with('comment', $comment);
    }




    public function create(){
        return view('home.create');


   
    }

    

    public function store(UserRequest $req){

/*
        $this->validate($req, [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        /*$req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        //$validation->validate();

        /*$validation = Validator::make($req->all(), [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
         //   return redirect()->route('home.create')->with('errors', $validation->errors());

            return Back()->with('errors', $validation->errors())->withInput();            
        }*/

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());
            
            $filename = time().".".$file->getClientOriginalExtension();
            
            $file->move('upload', $filename);

            $user = new User();
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->name         = $req->name;
            $user->dept         = $req->dept;
            $user->type         = $req->type;
            $user->cgpa         = $req->cgpa;
            $user->profile_img = $filename;
            $user->save();
            return redirect()->route('home.userlist');

        }

        

    }

    public function edit($id){
        
        $user = User::find($id);
        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        $user = User::find($id);
        
        $user->username = $req->username;
        $user->name     = $req->name;
        $user->password = $req->password;
        $user->dept     = $req->dept;
        $user->type     = $req->type;
        $user->save();

        return redirect('/home/userlist');
    }


    public function deleteprofile($id){
        
        $user = User::find($id);
        return view('home.deleteprofile')->with('user', $user);
    }


    public function userlist(){
        
        $userlist = User::all();
        //$userlist = $this->getUserlist();
        return view('home.list')->with('list', $userlist);
    }

     public function seller(){
        
        $seller = User::all();
        //$userlist = $this->getUserlist();
        return view('home.seller')->with('seller', $seller);
    }





    public function profileView (){

        $profileView= [
                ['id'=>1, 'name'=>'mishu', 'email'=> 'mishi@aiub.edu', 'password'=>'123'],
                
            ];
              return view('home.profile')->with('profile', $profileView);
    }

    public function delete($id){

        $user = User::find($id);
        return view('home.delete')->with('user', $user);
    }


    public function destroy($id){

        if(User::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }

    }
}
