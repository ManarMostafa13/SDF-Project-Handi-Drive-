<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Rules\EnumValues;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\AvilabelDates;
use App\Models\Session;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;




class Trainercontroller extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        return view('user.trainer_register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(Request $REQUEST)
    {
        $data = $REQUEST->all();
        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:trainer'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'national_id' => ['required', 'string', 'min:14', 'unique:trainer'],
            'gender' => [Rule::in(['male', 'female'])],
            'phone' => ['required', 'string', 'min:11'],
            'age' => ['required', 'string', 'min:2'],
            'city' => [Rule::in(['Aswan', 'Luxor', 'Cairo', 'Alexandria'])],
            'type_of_disapility' => [Rule::in(['upper body disapility', 'lower body disapility', 'deaf and dumb'])],
            'driving_licence' => ['required', 'string', 'min:5'],
            'car_licence' => ['required', 'string', 'min:5'],
            'image' => ['required', 'image'],
            'car_model' => ['required','string'],
        ]);
        $data['password']=Hash::make( $data['password']);
        $data['image'] =md5(microtime()).".".$REQUEST->image->extension();
        $REQUEST->image->storeAs("public/imgs",$data['image']);


        
        //dd(Trainer::all());
        // $trainer= Trainer::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'national_id' => $data['national_id'],
        //     'gender' => $data['gender'],
        //     'phone' => $data['phone'],
        //     'city' => $data['city'],
        //     'type_of_disapility' => $data['type_of_disapility'],
        //     'age'=>[$data],
        //     'image'=>"image",
        // ]);
      
        $trainer = Trainer::create($data);
          $id=$trainer['id'];
        auth('trainer')->login($trainer);
        return redirect("http://localhost/handidrive/TrainerDashboard/DB-Main.php?id=$id");
    }

    function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    function login(Request $request)
    {
        if($request['email']=="admin@gmail.com"){
            return redirect("http://localhost/admin-dashboard/admin/trainee/Dashboard-Main.php");
        }
        if (auth()->attempt($request->except("_token"))) {
            return view('user.profile');
        }elseif(auth('trainer')->attempt($request->except("_token"))){
        //    dd(auth('trainer')->user());
            $id=auth('trainer')->id();
            return redirect("http://localhost/handidrive/TrainerDashboard/DB-Main.php?id=$id");
        }
        return redirect("/userlogin")->with("fail", "email or password wrong");
    }
    function book(AvilabelDates $date) {
        Session::create([
            "trainee_id"=>auth()->id(),
            "available_date_id"=>$date['id']
        ]);
        return redirect("/payment");
    }
    function sessiondel(Session $session) {
        $session->delete();
        return back();
    }
}
