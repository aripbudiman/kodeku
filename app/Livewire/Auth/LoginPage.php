<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
{
    public $rememberme;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.auth.login-page');
    }

    public function login(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials=[
            'email'=>$this->email,
            'password'=>$this->password
        ];
        if(Auth::attempt($credentials,$this->rememberme)){
            return redirect()->route('home-page');
        }else{
            session()->flash('error','Email atau Password salah');
            return redirect()->route('login-page');
        }
    }
}
