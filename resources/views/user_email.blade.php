<x-mail::message>
# Hi {{ $name }},

We have received your inquiry through our website. We will get back to you soon!<br>
<br>

<x-mail::button :url="'https://kikeafrica.co.tz'">
Visit Our Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} team
</x-mail::message>
