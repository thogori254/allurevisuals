@component('mail::message')
# Order from customer

<strong>ORDER FROM CUSTOMER</strong>

<strong>Email</strong>{{ $data['email']}}

<strong>Phone</strong>{{ $data['phone']}}

<strong>Subject</strong>{{ $data['subject']}}

<strong>Message</strong> {!! nl2br($data['message']) !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
