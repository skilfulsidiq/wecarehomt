<?php

namespace App\Listeners;

use App\Models\Incident;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PDF;
class IncidentCreatedListener
{
    /**
     * Create the event listener.
     */
    public $data;
    public function __construct(Incident $data)
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
        $pdf = PDF::loadView('pdf.incident', compact('data'));
        $email = config('app.sendmailto');
        // dd($email);
        $msg = [
            'email'=>$email,
            'title'=>"Incident Created"
        ];

        try {
            Mail::send('emails.incident', compact('data'), function ($message) use ($msg, $pdf) {
                $message->to($msg['email'])
                    ->subject($msg["title"])
                    ->attachData($pdf->output(), "incident.pdf");
            });
        } catch (\Exception $th) {
            //throw $th;
            Log::debug($th->getMessage());
        }
    }
}
