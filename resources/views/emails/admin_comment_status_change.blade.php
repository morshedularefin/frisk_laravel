@component('mail::message')
Hello {{ $data['name'] }},

Your comment has been approved by the admin. You can see that in this post:

@component('mail::button', ['url' => route('post', $data['post_slug'])])
See Post
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent