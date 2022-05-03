@component('mail::message')
# Introduction

This Email Is From 
{{ $name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
