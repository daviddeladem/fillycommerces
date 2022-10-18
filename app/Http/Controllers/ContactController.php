<?php
namespace App\Http\Controllers;
use App\Mail\SendDemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendDemoMail()
    {
        $email = 'daviddeladem@gmail.com';
        $name = 'Ben David';

        $maildata = [
            'title' => 'Laravel Mail Sending Example with Markdown',
            'url' => 'https://www.positronx.io',
            'name' => $name,
            'line1' => 'Hello ',
            'line2' => 'We’ve received a request to reset your password. To continue with this request, please enter the code below on the verification page:',
            'code' => '107684',
            'line3'=> 'If you didn\'t request a password reset, feel free to delete this email.',
        ];

        Mail::to($email)->send(new SendDemoMail($maildata));

        dd("Mail has been sent successfully");
    }
}