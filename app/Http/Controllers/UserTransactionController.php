<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PrivateTicketTransaction;
use App\Models\User;
use App\Models\PublicTicketTransaction;

class UserTransactionController extends Controller
{
    public function userTransactions(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            $transactions = PrivateTicketTransaction::where('user_id', $user->id)->get();
            $publicTransactionIds = $transactions->pluck('transaction_id');
            $publicTicketTransactions = PublicTicketTransaction::whereIn('transaction_id', $publicTransactionIds)->get();
            $mergedTransactions = [];

            foreach ($transactions as $privateTransaction) {
                $mergedTransaction = $privateTransaction;
                $publicTransaction = $publicTicketTransactions->where('transaction_id', $privateTransaction->transaction_id)->first();
                
                if ($publicTransaction) {
                    $mergedTransaction->game_id = $publicTransaction->game_id;
                    $mergedTransaction->amount = $publicTransaction->amount;
                    $mergedTransaction->draw_date = $publicTransaction->draw_date;
                    $mergedTransaction->ticket_date = $publicTransaction->ticket_date;
                }
    
                $mergedTransactions[] = $mergedTransaction;
            }
            return view('user', [
                // 'transactions' => $transactions,
                // 'publicTicketTransactions' => $publicTicketTransactions,
                'mergedTransactions' => $mergedTransactions,
                'user_id' => $user,
            ]);
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }

}
