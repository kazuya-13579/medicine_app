<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        return view('medicines.customer');
    }
    
    public function show_register()
    {
        return view('medicines.register');
    }
    
    public function register(Request $request, Medicine $medicine)
    {
        $input = $request['medicine'];
        $medicine -> fill($input) -> save();
        return redirect("/medicines/" . $medicine -> id );
        // dd($input);
    }
    
}
