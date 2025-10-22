<?php

namespace App\Livewire\Components;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ContactForm extends Component
{
    public $sent = false;
    public $name;
    public $contact;
    public $text;

    public function render()
    {
        return view('livewire.components.contact-form');
    }

    public function save() {
        $this->sent = true;
        Notification::route('telegram', '-4741635887')
            ->notify(new TelegramNotification($this->name, $this->contact, $this->text));
    }
}
