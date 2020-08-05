@extends('layouts.app')

@section('content')
<div class="container">
   <ul>
    @forelse($notifications as $notification)
        <li>
            @if ($notification->type === 'App\Notifications\PaymentRecived')
                We have recived a payment of {{ $notification->data['amount'] }} from you.
            @endif
        </li>
    @empty
        <li>You have no unread notification at this time.</li>
    @endforelse
   </ul>
</div>    
@endsection