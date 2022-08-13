<?php

namespace App;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class ContactMessages extends Model
{

    public $fillable = ['name', 'email', 'subject', 'message'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "arjoni95@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
