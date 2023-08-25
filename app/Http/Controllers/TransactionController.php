<?php

namespace App\Http\Controllers;


use PDF;
use Illuminate\Http\Request;
use App\Models\PrivateTicketTransaction;
use App\Models\PublicTicketTransaction;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TransactionController extends Controller
{
    public function showAddTransactionForm($user_id)
    {
        return view('add-transaction', ['user_id' => $user_id]);
    }

  


    public function addTransaction(Request $request)
    {

        
        // Validate the input
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'game_id' => 'required|string',
            'draw_date' => 'required|date',
        ]);
        $transactionId = uniqid();

        // Create the new transaction
        // $user = Auth::user();
        // $email = $request->input('email');
        // $user = User::where('email', $email)->first();
       
        PublicTicketTransaction::create([
            'transaction_id' => $transactionId,
            'game_id'=> $request->input('game_id'),
            'amount' => $request->input('amount'),
            'draw_date' => $request->input('draw_date'),
            'ticket_date' => now(),
        ]);
        PrivateTicketTransaction::create([
            'user_id' => $request->input('name'),
            'credit' => -$request->input('amount'),
            'transaction_id' => $transactionId,
            'ticket_status' => true,
        ]);

        // Redirect back with success message
        return redirect()->route('home')
        ->with('success', 'Transaction added successfully.');

    }

    public function showUserTransactions($name)
    {
        // $user = Auth::user();
        $transactions = PrivateTicketTransaction::where('user_id', $name)->get();

        return view('user', ['transactions' => $transactions, 'user_id' => $name]);
    }

    public function exportToPDF()
    {
        $publicTicketTransactions = PublicTicketTransaction::all();

        $pdf = PDF::loadView('pdf.public_transactions', ['publicTicketTransactions' => $publicTicketTransactions]);

        return $pdf->download('public_transactions.pdf');
    }

}
