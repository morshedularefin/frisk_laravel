@component('mail::message')
Hello Admin,

You have received a new comment on a post.

**Commenter Name:** {{ $data['name'] }}  
**Commenter Email:** {{ $data['email'] }}

**Comment:**  
{{ $data['comment'] }}

Please visit your admin panel to review and approve/reject this comment. Your link is here:
@component('mail::button', ['url' => route('admin.post.comments')])
Review Comments
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent