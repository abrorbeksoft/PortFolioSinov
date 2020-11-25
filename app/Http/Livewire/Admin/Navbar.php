<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/admin');
    }

    public function render()
    {
        return view('livewire.admin.navbar');
    }
}
