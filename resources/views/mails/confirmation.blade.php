@component('mail::message')
<center><img src="{{asset('img/logo/logo-dark.png')}}" width="150"></center>

@component('mail::panel')
This payment is NOT VERIFIED
@endcomponent

Date: {{ $data['date'] }} <br>
Method: BCA Transfer <br>
Issued To: {{ $data['name'] }} <br>

## Invoice Number: {{ $data['invoiceNum'] }} <br>

# Transaction Summary:

@component('mail::table')
| Item | Price |
|:---------------------------------------|----------:|
| Seminar: How To take Expressive Photos | Rp35.000 |
| Knowledge :D | Rp0 |
| Pop Corn Virtual | Rp0 |
| **TOTAL** | Rp35.000 |
@endcomponent

@component('mail::button', ['url' => $data['invoiceURL']])
View this form online
@endcomponent


{{-- ## Table component:

@component('mail::subcopy')
This is a subcopy component
@endcomponent

Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent