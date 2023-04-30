<?php

namespace App\Listeners;

use App\Models\Incident;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailNotificationlistener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public $data;
    public $type;
    public function __construct(Incident $data, string $type)
    {
        $this->data = $data;
        $this->type = $type;
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        dd($event);
        // Mail::send('emails.myTestMail', $data, function ($message) use ($data, $pdf) {
        //     $message->to($data["email"], $data["email"])
        //         ->subject($data["title"])
        //         ->attachData($pdf->output(), "text.pdf");
        // });
    }
}
