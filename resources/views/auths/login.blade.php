<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTCI - GROUPE</title>
    <link rel="stylesheet" href="assets/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/x-icon">

</head>
<body><p></p><br><br>

        <div class="wrapper bg-white"><br>
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="h2 text-center">OTCI GROUPE</div>
        <form class="pt-3" action="{{route('postLogin')}}" method="POST">
            @csrf
            <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="email" name="email" placeholder=" Addresse Email " required class="">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" name="password" placeholder="Mot de Passe" required class="">
                </div>
            </div>

            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Se souvenir de moi
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <button class="btn btn-block text-center my-3">Se connecter</button>

        </form>



    </div>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
