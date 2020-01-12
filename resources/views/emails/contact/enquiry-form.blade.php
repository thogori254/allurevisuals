@component('mail::message')

# Enquiry from customer
<strong>Email</strong>{{ $data['email']}}

<!-- <strong>Message</strong> {{ $data['message']}} -->

<strong>Message</strong> {!! nl2br($data['message']) !!}
@endcomponent
