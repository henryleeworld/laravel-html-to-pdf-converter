<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show() {
        $users = User::all();
        return view('users', compact('users'));
    }

    // Generate PDF
    public function createPDF() {
        set_time_limit(300);
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('users', $data);
        $pdf = PDF::loadView('users', $data->toArray());

        // download PDF file with download method
        return $pdf->download('users_data.pdf');
    }
}
