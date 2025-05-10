<?php
namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // 1) Validate all fields
        $data = $request->validate([
          'name'     => 'required|string|max:80',
          'phone'    => 'required|regex:/^\d{10,15}$/',
          'email'    => 'required|email',
          'model'    => 'required|string',
          'services' => 'required|array|min:1',
          'notes'    => 'nullable|string|max:255',
          'date'     => 'required|date',
          'time'     => 'required',
        ]);

        // 2) Save to DB
        Appointment::create([
          'customer_name' => $data['name'],
          'phone'         => $data['phone'],
          'email'         => $data['email'],
          'vehicle_model' => $data['model'],
          'services'      => json_encode($data['services']),
          'notes'         => $data['notes'],
          'appointment_at'=> "{$data['date']} {$data['time']}:00",
        ]);

        // 3) Return JSON for JS
        return response()->json(['success' => true]);
    }
}
