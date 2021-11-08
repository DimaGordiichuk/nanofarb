<?php

namespace App\Listeners\User;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAfterCreated
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (($user = $event->user) && $user instanceof \App\Models\User && $event->rawPassword) {
            if ($user->email && $user->markEmailAsVerified()) {
                event(new Verified($user));

                \Mail::to($user)
                    ->send(new \App\Mail\CustomMail("Ваш аккаунт на ".config('app.name'), "emails.front.after-created-account", [
                        'user' => $user,
                        'password' => $event->rawPassword,
                    ]));
            }
        }
    }
}
