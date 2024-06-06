<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_id',
        'financial_currency',
        'staff_id',
        'room_price_rate',
        'room_id',
        'expected_arrival',
        'number_of_days',
        'expected_departure',
        'checkin_date',
        'checkout_date',
        'reservation_date',
        'number_of_people',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    // public function roomPrice()
    // {
    //     return $this->belongsTo(RoomPrice::class)->withTrashed();
    // }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function financialCurrency(){
        return $this->belongsTo(FinancialCurrency::class);
    }
}
