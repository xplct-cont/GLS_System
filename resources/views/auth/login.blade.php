<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- div container start -->
    <div class="container">
        <!-- left side div start  -->
        <div class="left">
            <div class="top-left-text">
                <h1>GUILD OF LODGE SECRETARIES</h1>
            </div>
        </div>
        <!-- left side div end  -->

        <!-- right side div start-->
        <div class="right">

            <!-- form switch links start -->
            <div class="switchs">
                <button class="switchlink" onclick="openForm(event, 'LogIn')" id="defaultOpen">Log In</button>
                <button class="switchlink" onclick="openForm(event, 'SignUp')"> Sign Up</button>

            </div>
            <!-- form switch links end -->

            <!-- switch content container start -->
            <div class="switch-container">

                <!-- login form start -->
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
                <!-- login form end -->

                <!-- sign up form start -->
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
                <!-- sign up form end -->

            </div>
            <!-- switch content container end -->
        </div>
        <!-- right side div end  -->
    </div>
    <!-- div container end -->

</body>

</html>

<style>
    /* basic styling  */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;

    }


    /* layout start */
    /* css for creating two column layout  */
    .container {
        display: grid;
        height: 100vh;
        overflow: hidden;
        grid-template-columns: 50% 50%;

    }



    /* css for adding background image in left side  */
    .left {

        position: relative;
        background-color: #646464;
        background-image: url('img/logo.png');
        background-repeat: no-repeat;
        background-size: 60% auto;
        background-position: center center;


    }

    .top-left-text {
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        text-align: center;
        padding: 20px;
        color: white;
        font-size: 14px;
    }

    /* css for setting background for right side div */
    .right {
        background-color: #646464;
        background-image: url('img/back_test.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
    }

    /* layout end  */

    /* switch system start */
    /* css for styling the switchs */
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

    /* css for styling the switchlink buttons */
    .switchlink {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px 12px;
        transition: 0.3s;
    }

    /* Change background color of switchlink buttons on hover */
    .switchlink:hover {
        background-color: white;
    }

    /* Create an active/current switchlink class */
    .switchlink.active {
        background-color: #263095;
        color: white;
    }

    /* adding margin to center a switch content  */
    .switch-container {
        margin: 20% 15% auto 15%;
    }

    /* Style the switchcontent */
    .switchcontent {
        display: none;
        padding: 6px 12px;
        border-top: none;
    }

    /* fade effect animation  on switchcontent  */
    .switchcontent {
        animation: fadeEffect 1s;
        /* Fading effect takes 1 second */
    }

    /* Go from zero to full opacity */
    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* styling title  */
    .title {
        margin-bottom: 3rem;
        color: #eee;
        font-size: 25px;
    }

    /* switch system end */

    /* sign up and login form start */
    /* styling field-wrap div */
    .field-wrap {
        position: relative;
        height: 5rem;
        line-height: 44px;

    }

    /* css for label  */
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

    /* css for input field */
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

    /* css for moving label to above the input field on focus and valid  */
    input:focus~label,
    input:valid~label {
        font-size: 10px;
        top: -2rem;
        color: #ccc;
    }

    /* css for input autofill  */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {
        -webkit-text-fill-color: #fff;
        transition: background-color 5000s ease-in-out 0s;
    }

    /* css for forgot link */
    .forgot {
        margin: 1rem auto;
        font-size: 1rem;
    }

    .forgot a {
        color: #eee;
        text-decoration: none;
        font-size: italic;
    }

    /* css for action button  */
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

    /* sign up and login form end */

    /* css for responsiveness */
    @media only screen and (max-width: 725px) {

        /* layout start */
        .container {
            display: grid;
            grid-template-columns: 100%;
        }

        .left {
            display: none;
        }

        /* layout end */

        /* switch system start  */
        .switch-container {
            margin: 50% 5% auto 5%;
        }

        /* switch system end  */
    }
</style>

<script>
    /* function to open form based on formName */
    function openForm(evt, formName) {
        // Declare all variables
        var i, switchcontent, switchlinks;

        // Get all elements with class="switchcontent" and hide them
        switchcontent = document.getElementsByClassName("switchcontent");
        for (i = 0; i < switchcontent.length; i++) {
            switchcontent[i].style.display = "none";
        }

        // Get all button elements with class="switchlink" and remove the class "active"
        switchlinks = document.getElementsByClassName("switchlink");
        for (i = 0; i < switchlinks.length; i++) {
            switchlinks[i].className = switchlinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(formName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // show default form
    document.getElementById("defaultOpen").click();
</script>
