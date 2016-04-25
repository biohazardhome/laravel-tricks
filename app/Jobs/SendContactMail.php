<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Contracts\Mail\Mailer;
// use App\Http\Requests\SendContactRequest;

class SendContactMail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    const EMAIL = 'staker-nikko@yandex.ru';

    protected
        $name,
        $emai,
        $msg;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->msg = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $mailer->send('emails.contact', ['name' => $this->name, 'msg' => $this->msg], function($m) {
            $m->from('laravel-tricks@lara.com', 'Laravel Tricks');
            $m->to(self::EMAIL, 'Laravel Tricks2')->subject('Contact form');
        });
    }
}
