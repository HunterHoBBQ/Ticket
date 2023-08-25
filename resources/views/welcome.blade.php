<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Ticket System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ticket System</a>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('export.pdf') }}" class="btn btn-info">Export to PDF</a>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a> --}}
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-success">Log In</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Welcome to Ticket System</h1>
        <p>Your go-to platform for ticket transactions.</p>
        <div class="public-tickets mt-4">
            <h2>Public Ticket Transactions</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Game ID</th>
                        <th>Amount</th>
                        <th>Draw_date</th>
                        <th>Ticket_date</th>
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
        </div>
    </div>
</body>
</html>
