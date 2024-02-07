<x-mail::message>
# Name: {{ $name }}
# Email: {{ $email }}<br>
Message:<br> {{ $message }}

<x-mail::button :url="'https://kikeafrica.co.tz/'">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} mailer
</x-mail::message>
