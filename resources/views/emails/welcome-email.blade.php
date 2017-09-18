@component('mail::message')
# Introduction

Thank you so much for registering...we're looking forward to your participation!

@component('mail::button', ['url' => 'http://joefly.site'])
View Site!
@endcomponent

@component('mail::panel', ['url' => ''])
  To thine own self be true...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
