<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class ForgotPasswordFormComponent extends Component
{
    public $email, $code, $new_password;
    protected $rules = [
        'email' => 'required|email',
        'code' => 'required',
        'new_password' => 'required|min:8'
    ];
    protected $message = [
        'email.required' => 'Email must be filled',
        'email.email' => 'must be Email',
        'code.required' => 'Code must be filled',
        'new_password.required' => 'Password must be filled',
        'new_password.min:8' => 'Password must be at least 8 characters',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function forgotPassword() {
        $validatedData = $this->validate();
        session()->flash('info', 'Your password has been changed successfully, log in back');
        return redirect('/login');
    }
    public function render()
    {
        return view('livewire.auth.forgot-password-form-component');
    }
}
