@component('mail::message')

# Feedback from customer
<strong>FEEDBACK FROM CUSTOMER</strong>

<strong>Email</strong>{{ $data['email']}}

<!-- <strong>Message</strong> {{ $data['message']}} -->

<strong>Message</strong> {!! nl2br($data['message']) !!}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
