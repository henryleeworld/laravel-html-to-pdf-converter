<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class UsersController extends Controller
{
    public function show() {
        $users = User::all();
        return view('users', compact('users'));
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('users', $data);
        $pdf = PDF::loadView('users', $data);

        // download PDF file with download method
        return $pdf->download('users_data.pdf');
    }
}
