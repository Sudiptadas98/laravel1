<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\PaymentRecived;
use Illuminate\Support\Facades\Notification;
use App\Events\ProductPurchased;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // request()->user()->notify(new PaymentRecived());
        // Notification::send(request()->user(), new PaymentRecived(900));

        ProductPurchased::dispatch('toy');
    }
}
