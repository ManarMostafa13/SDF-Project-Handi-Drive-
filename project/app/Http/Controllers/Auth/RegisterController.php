<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Rules\EnumValues;
use GuzzleHttp\Psr7\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

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
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegisterationForm()
    {  return view ('user.trainee_register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:trainee'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'national_id' => ['required', 'string', 'min:14', 'unique:trainee'],
            'gender' => [Rule::in(['male', 'female'])],
            'phone' => ['required', 'string', 'min:11'],
            'age' => ['required', 'string', 'min:2'],
            'city' => [Rule::in(['aswan', 'luxor', 'cairo','alexandria'])],
            'type_of_disapility' => [Rule::in(['upper body disapility', 'lower body disapility', 'deaf and dumb'])],
            'img'=> ['required', 'image'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
    protected function create(array $data)

    {
        // $data['national_id']=$REQUEST['national_id'];
        // $data['gender']=$REQUEST['gender'];
        // $data['phone']=$REQUEST['phone'];
        // $data['city']=$REQUEST['city'];
        // $data['type_of_disapility']=$REQUEST['national_id'];
        //dd($data);
        $image =md5(microtime()).".".$data['img']->extension();
        $data['img']->storeAs("public/imgs",$image);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'national_id' => $data['national_id'],
            'age'=>$data['age'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'city' => $data['city'],
            'type_of_disapility' => $data['type_of_disapility'],
            'image'=>$image
        ]);
    }
}
