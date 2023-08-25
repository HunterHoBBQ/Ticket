<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PublicTicketTransaction;
use Illuminate\Http\Request;

class PublicTransactionController extends Controller
{
    public function index()
    {
        $publicTransactions = PublicTicketTransaction::all();
        return response()->json($publicTransactions);
    }
}
