<?php

namespace App\Livewire;

use App\Mail\NotificationMail;
use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Component
{

    public Collection $images;
    public $email;
    public $url;
    public $title;
    public $random;

    protected $rules = [
        'email' => 'required|email',
        ];

    public function sendEmail()
    {
        $this->validate();

        Mail::to('testreceiver@gmail.com')->send(new NotificationMail($this->email));
        // Also, you can use specific mailer if your default mailer is not "mailtrap" but you want to use it for welcome mails
        // Mail::mailer('mailtrap')->to('testreceiver@gmail.com')->send(new WelcomeMail("Jon"));

        return redirect()->route('home')->with('success','Email sent successfully');

    }

    public function render()
    {
        return view('livewire.send-email');
    }
}
