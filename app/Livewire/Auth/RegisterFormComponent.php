<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class RegisterFormComponent extends Component
{

    public $name;
    public $birtday;
    public $email;
    public $password;
    public $password_confirmation;
    public $tos;
    

    protected $rules = [
        'name' => 'required|min:5',
        // 'birtday' => 'required',
        'tos' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',
    ];
    
    protected $message = [
        'name.required' => 'Name must be filled',
        'name.min:5' => 'Name must be at least 5 characters',
        // 'birtday.required' => 'Birtday must be filled',
        'tos.required' => 'You must accept TOS',
        'email.required' => 'Email must be filled',
        'email.email' => 'must be Email',
        'password.required' => 'Password must be filled',
        'password.min:8' => 'Password must be at least 8 characters',
        'password_confirmation.required' => 'Password Confirmation must be filled',
        'password_confirmation.same:password' => 'Password Confirmation must be same with Password',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    
    public function register () {
        $validateData = $this->validate();
        session()->flash('status', 'Your account has been created successfully');
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.auth.register-form-component');
    }
}
