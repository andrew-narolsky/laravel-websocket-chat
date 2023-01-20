<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="{{ mix('/assets/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/assets/js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="card-body">
        <form action="{{ route('send') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputContent" class="input__label">{{ __('Повідомлення') }}</label>
                        <textarea class="form-control input-style" name="message"></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <button type="submit" class="btn btn-success btn-style">{{ __('Відправити') }}</button>
        </form>
    </div>
</div>
</body>
</html>
