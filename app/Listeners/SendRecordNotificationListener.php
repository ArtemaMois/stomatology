<?php

namespace App\Listeners;

use App\Events\RecordCreatedEvent;
use App\Mail\RecordCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendRecordNotificationListener
{
    public function __construct()
    {
        //
    }

    public function handle(RecordCreatedEvent $event): void
    {
        Mail::to($event->record->email)->send(new RecordCreatedMail($event->record));
    }
}
