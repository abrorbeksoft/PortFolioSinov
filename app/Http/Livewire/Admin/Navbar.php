<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
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
        $id=Auth::id();
        $user=User::find($id);
        return view('livewire.admin.navbar',[
            'user'=>$user,
        ]);
    }
}
