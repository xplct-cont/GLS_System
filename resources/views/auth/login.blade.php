<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div style="display: flex; justify-content: center;">
                <img src="img/logo.png" alt=""
                    style="height: 120px; width: 120px; margin-top:10px; box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.3); border-radius: 50%;">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row" style="margin-bottom: 30px;">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="Email Address" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red; font-weight:normal; font-size: 12px;">{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red; font-weight:normal; font-size: 12px;">{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="pass"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Don't have an account? <a href="/register">Sign Up</a></div>
            </form>
        </div>
    </div>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #c5c5c5;
        overflow: hidden;
    }

    ::selection {
        background: rgba(26, 188, 156, 0.3);
    }

    .container {
        max-width: 440px;
        padding: 0 20px;
        margin: 100px auto;
    }

    .wrapper {
        width: 100%;
        background: #fff;
        border-radius: 5px;
        align-items: center;
        box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
    }

    .wrapper form {
        padding: 30px 25px 25px 25px;
    }

    .wrapper form .row {
        height: 45px;
        margin-bottom: 15px;
        position: relative;
    }

    .wrapper form .row input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    form .row input:focus {
        border-color: #273094;
        box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
    }

    form .row input::placeholder {
        color: #999;
    }

    .wrapper form .row i {
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #273094;
        border: 1px solid #273094;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper form .pass {
        display: flex;
        margin: -8px 0 20px 0;
        justify-content: end;
    }

    .wrapper form .pass a {
        color: #373737;
        font-size: 17px;
        text-decoration: none;
    }

    .wrapper form .pass a:hover {
        text-decoration: underline;
    }

    .wrapper form .button input {
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #273094;
        border: none;
        cursor: pointer;
    }

    form .button input:hover {
        background: #716e6e;
    }

    .wrapper form .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
    }

    .wrapper form .signup-link a {
        color: #273094;
        text-decoration: none;
    }

    form .signup-link a:hover {
        text-decoration: underline;
    }
</style>
