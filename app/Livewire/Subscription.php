<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Subscription extends Component
{
    public $title = "Manage";

    public function render()
    {
        return view('livewire.subscription');
    }

    public function subscribe_basic()
    {

        $user = Auth::user();
        if ($user) {
            return Auth::user()->newSubscription('default', "price_1PhxgxEhShr9iPsZqL9Do5tL")
                ->checkout([
                    'success_url' => url('/'),
                    'cancel_url' => url('/'),
                ]);
        }
    }

    public function subscribe_premium()
    {
        $user = Auth::user();
        if ($user) {
            return $user->newSubscription('default', "price_1PhxlmEhShr9iPsZcNSV0ywh")
                ->checkout([
                    'success_url' => url('/'),
                    'cancel_url' => url('/'),
                ]);
        }
    }
}
