<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    public function index()
    {
        $pdf = Pdf::loadView('pdf.invoice', ['name' => 'Trung']);
        return $pdf->download('invoice.pdf');
        die('ok');
    }

    public function user()
    {
        $users = User::all();
        echo '<pre>';
        print_r($users);
        die('ok');
    }
}
