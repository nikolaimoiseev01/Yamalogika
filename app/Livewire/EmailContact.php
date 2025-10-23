<?php

namespace App\Livewire;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class EmailContact extends Component
{
    public $email;
    public $sent = false;
    public function render()
    {
        return view('livewire.email-contact');
    }

    public function save() {
        $this->sent = true;
        Notification::route('telegram', '-4741635887')
            ->notify(new TelegramNotification(null, null, null, $this->email));
    }
}
