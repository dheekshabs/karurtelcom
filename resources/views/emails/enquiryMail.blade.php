@component('mail::message')

{{ $details['name'] }}<br>
{{ $details['email'] }}<br>
{{ $details['phone'] }}<br>
{{ $details['plan'] }}<br>
{{ $details['address'] }}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
