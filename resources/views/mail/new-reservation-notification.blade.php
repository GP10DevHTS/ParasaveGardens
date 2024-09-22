<x-mail::message>
# New Reservation Notification

A new reservation has been made with the following details:

- **Customer Name**: {{ $customer->name }}
- **Customer Email**: {{ $customer->email }}
- **Phone**: {{ $customer->phone ?? 'N/A' }}
- **Number of People**: {{ $number_of_people }}
- **Reservation Date**: {{ \Carbon\Carbon::parse($reservation_date)->format('F j, Y') }}
- **Number of Days**: {{ $number_of_days }}

Please follow up with the customer if further details are needed.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
