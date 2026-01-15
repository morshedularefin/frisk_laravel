@component('mail::message')
Hello, 

You have received a new message from this visitor:

<div style="color:#d63030;font-weight:700;margin-bottom:15px;font-size:20px;">Sender Detail:</div>

**Name:** <br>
{{ $data['name'] }} <br>

**Email:** <br>
{{ $data['email'] }} <br>

**Message:** <br>
{{ $data['message'] }}

-- Best Regards,<br>
{{ config('app.name') }}
@endcomponent