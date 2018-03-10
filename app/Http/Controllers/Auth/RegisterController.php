<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Contractor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
            'registration_number' => 'required',
            'economic_id' => 'required',
            'ceo_name' => 'required',
            'email' => 'required|email',
            'field' => 'required',
            'phone' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $contractor = new Contractor([
            'name' => $data['name'],
            'registration_number' => $data['registration_number'],
            'economic_id' => $data['economic_id'],
            'ceo_name' => $data['ceo_name'],
            'email' => $data['email'],
            'field' => $data['field'],
            'phone' => $data['phone']
        ]);

        $contractor->save();



//        if($data['resume'] != '')
//        {
//            Storage::put('resumes/'.$contractor->id.'.pdf' , $data['resume']);
//        }

        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
