<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\Email;

class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $request;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = (object)$request;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if($this->request->email) {
            Mail::to($this->request->email)->send(new SendEmail($this->request));
            $email = new Email();
            $email->email = $this->request->email;
            $email->subject = $this->request->subject;
            $email->text = $this->request->text;
            $email->date_time = date("Y-m-d H:i:s");
            $email->save();
        }
    }
}
