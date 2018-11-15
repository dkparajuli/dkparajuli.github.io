<?php

namespace App\Mail;


use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;



class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
   

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
     
  return $this
      ->from('dikshantaparajuli.205548@gmail.com')
      ->view('admin.mail',['msg'=>$request->message]) 
            ;
    }
}
