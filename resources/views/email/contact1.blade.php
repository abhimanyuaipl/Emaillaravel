@component('mail::message')
# Introduction
Now listen honey singh song

yo yo honey singh

@component('mail::button', ['url' => 'https://www.youtube.com/watch?v=HO7CRp44s10&ab_channel=T-Series'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
