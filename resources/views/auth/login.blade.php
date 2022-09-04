<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    @vite(['resources/js/app.js'])
    <title>Login</title>
</head>
<body>
    <div class="wrapper d-flex flex-column justify-content-center align-items-center ">
        <div class="col-4 d-flex flex-column align-items-center gap-3">
            <img class="w-25 h-25" src="{{ asset('images/limonist.png') }}" alt="logo">
            <div class="hdr">
                <h4 class="font-weight-bold text-center">Giriş</h4>
                <small>Giriş bilgilerinizi giriniz</small>
            </div>
            <form method="post" action="{{ route('login') }}" class="d-flex flex-column align-items-center gap-3 mt-5">
                @csrf
                <div class="form-group d-flex justify-content-center w-100">
                  <input type="email" class=" custom_input form-control p-2  w-75 rounded-5 border-0" id="email" name="email" placeholder="E-Posta">
                </div>
                <div class="form-group d-flex justify-content-center w-100">
                  <input type="password" class=" custom_input form-control p-2  w-75 rounded-5 border-0" id="password"  name="password" placeholder="Şifre">
                </div>
                <a href="#" class="forgot_link text-muted text-decoration-none align-self-start">Şifremi Unuttum</a><br>
                <input type="submit" class="btn btn-success py-2 px-4" value="Giriş">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
              </form>
        </div>
    </div>
</body>
</html>
