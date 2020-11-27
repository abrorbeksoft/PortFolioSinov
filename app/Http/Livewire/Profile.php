<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $name;
    public $surname;
    public $login;
    public $password;
    public $file;
    public $img;

    public function mount()
    {
        $id=Auth::id();
        $user=User::find($id);
        $this->name=$user->name;
        $this->surname=$user->surname;
        $this->login=$user->login;
        $this->file=$user->image;
    }

    protected $rules=[
        'name'=>'required|string|max:30',
        'surname'=>'required|string|max:30',
        'login'=>'required|string|min:3',
        'password'=>'required|string|min:6',
        'img'=>'required|image'
    ];

    public function update()
    {
        $this->validate();
        $id=Auth::id();
        $user=User::find($id);
        Storage::delete($user->image->name);
        $path=Storage::putFile('images',$this->img);

        $user->image()->update([
            'name'=>$path
        ]);

        $user->update([
            'name'=>$this->name,
            'surname'=>$this->surname,
            'login'=>$this->login,
            'password'=>$this->password,
        ]);
        return redirect()->to('/myposts');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
