<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - LearnHub</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            min-height: 100vh;

            background:
                linear-gradient(
                    135deg,
                    #f3f8ff 0%,
                    #eaf3ff 50%,
                    #f7faff 100%
                );

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;

        }


        /* =========================================
           MAIN LOGIN CONTAINER
        ========================================= */

        .login-container {

            width: 900px;

            max-width: 100%;

            min-height: 575px;

            background: #ffffff;

            border-radius: 22px;

            overflow: hidden;

            display: grid;

            grid-template-columns: 1fr 1fr;

            box-shadow:
                0 25px 70px rgba(
                    30,
                    80,
                    150,
                    0.14
                );

        }


        /* =========================================
           LEFT SIDE
        ========================================= */

        .login-left {

            padding: 48px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            background: #ffffff;

        }


        /* =========================================
           LOGO
        ========================================= */

        .logo {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            width: fit-content;

            margin-bottom: 42px;

        }


        .logo-icon {

            width: 44px;

            height: 44px;

            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #315cff,
                    #4935ed
                );

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

        }


        .logo-text h2 {

            font-size: 21px;

            color: #1768ff;

            margin-bottom: 2px;

        }


        .logo-text span {

            font-size: 10px;

            color: #7888a5;

        }


        /* =========================================
           HEADING
        ========================================= */

        .welcome-title {

            font-size: 36px;

            color: #102653;

            margin-bottom: 12px;

            font-weight: 700;

        }


        .welcome-text {

            font-size: 14px;

            color: #6d7d9b;

            line-height: 1.7;

            margin-bottom: 27px;

            max-width: 390px;

        }


        /* =========================================
           FORM
        ========================================= */

        .form-group {

            margin-bottom: 18px;

        }


        .form-label {

            display: block;

            font-size: 13px;

            font-weight: 600;

            color: #182a51;

            margin-bottom: 7px;

        }


        .input-wrapper {

            height: 46px;

            display: flex;

            align-items: center;

            border: 1px solid #dce4f0;

            border-radius: 8px;

            overflow: hidden;

            transition: 0.25s;

            background: #ffffff;

        }


        .input-wrapper:focus-within {

            border-color: #1768ff;

            box-shadow:
                0 0 0 3px
                rgba(
                    23,
                    104,
                    255,
                    0.08
                );

        }


        .input-icon {

            width: 43px;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #647898;

            font-size: 16px;

        }


        .input-wrapper input {

            flex: 1;

            height: 100%;

            border: none;

            outline: none;

            padding: 0 12px;

            font-size: 13px;

            color: #1a2c50;

        }


        .input-wrapper input::placeholder {

            color: #a2aec1;

        }


        /* =========================================
           ROLE SELECT
        ========================================= */

        .role-select {

            flex: 1;

            height: 100%;

            border: none;

            outline: none;

            padding: 0 12px;

            font-size: 13px;

            color: #1a2c50;

            background: #ffffff;

            cursor: pointer;

        }


        .role-select:focus {

            outline: none;

        }


        .role-select option {

            color: #1a2c50;

            background: #ffffff;

        }


        /* =========================================
           REMEMBER + FORGOT
        ========================================= */

        .form-options {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin: 5px 0 20px;

        }


        .remember {

            display: flex;

            align-items: center;

            gap: 7px;

            font-size: 12px;

            color: #667792;

            cursor: pointer;

        }


        .remember input {

            width: 13px;

            height: 13px;

        }


        .forgot {

            text-decoration: none;

            color: #1768ff;

            font-size: 12px;

            font-weight: 600;

        }


        .forgot:hover {

            text-decoration: underline;

        }


        /* =========================================
           LOGIN BUTTON
        ========================================= */

        .login-button {

            width: 100%;

            height: 47px;

            border: none;

            border-radius: 8px;

            background:
                linear-gradient(
                    90deg,
                    #2470ff,
                    #185be0
                );

            color: #ffffff;

            font-size: 14px;

            font-weight: 700;

            cursor: pointer;

            transition: 0.3s;

        }


        .login-button:hover {

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px
                rgba(
                    23,
                    104,
                    255,
                    0.25
                );

        }


        /* =========================================
           REGISTER
        ========================================= */

        .register-text {

            text-align: center;

            margin-top: 20px;

            color: #71809a;

            font-size: 12px;

        }


        .register-text a {

            color: #1768ff;

            font-weight: 700;

            text-decoration: none;

        }


        .register-text a:hover {

            text-decoration: underline;

        }


        /* =========================================
           BACK HOME
        ========================================= */

        .back-home {

            display: block;

            text-align: center;

            margin-top: 17px;

            color: #61718e;

            font-size: 12px;

            text-decoration: none;

            transition: 0.25s;

        }


        .back-home:hover {

            color: #1768ff;

        }


        /* =========================================
           RIGHT SIDE
        ========================================= */

        .login-right {

            position: relative;

            min-height: 575px;

            background:
                linear-gradient(
                    145deg,
                    #eaf3ff,
                    #dceaff
                );

            overflow: hidden;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        /* Decorative circle */


        .circle-one {

            position: absolute;

            width: 370px;

            height: 370px;

            border-radius: 50%;

            background:
                rgba(
                    102,
                    158,
                    255,
                    0.16
                );

            top: 105px;

            left: 50%;

            transform:
                translateX(-50%);

        }


        .circle-two {

            position: absolute;

            width: 260px;

            height: 260px;

            border-radius: 50%;

            background:
                rgba(
                    255,
                    255,
                    255,
                    0.22
                );

            top: 160px;

            left: 50%;

            transform:
                translateX(-50%);

        }


        /* =========================================
           RIGHT BADGES
        ========================================= */

        .badge {

            position: absolute;

            background: #ffffff;

            padding: 11px 17px;

            border-radius: 11px;

            box-shadow:
                0 8px 25px
                rgba(
                    50,
                    90,
                    150,
                    0.12
                );

            font-size: 12px;

            font-weight: 600;

            color: #182b55;

            z-index: 3;

        }


        .badge-top {

            top: 78px;

            left: 20px;

        }


        .badge-bottom {

            bottom: 86px;

            right: 18px;

        }


        /* =========================================
           CENTER ILLUSTRATION
        ========================================= */

        .right-content {

            position: relative;

            z-index: 2;

            width: 100%;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .learning-illustration {

            width: 245px;

            height: 245px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #c8dcff,
                    #e3eeff
                );

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 105px;

            box-shadow:
                inset 0 0 30px
                rgba(
                    255,
                    255,
                    255,
                    0.35
                );

        }


        /* =========================================
           ERROR / SUCCESS
        ========================================= */

        .alert {

            padding: 11px 14px;

            border-radius: 8px;

            margin-bottom: 18px;

            font-size: 12px;

        }


        .alert-error {

            background: #fff1f1;

            color: #c62828;

            border:
                1px solid #ffd2d2;

        }


        .alert-success {

            background: #effcf3;

            color: #218838;

            border:
                1px solid #ccefd5;

        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 850px) {

            body {

                padding: 20px;

            }


            .login-container {

                grid-template-columns: 1fr;

            }


            .login-right {

                display: none;

            }


            .login-left {

                padding: 40px 30px;

            }

        }


        @media (max-width: 480px) {

            body {

                padding: 12px;

            }


            .login-left {

                padding: 30px 22px;

            }


            .welcome-title {

                font-size: 30px;

            }


            .logo {

                margin-bottom: 30px;

            }

        }

    </style>

</head>


<body>


<div class="login-container">


    <!-- =========================================
         LEFT SIDE
    ========================================== -->

    <div class="login-left">


        <!-- Logo -->

        <a
            href="{{ route('home') }}"
            class="logo"
            title="Go to Home"
        >

            <div class="logo-icon">

                🎓

            </div>


            <div class="logo-text">

                <h2>

                    LearnHub

                </h2>


                <span>

                    Online Learning System

                </span>

            </div>

        </a>



        <!-- Heading -->

        <h1 class="welcome-title">

            Welcome Back! 👋

        </h1>


        <p class="welcome-text">

            Login to your LearnHub account and
            continue your learning journey.

        </p>



        <!-- Error -->

        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif



        <!-- Success -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif



        <!-- Validation Errors -->

        @if($errors->any())

            <div class="alert alert-error">

                @foreach($errors->all() as $error)

                    <div>

                        {{ $error }}

                    </div>

                @endforeach

            </div>

        @endif



        <!-- Login Form -->

        <form
            method="POST"
            action="{{ route('login.submit') }}"
        >

            @csrf



            <!-- =================================
                 Email
            ================================== -->

            <div class="form-group">

                <label
                    class="form-label"
                    for="email"
                >

                    Email Address

                </label>


                <div class="input-wrapper">

                    <div class="input-icon">

                        ✉

                    </div>


                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                    >

                </div>

            </div>



            <!-- =================================
                 ROLE
            ================================== -->

            <div class="form-group">

                <label
                    class="form-label"
                    for="role"
                >

                    Login As

                </label>


                <div class="input-wrapper">

                    <div class="input-icon">

                        👤

                    </div>


                    <select
                        id="role"
                        name="role"
                        class="role-select"
                        required
                    >

                        <option value="">

                            Select your role

                        </option>


                        <option
                            value="student"
                            {{ old('role') == 'student' ? 'selected' : '' }}
                        >

                            Student

                        </option>


                        <option
                            value="teacher"
                            {{ old('role') == 'teacher' ? 'selected' : '' }}
                        >

                            Teacher

                        </option>


                        <option
                            value="admin"
                            {{ old('role') == 'admin' ? 'selected' : '' }}
                        >

                            Admin

                        </option>

                    </select>

                </div>

            </div>



            <!-- =================================
                 Password
            ================================== -->

            <div class="form-group">

                <label
                    class="form-label"
                    for="password"
                >

                    Password

                </label>


                <div class="input-wrapper">

                    <div class="input-icon">

                        🔒

                    </div>


                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>

            </div>



            <!-- =================================
                 Options
            ================================== -->

            <div class="form-options">


                <label class="remember">


                    <input
                        type="checkbox"
                        name="remember"
                    >


                    Remember me


                </label>



                <a
                    href="#"
                    class="forgot"
                    onclick="return false;"
                >

                    Forgot Password?

                </a>


            </div>



            <!-- =================================
                 Login
            ================================== -->

            <button
                type="submit"
                class="login-button"
            >

                Login →

            </button>


        </form>



        <!-- =================================
             Register
        ================================== -->

        <div class="register-text">

            Don't have an account?


            <a href="{{ route('register') }}">

                Create Account

            </a>

        </div>



        <!-- =================================
             BACK TO HOME
        ================================== -->

        <a
            href="{{ route('home') }}"
            class="back-home"
        >

            ← Back to Home

        </a>


    </div>



    <!-- =========================================
         RIGHT SIDE
    ========================================== -->

    <div class="login-right">


        <div class="circle-one"></div>


        <div class="circle-two"></div>



        <!-- Top Badge -->

        <div class="badge badge-top">

            🎓 &nbsp; Learn Anytime

        </div>



        <!-- Bottom Badge -->

        <div class="badge badge-bottom">

            📚 &nbsp; Grow Your Skills

        </div>



        <!-- Illustration -->

        <div class="right-content">


            <div class="learning-illustration">

                💻

            </div>


        </div>


    </div>


</div>


</body>

</html>