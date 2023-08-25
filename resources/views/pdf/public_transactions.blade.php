<!DOCTYPE html>
<html>
<head>
    <title>Public Ticket Transactions</title>
</head>
<body>
    <h2>Public Ticket Transactions</h2>
    <table>
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Game ID</th>
                <th>Amount</th>
                <th>Draw Date</th>
                <th>Ticket Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publicTicketTransactions as $transaction)
                <tr>
                    <td>{{ $transaction->transaction_id }}</td>
                    <td>{{ $transaction->game_id }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ substr($transaction->draw_date, 0, 10) }}</td>
                    <td>{{ substr($transaction->ticket_date, 0, 10) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
