<?php

namespace App\Http\Livewire;

use App\Models\User;
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
        $user=User::query();

        try {
            $user->where('login',$this->login);
            $user->get();
        }
        catch (\Exception $exception)
        {
            $this->custom_error=$exception->getMessage();
        }
        $user->where('password',$this->password);
        $user->get();


    }

    public function render()
    {
        return view('livewire.login');
    }
}
