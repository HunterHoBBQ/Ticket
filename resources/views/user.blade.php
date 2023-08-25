<!DOCTYPE html>
<html>
<head>
    <title>Your Ticket Transactions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ticket System</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('add.transaction.form', ['user_id' => $user_id]) }}" class="btn btn-success">Buy Ticket</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-danger">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Your Ticket Transactions</h1>
        <p>Welcome, {{ $user_id->name }}!</p>
        <div class="transactions mt-4">
            <h2>Your Ticket Transactions</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Credits</th>
                        <th>Ticket Status</th>
                        <th>Game ID</th>
                        <th>Amount</th>
                        <th>Draw Date</th>
                        <th>Ticket Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mergedTransactions as $transaction)
                    <tr>
                        <td>{{ $transaction->transaction_id }}</td>
                        <td>{{ $transaction->credit ?? '' }}</td>
                        <td>{{ $transaction->ticket_status ?? '' }}</td>
                        <td>{{ $transaction->game_id ?? '' }}</td>
                        <td>{{ $transaction->amount ?? '' }}</td>
                        <td>{{ $transaction->draw_date ? substr($transaction->draw_date, 0, 10) : '' }}</td>
                        <td>{{ $transaction->ticket_date ? substr($transaction->ticket_date, 0, 10) : '' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
