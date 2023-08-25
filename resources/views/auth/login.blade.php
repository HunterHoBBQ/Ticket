<!DOCTYPE html>
<html>
<head>
    <title>Login - Ticket System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.transactions') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Show Transactions') }}
                                </button>
                            </div>
                            1. bell.okuneva@example.net <br/>
                            2. gorczany.adolfo@example.com <br/>
                            3. jaime18@example.com <br/>
                            *. skiles.era@example.org <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
