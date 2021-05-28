@component('mail::message')
# Zamówienie złożone

Zobacz status swojego zamówienia
@component('mail::button', ['url' => "$order_url"])
Zobacz
@endcomponent


Pozdrawiamy, <br>
{{ config('app.name') }}
@endcomponent
