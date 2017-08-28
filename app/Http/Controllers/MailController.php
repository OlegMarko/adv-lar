<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Sending e-mail message
     */
    public function sendMail()
    {
        $jobs = (new SendEmailJob())
            ->delay(
                Carbon::now()->addSeconds(20)
            );

        dispatch($jobs);

        return 'ok';
    }
}
