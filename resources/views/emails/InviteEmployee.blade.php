@component('mail::message')
#Invite Form Employee

Hi
there is one invite request from {{ $employerName }} to you

if you want accept this please press on the button blow

@component('mail::button', ['url' => 'http://karekish.test/accept-invite-employer/' .  encrypt($id) ])
Accept
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
