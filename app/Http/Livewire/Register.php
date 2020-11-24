<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $login;
    public $password;
    public $name;
    public $surname;
    public $email;
    public $custom_error;

    protected $rules=[
        'name'=>'required|min:6|max:200',
        'surname'=>'required|min:6|max:200',
        'login'=>'required|min:6|max:200',
        'password'=>'required|min:6|max:200',
        'email'=>'required|email:rfs|min:6|max:200',

    ];

    public function clearError()
    {
        $this->custom_error="";
    }

    public function save()
    {
        $this->custom_error="Error has been occured";
        $this->validate();

        $user=new User();
        $user->name=$this->name;
        $user->surname=$this->username;
        $user->login=$this->login;
        $user->password=$this->password;
        $user->save();
        Auth::login($user);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
