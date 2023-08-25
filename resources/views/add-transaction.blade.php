@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="transaction-form">
        <h1 class="text-center mb-4">Add New Transaction to Buyer: <span>{{ $user_id }}</span></h1>
        <form method="POST" action="{{ route('add.transaction') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="game_id">Game ID:</label>
                <input type="text" id="game_id" name="game_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="draw_date">Draw Date:</label>
                <input type="date" id="draw_date" name="draw_date" class="form-control" required>
            </div>
            <input type="hidden" name="name" value="{{ $user_id }}">
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <button type="submit" class="btn btn-primary btn-block">Add Transaction</button>
        </form>
    </div>
</div>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .transaction-form {
        width: 80%;
        max-width: 400px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .btn-block {
        width: 100%;
    }
</style>
@endsection
