<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public $guestLink=[ 'Login', 'Register','News'];
    public $authLink=['News','My posts','Profile'];
    public $admin=['News','Users'];


    public function logout()
    {
        Auth::logout();

        return redirect()->to('/login');
    }


    public function render()
    {
        $id=Auth::id();
        $user=User::find($id);
        return view('livewire.navbar',[
            'user'=>$user
        ]);
    }
}
