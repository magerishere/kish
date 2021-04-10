@component('mail::message')
# Introduction

@foreach ($values as $value)
    Your profile {{ $value }} has been updated!
@endforeach
@endcomponent
