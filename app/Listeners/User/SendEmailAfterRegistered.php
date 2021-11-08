<?php

namespace App\Listeners\User;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\URL;

class SendEmailAfterRegistered
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (($user = $event->user) && $user instanceof \App\Models\User) {

            // TODO: Verified
            if ($user->markEmailAsVerified()) {
                event(new Verified($user));
            }

            \Mail::to($user)
                ->send(new \App\Mail\CustomMail("Вы успешно зарегистрировались на ".config('app.name'), 'emails.front.after-register',  [
                    'user' => $user,
                    //'verificationUrl' => $this->verificationUrl($user), // TODO: Verified
                ]));
        }
    }

    protected function verificationUrl($user)
    {
        return URL::temporarySignedRoute(
            'verification.verify', \Carbon\Carbon::now()->addMinutes(60), ['id' => $user->getKey()]
        );
    }
}
