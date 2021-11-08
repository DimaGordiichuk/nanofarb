<?php

namespace App\Listeners\Form;

use App\Helpers\Sales\PromoCodeGenerator;
use App\Models\Shop\Sale;
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
        $form = $event->form;

        $mails = array_map(function ($mail) {
            return trim($mail);
        }, explode(',', variable('mail_to_address')));

        if (($subject = config("web-forms.forms.$form->type.email.subject")) && $mails) {
            \Mail::to($mails)
                ->send(new \App\Mail\CustomMail($subject, 'emails.admin.web-form-created',  [
                    'form' => $form,
                ]));
        }
    }
}
