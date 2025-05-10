<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
      'customer_name','phone','email',
      'vehicle_model','services','notes','appointment_at'
    ];
    public $timestamps = false; // if you don’t use created_at/updated_at
}
