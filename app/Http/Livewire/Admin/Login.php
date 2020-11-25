<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $login;
    public $password;
    public $custom_error;


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


        if (isset($user) && $user->auth=="admin")
        {
            Auth::login($user);
            return redirect()->to('/admin/news');
        }



    }
    public function render()
    {
        return view('livewire.admin.login');
    }
}
