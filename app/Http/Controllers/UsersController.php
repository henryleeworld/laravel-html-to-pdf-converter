<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * Generate the PDF.
     */
    public function createPDF()
    {
        set_time_limit(300);
        $data = User::all();

        view()->share('users', $data);
        $pdf = PDF::loadView('users', $data->toArray());

        return $pdf->download('users_data.pdf');
    }
}
