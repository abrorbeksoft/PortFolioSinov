<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Psy\Util\Str;

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
        'email'=>'required|min:6|max:200',

    ];

    public function clearError()
    {
        $this->custom_error="";
    }

    public function save()
    {
        $this->validate();

        $user=new User();
        $user->name=$this->name;
        $user->surname=$this->surname;
        $user->login=$this->login;
        $user->password=$this->password;
        $user->email=$this->email;
        $user->token=\Illuminate\Support\Str::random(60);
        $user->save();
        Auth::login($user);
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
