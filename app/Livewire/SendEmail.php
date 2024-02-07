<?php

namespace App\Livewire;

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

        //send email
        Mail::raw('Hello, this is a test mail!', function ($message) {
            $message->from('noreply@example.com')
            ->to($this->email)
            ->subject('Thanks');
            //->view('emails.notification',['url' => $this->url, 'title' => $this->title]);
        });

        return redirect()->route('home')->with('success','Email sent successfully');
    }

    public function render()
    {
        return view('livewire.send-email');
    }
}
