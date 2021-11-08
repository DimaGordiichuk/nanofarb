<?php

namespace App\Listeners\User;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MakeContactAfterRegister
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
            $contact = $user->contacts()->create([
                'name' => $user->full_name,
                'phone' => $user->phone,
                'email' => $user->email,
            ]);
            $user->contact_id = $contact->id;
            $user->save();
        }
    }
}
