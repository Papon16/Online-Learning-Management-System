<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - LearnHub</title>

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
           MAIN CONTAINER
        ========================================= */

        .register-container {

            width: 1100px;

            max-width: 100%;

            min-height: 650px;

            background: #ffffff;

            border-radius: 22px;

            overflow: hidden;

            display: grid;

            grid-template-columns: 0.95fr 1.05fr;

            box-shadow:
                0 25px 70px
                rgba(
                    30,
                    80,
                    150,
                    0.14
                );
        }


        /* =========================================
           LEFT SIDE
        ========================================= */

        .register-left {

            padding: 45px 48px;

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

            margin-bottom: 28px;
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
           TITLE
        ========================================= */

        .register-title {

            font-size: 34px;

            color: #102653;

            margin-bottom: 9px;

            font-weight: 700;
        }


        .register-title span {

            color: #1768ff;
        }


        .register-subtitle {

            font-size: 13px;

            color: #6d7d9b;

            line-height: 1.6;

            margin-bottom: 22px;

            max-width: 420px;
        }


        /* =========================================
           ALERT
        ========================================= */

        .alert {

            padding: 11px 14px;

            border-radius: 8px;

            margin-bottom: 15px;

            font-size: 12px;

            line-height: 1.5;
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
           FORM GRID
        ========================================= */

        .form-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px;
        }


        .form-group {

            margin-bottom: 14px;
        }


        .form-label {

            display: block;

            font-size: 12px;

            font-weight: 600;

            color: #182a51;

            margin-bottom: 6px;
        }


        .input-wrapper {

            height: 43px;

            display: flex;

            align-items: center;

            border: 1px solid #dce4f0;

            border-radius: 8px;

            overflow: hidden;

            background: #ffffff;

            transition: 0.25s;
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

            width: 40px;

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #647898;

            font-size: 15px;
        }


        .input-wrapper input,
        .input-wrapper select {

            flex: 1;

            width: 100%;

            height: 100%;

            border: none;

            outline: none;

            padding: 0 9px;

            font-size: 12px;

            color: #1a2c50;

            background: transparent;
        }


        .input-wrapper input::placeholder {

            color: #a2aec1;
        }


        /* =========================================
           ROLE
        ========================================= */

        .role-wrapper {

            height: 43px;

            display: flex;

            align-items: center;

            border: 1px solid #dce4f0;

            border-radius: 8px;

            overflow: hidden;

            background: #ffffff;
        }


        .role-wrapper select {

            flex: 1;

            height: 100%;

            border: none;

            outline: none;

            padding: 0 10px;

            color: #1a2c50;

            background: #ffffff;

            font-size: 12px;

            cursor: pointer;
        }


        /* =========================================
           TERMS
        ========================================= */

        .terms {

            display: flex;

            align-items: flex-start;

            gap: 7px;

            margin: 4px 0 16px;

            font-size: 11px;

            color: #6c7c97;

            line-height: 1.5;
        }


        .terms input {

            margin-top: 2px;

            width: 13px;

            height: 13px;
        }


        .terms a {

            color: #1768ff;

            text-decoration: none;

            font-weight: 600;
        }


        .terms a:hover {

            text-decoration: underline;
        }


        /* =========================================
           REGISTER BUTTON
        ========================================= */

        .register-button {

            width: 100%;

            height: 46px;

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


        .register-button:hover {

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
           LOGIN LINK
        ========================================= */

        .login-text {

            text-align: center;

            margin-top: 16px;

            color: #71809a;

            font-size: 12px;
        }


        .login-text a {

            color: #1768ff;

            font-weight: 700;

            text-decoration: none;
        }


        .login-text a:hover {

            text-decoration: underline;
        }


        /* =========================================
           BACK HOME
        ========================================= */

        .back-home {

            display: block;

            text-align: center;

            margin-top: 11px;

            color: #61718e;

            font-size: 12px;

            text-decoration: none;

            transition: 0.25s;
        }


        .back-home:hover {

            color: #1768ff;
        }


        /* =========================================
           RIGHT IMAGE
        ========================================= */

        .register-right {

            position: relative;

            min-height: 650px;

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


        .register-right::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            background:
                rgba(
                    87,
                    151,
                    255,
                    0.10
                );

            top: 70px;

            left: 50%;

            transform:
                translateX(-50%);
        }


        .register-hero-image {

            position: relative;

            z-index: 2;

            width: 100%;

            height: 100%;

            object-fit: cover;

            object-position: center;
        }


        /* =========================================
           TOP BADGE
        ========================================= */

        .badge-top {

            position: absolute;

            top: 35px;

            left: 30px;

            z-index: 5;

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
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 950px) {

            body {

                padding: 20px;
            }


            .register-container {

                grid-template-columns: 1fr;

                width: 600px;
            }


            .register-right {

                display: none;
            }


            .register-left {

                padding: 40px 35px;
            }

        }


        @media (max-width: 550px) {

            body {

                padding: 10px;
            }


            .register-left {

                padding: 30px 20px;
            }


            .form-row {

                grid-template-columns: 1fr;

                gap: 0;
            }


            .register-title {

                font-size: 29px;
            }

        }

    </style>

</head>


<body>


<div class="register-container">


    <!-- =========================================
         LEFT SIDE - REGISTER FORM
    ========================================== -->

    <div class="register-left">


        <!-- LOGO -->

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



        <!-- TITLE -->

        <h1 class="register-title">

            Create Your
            <span>Account</span> ✨

        </h1>


        <p class="register-subtitle">

            Join LearnHub and start your learning journey
            today. It's free and easy!

        </p>



        <!-- ERROR -->

        @if(session('error'))

            <div class="alert alert-error">

                {{ session('error') }}

            </div>

        @endif



        <!-- SUCCESS -->

        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif



        <!-- VALIDATION ERRORS -->

        @if($errors->any())

            <div class="alert alert-error">

                @foreach($errors->all() as $error)

                    <div>
                        {{ $error }}
                    </div>

                @endforeach

            </div>

        @endif



        <!-- REGISTER FORM -->

        <form
            method="POST"
            action="{{ route('register.submit') }}"
        >

            @csrf



            <!-- NAME + EMAIL -->

            <div class="form-row">


                <!-- NAME -->

                <div class="form-group">

                    <label
                        class="form-label"
                        for="name"
                    >
                        Full Name
                    </label>


                    <div class="input-wrapper">

                        <div class="input-icon">
                            👤
                        </div>


                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your name"
                            required
                        >

                    </div>

                </div>



                <!-- EMAIL -->

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

            </div>



            <!-- PASSWORD + CONFIRM -->

            <div class="form-row">


                <!-- PASSWORD -->

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
                            placeholder="Create password"
                            required
                        >

                    </div>

                </div>



                <!-- CONFIRM PASSWORD -->

                <div class="form-group">

                    <label
                        class="form-label"
                        for="password_confirmation"
                    >
                        Confirm Password
                    </label>


                    <div class="input-wrapper">

                        <div class="input-icon">
                            🔐
                        </div>


                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Confirm password"
                            required
                        >

                    </div>

                </div>

            </div>



            <!-- ROLE -->

            <div class="form-group">

                <label
                    class="form-label"
                    for="role"
                >
                    Register As
                </label>


                <div class="role-wrapper">

                    <select
                        name="role"
                        id="role"
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

                    </select>

                </div>

            </div>



            <!-- TERMS -->

            <label class="terms">

                <input
                    type="checkbox"
                    required
                >

                <span>

                    I agree to the
                    <a href="#">
                        Terms & Conditions
                    </a>
                    and
                    <a href="#">
                        Privacy Policy
                    </a>.

                </span>

            </label>



            <!-- REGISTER -->

            <button
                type="submit"
                class="register-button"
            >

                Create Account →

            </button>

        </form>



        <!-- LOGIN -->

        <div class="login-text">

            Already have an account?

            <a href="{{ route('login') }}">
                Login
            </a>

        </div>



        <!-- BACK HOME -->

        <a
            href="{{ route('home') }}"
            class="back-home"
        >

            ← Back to Home

        </a>


    </div>



    <!-- =========================================
         RIGHT SIDE - IMAGE
    ========================================== -->

    <div class="register-right">


        <div class="badge-top">

            🎓 &nbsp; Start Learning Today

        </div>


        <img
            src="{{ asset('images/register-hero.png') }}"
            alt="LearnHub Registration"
            class="register-hero-image"
        >


    </div>


</div>


</body>

</html>