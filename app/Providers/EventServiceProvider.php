<?php

namespace App\Providers;

use App\Events\IncidentCreatedEvent;
use App\Events\InteractionCreatedEvent;
use App\Events\SendEmailNotification;
use App\Listeners\IncidentCreatedListener;
use App\Listeners\InteractionCreatedListener;
use App\Listeners\SendEmailNotificationlistener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendEmailNotification::class => [SendEmailNotificationlistener::class],
        IncidentCreatedEvent::class => [IncidentCreatedListener::class],
        InteractionCreatedEvent::class => [InteractionCreatedListener::class]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
