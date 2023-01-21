<x-mail::message>
## Dear {{$user->name}},

We are pleased to welcome you to our hospital's online platform. As a registered doctor, you will now have access to a variety of features and services that will help you to manage your patients more effectively.

As part of the registration process, we have created a unique login account for you. Please find your login credentials below:

Email: {{$user->email}}

Password: {{$password}}

Please keep your login information safe and secure. We strongly recommend that you change your password immediately after logging in for the first time.


If you have any issues or need assistance, please don't hesitate to contact us. We are here to support you and help you to get the most out of our platform.

Best Regards,<br>
{{ config('app.name') }}
</x-mail::message>
