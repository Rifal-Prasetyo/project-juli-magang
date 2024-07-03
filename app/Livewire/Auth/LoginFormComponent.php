<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginFormComponent extends Component

{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8'
    ];

    protected $message = [
        'email.required' => 'Email must be filled',
        'email.email' => 'must be Email',
        'password.required' => 'Password must be filled',
        'password.min:8' => 'Password must be at least 8 characters',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    // Add a Livewire method to close the toast

    // if form submitting, this function will be called
    public function login() {
        $validatedData = $this->validate();

        if($validatedData['email'] == 'rifal@example.com' && $validatedData['password'] == '12345678') {
            
            return redirect('/');
        } else {
            $this->addError('info', 'Wrong email or password');
            return redirect()->back();
        }
    }
    public function render()
    {
        return view('livewire.auth.login-form-component');
    }
}
