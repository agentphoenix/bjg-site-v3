<?php namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSent extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $body;

    public function __construct(array $contents)
    {
        $this->email = $contents['email'];
        $this->name = $contents['name'];
        $this->body = $contents['body'];
    }

    public function build()
    {
        return $this->from($this->email, $this->name)
            ->subject('[Brian Jacobs Golf] Web Contact')
            ->markdown('emails.contact');
    }
}
