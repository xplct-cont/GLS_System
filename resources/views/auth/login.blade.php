<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">

        <div class="cont_1">
            <div class="left">
                <div class="logo-and-text">
                    <img src="img/logo.png" style="height: 400px; width: 400px; margin: 0 auto;" alt="">
                    <div class="bottom-center-text">
                        <h1>GUILD OF LODGE SECRETARIES</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="switchs">
                <button class="switchlink" onclick="openForm(event, 'LogIn')" id="defaultOpen">Log In</button>
                <button class="switchlink" onclick="openForm(event, 'SignUp')"> Sign Up</button>

            </div>

            <div class="switch-container">

                <div id="LogIn" class="switchcontent">

                    <div style="text-align: center; margin-top:-100px;">
                        <img src="img/logo.png" style="height: 150px; width: 150px; display: inline-block;"
                            alt="">
                    </div>
                    <h1 class="title">Welcome Back!</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field-wrap">
                            <input id="signInEmail" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="signInEmail">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="field-wrap">
                            <input id="signInPswd" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            <label for="signInPswd">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @if (Route::has('password.request'))
                            <a style="color:#ccc;" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <button type="submit" class="actionbtn">Log In</button>
                    </form>
                </div>

                <div id="SignUp" class="switchcontent">

                    <div style="text-align: center; margin-top:-130px;">
                        <img src="img/logo.png" style="height: 150px; width: 150px; display: inline-block;"
                            alt="">
                    </div>

                    <h1 class="title">Sign Up</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field-wrap" style="margin-top: -20px;">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="name">Full Name</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="field-wrap">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                            <label for="email">Email Address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="field-wrap">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="field-wrap">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">Confirm Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red; font-weight:normal;">{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <button type="submit" class="actionbtn">Sign Up</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;

    }

    body {
        background-image: url("img/back_test.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
        background-color: #444444;
    }

    .container {
        display: grid;
        height: 100vh;
        overflow: hidden;
        grid-template-columns: 45% 50%;

    }

    .cont_1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left {

        flex: 1
    }

    .logo-and-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .bottom-center-text {
        text-align: center;
        color: white;
        font-size: 13px;
    }


    .switchs {
        overflow: hidden;
        border: 1px solid white;
        background-color: white;
        width: max-content;
        position: absolute;
        right: 2rem;
        top: 2rem;
        border-radius: 2rem;
    }

    .switchlink {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px 12px;
        transition: 0.3s;
    }

    .switchlink:hover {
        background-color: white;
    }

    .switchlink.active {
        background-color: #263095;
        color: white;
    }

    .switch-container {
        margin: 23% 15% auto 15%;
        justify-content: center;
        align-items: center;
    }

    .switchcontent {
        display: none;
        padding: 6px 12px;
        border-top: none;
    }

    .switchcontent {
        animation: fadeEffect 1s;
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .title {
        margin-bottom: 3rem;
        color: #eee;
        font-size: 25px;
    }


    .field-wrap {
        position: relative;
        height: 5rem;
        line-height: 44px;

    }

    label {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        color: #d3d3d3;
        transition: 0.2s all;
        cursor: text;
        font-size: 1.2rem;
    }

    input {
        width: 100%;
        border: 0;
        outline: 0;
        padding: 0.5rem 0;
        border-bottom: 2px solid white;
        box-shadow: none;
        background-color: transparent;
        font-size: 1.5rem;
        color: #fff;
    }

    input:invalid {
        outline: 0;
    }

    input:focus,
    input:valid {
        border-color: #ccc;
    }

    input:focus~label,
    input:valid~label {
        font-size: 10px;
        top: -2rem;
        color: #ccc;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: #fff;
        transition: background-color 5000s ease-in-out 0s;
    }

    .forgot {
        margin: 1rem auto;
        font-size: 1rem;
    }

    .forgot a {
        color: #eee;
        text-decoration: none;
        font-size: italic;
    }

    .actionbtn {
        padding: 0.7rem;
        margin-top: 1rem;
        width: 100%;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.5s ease;
        background-color: #263095;
        color: white;
        border: none;
    }

    .actionbtn:hover {
        background-color: #ccc;
        color: #3c3232;
    }


    @media only screen and (max-width: 725px) {

        .container {
            display: grid;
            grid-template-columns: 100%;
        }

        .left {
            display: none;
        }


        .switch-container {
            margin: 50% 5% auto 5%;
        }

    }
</style>

<script>
    function openForm(evt, formName) {
        var i, switchcontent, switchlinks;

        switchcontent = document.getElementsByClassName("switchcontent");
        for (i = 0; i < switchcontent.length; i++) {
            switchcontent[i].style.display = "none";
        }

        switchlinks = document.getElementsByClassName("switchlink");
        for (i = 0; i < switchlinks.length; i++) {
            switchlinks[i].className = switchlinks[i].className.replace(" active", "");
        }

        document.getElementById(formName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>
