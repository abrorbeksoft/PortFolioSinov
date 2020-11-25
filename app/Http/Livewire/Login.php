<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $login;
    public $password;
    public $custom_error;
    public $temp1;
    public $temp2;

    protected $rules=[
        'login'=>'required|min:6|max:200',
        'password'=>'required|min:6|max:200'
    ];

    public function clearError(){
        $this->custom_error="";
    }

    public function updated($login,$password)
    {
        $this->validateOnly($login);
        $this->validateOnly($password);
    }



    public function save()
    {
        $this->validate();
        $user=User::where([['login','=',$this->login],['password','=',$this->password]])->first();
//        $user=User::query();
//        $user->where('login','=',$this->login);
//        $user->where('password','=',$this->password);
//        $user->first();
//        var_dump($user);
//        $this->temp1=$user->token;
//        $this->temp2=$user->auth;

        if (isset($user))
        {
            Auth::login($user);
            return redirect()->to('/news');
        }


    }

    public function render()
    {
        return view('livewire.login');
    }
}
