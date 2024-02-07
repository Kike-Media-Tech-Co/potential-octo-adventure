@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}<br>
Message:<br> {{ $message }}

Thanks,
{{ config('app.name') }} mailer
@endcomponent