<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Crypt;

class PendingUserSchedule extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        $data    = (array)$this->data; 

        return $this->view('emails.notify.pendingusers')
                    ->subject('E-Mail Notification.') 
                    ->from('noreply@test.com', 'email') 
                    ->with('params1',$data['params1'])
                    ->with('params2',$data['params2'])
                    ->with('created_at',$data['created_at']) ;
    }
}