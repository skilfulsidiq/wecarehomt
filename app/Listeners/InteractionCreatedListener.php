<?php

namespace App\Listeners;

use App\Models\Interaction;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use PDF;
class InteractionCreatedListener
{
    /**
     * Create the event listener.
     */
    public $data;
    public function __construct(Interaction $data)
    {
        $this->data = $data;
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $data = $event->data;
        // $details = $data->toArray();
        // dd($details['date']);
        $pdf = PDF::loadView('pdf.interaction', compact('data'));
        $email = config('app.sendmailto');
        $msg = [
            'email' => $email,
            'title' => "Interaction Created"
        ];

        try {
            Mail::send('emails.incident', compact('data'), function ($message) use ($msg, $pdf) {
                $message->to($msg['email'])
                    ->subject($msg["title"])
                    ->attachData($pdf->output(), "interaction.pdf");
            });
        } catch (\Exception $th) {
            //throw $th;
        }
    }
}
