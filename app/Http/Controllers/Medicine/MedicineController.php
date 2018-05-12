<?php

namespace App\Http\Controllers\Medicine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    //去药品管理页
    public function goMedicine()
    {
        return view('medicine/medicine');
    }
}
