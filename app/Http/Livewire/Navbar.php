<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{

    public $guestLink=[ 'Login', 'Register','News'];
    public $authLink=['News','My posts','Profile'];
    public $admin=['News','Users'];



    public function render()
    {
        return view('livewire.navbar');
    }
}
