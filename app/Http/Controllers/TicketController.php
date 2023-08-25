<?php

namespace App\Http\Controllers;
use App\Models\PublicTicketTransaction;
use Illuminate\Http\Request;
use App\Models\PrivateTicketTransaction;
use Illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
        public function getAllPublicTicketTransactions()
        {
            $publicTicketTransactions = PublicTicketTransaction::all();
            return view('welcome', ['publicTicketTransactions' => $publicTicketTransactions]);
        }

        public function userTransactions()
        {
            $user = Auth::user();
            $transactions = PrivateTicketTransaction::where('user_id', $user->id)->get();
            return view('transactions.index', ['transactions' => $transactions]);
        }
}

