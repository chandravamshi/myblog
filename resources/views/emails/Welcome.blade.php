@component('mail::message')
# Introduction
Welcome to MyBlog {{$user->name}}, here you can find latest updates about my interests and a lot more.

<!--@component('mail::button', ['url' => ''])
Button Text
@endcomponent-->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
