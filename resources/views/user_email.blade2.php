@component('mail::message')
# Hi {{ $name }},
{{ - # {{ $senderMessage }} - }}
We have received your inquiry through our website. We will get back to you soon!
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent
Thanks,
{{ config('app.name') }} team
@endcomponent