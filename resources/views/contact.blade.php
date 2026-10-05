<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Contact Us - LearnHub
    </title>


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

            color: #111b42;

            background: #ffffff;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {

            height: 82px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 6%;

            background: #ffffff;

            border-bottom:
                1px solid #edf1f8;

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;
        }


        .logo-icon {

            width: 55px;

            height: 55px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 31px;
        }


        .logo-content {

            display: flex;

            flex-direction: column;
        }


        .logo-title {

            font-size: 27px;

            font-weight: 800;

            line-height: 1;

            background:
                linear-gradient(
                    90deg,
                    #1769ff,
                    #4d30df
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;
        }


        .logo-subtitle {

            color: #697594;

            font-size: 11px;

            margin-top: 4px;
        }


        /* =========================
           NAV LINKS
        ========================= */

        .nav-links {

            display: flex;

            align-items: center;

            gap: 38px;
        }


        .nav-links a {

            position: relative;

            text-decoration: none;

            color: #17203d;

            font-size: 15px;

            padding: 8px 0;

            transition: .3s;
        }


        .nav-links a:hover {

            color: #1769ff;
        }


        .nav-links a.active {

            color: #1769ff;
        }


        .nav-links a.active::after {

            content: "";

            position: absolute;

            left: 0;

            right: 0;

            bottom: -9px;

            height: 3px;

            border-radius: 10px;

            background: #1769ff;
        }


        /* =========================
           NAV RIGHT
        ========================= */

        .nav-right {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .search-box {

            width: 275px;

            height: 44px;

            background: #f5f7fb;

            border-radius: 25px;

            display: flex;

            align-items: center;

            padding: 0 17px;

            gap: 10px;

            color: #66718d;
        }


        .search-box input {

            width: 100%;

            border: none;

            outline: none;

            background: transparent;

            font-size: 13px;
        }


        .nav-btn {

            height: 44px;

            padding: 0 25px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;

            transition: .3s;
        }


        .login-btn {

            color: #1769ff;

            background: white;

            border: 1px solid #1769ff;
        }


        .login-btn:hover {

            background: #1769ff;

            color: white;
        }


        .register-btn {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #1769ff,
                    #0962eb
                );

            border: 1px solid #1769ff;
        }


        /* =========================
           HERO
        ========================= */

        .contact-hero {

            min-height: 620px;

            padding: 45px 9% 35px;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            align-items: center;

            gap: 45px;

            background:

                radial-gradient(
                    circle at 90% 30%,
                    #dfeaff,
                    transparent 34%
                ),

                linear-gradient(
                    135deg,
                    #f9fcff,
                    #edf4ff
                );

            overflow: hidden;
        }


        .contact-left {

            max-width: 650px;
        }


        .contact-badge {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            background: #e4f0ff;

            color: #1769ff;

            border-radius: 25px;

            padding: 9px 18px;

            font-size: 13px;

            margin-bottom: 20px;
        }


        .contact-title {

            font-size: 64px;

            line-height: 1;

            letter-spacing: -2px;

            margin-bottom: 20px;

            font-weight: 800;
        }


        .contact-title span {

            color: #1769ff;

            background:
                linear-gradient(
                    90deg,
                    #1769ff,
                    #3150df
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;
        }


        .contact-description {

            max-width: 560px;

            font-size: 17px;

            line-height: 1.7;

            color: #687493;

            margin-bottom: 28px;
        }


        /* =========================
           FORM
        ========================= */

        .form-row {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 15px;

            margin-bottom: 15px;
        }


        .input-box {

            height: 54px;

            background: rgba(
                255,
                255,
                255,
                .9
            );

            border:
                1px solid #e1e7f1;

            border-radius: 10px;

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 0 17px;

            box-shadow:
                0 4px 15px
                rgba(
                    50,
                    80,
                    140,
                    .04
                );
        }


        .input-box span {

            font-size: 18px;

            color: #657493;
        }


        .input-box input {

            width: 100%;

            height: 100%;

            border: none;

            outline: none;

            background: transparent;

            font-size: 14px;
        }


        .input-box textarea {

            width: 100%;

            border: none;

            outline: none;

            background: transparent;

            resize: none;

            font-family: inherit;

            font-size: 14px;
        }


        .subject-box {

            margin-bottom: 15px;
        }


        .message-box {

            height: 115px;

            align-items: flex-start;

            padding-top: 15px;

            margin-bottom: 15px;
        }


        .message-box textarea {

            height: 85px;
        }


        .send-button {

            width: 100%;

            height: 58px;

            border: none;

            border-radius: 9px;

            background:
                linear-gradient(
                    90deg,
                    #1769ff,
                    #1685ee
                );

            color: white;

            font-size: 17px;

            font-weight: 600;

            cursor: pointer;

            transition: .3s;
        }


        .send-button:hover {

            transform:
                translateY(-2px);
        }


        /* =========================
           SUCCESS
        ========================= */

        .success-message {

            padding: 14px 18px;

            background: #e8f8ee;

            color: #178348;

            border:
                1px solid #bce8cb;

            border-radius: 8px;

            margin-bottom: 18px;

            font-size: 14px;
        }


        .error-message {

            color: #dc2626;

            font-size: 12px;

            margin-top: 6px;

            display: block;
        }


        /* =========================
           IMAGE
        ========================= */

        .contact-right {

            position: relative;

            min-height: 520px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .illustration-bg {

            position: absolute;

            width: 450px;

            height: 450px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #cce5ff,
                    #dfe7ff
                );
        }


        .contact-image {

            position: relative;

            z-index: 5;

            width: 510px;

            max-width: 100%;

            object-fit: contain;
        }


        .chat-bubble {

            position: absolute;

            z-index: 10;

            background: white;

            border-radius: 14px;

            padding: 15px 18px;

            box-shadow:
                0 15px 35px
                rgba(
                    30,
                    60,
                    120,
                    .12
                );

            font-size: 13px;

            font-weight: 600;

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .chat-bubble-icon {

            width: 38px;

            height: 38px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e8f2ff;

            color: #1769ff;
        }


        .bubble-help {

            top: 135px;

            left: 0;
        }


        .bubble-connect {

            top: 75px;

            right: -15px;
        }


        /* =========================
           INFO CARDS
        ========================= */

        .contact-info {

            padding: 30px 5% 45px;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 28px;

            background: white;
        }


        .info-card {

            min-height: 155px;

            background: white;

            border-radius: 12px;

            padding: 28px 25px;

            display: flex;

            align-items: center;

            gap: 20px;

            box-shadow:
                0 8px 30px
                rgba(
                    30,
                    50,
                    100,
                    .07
                );

            border:
                1px solid #f0f2f7;
        }


        .info-icon {

            min-width: 66px;

            width: 66px;

            height: 66px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 27px;
        }


        .location-icon {
            background: #e6f3ff;
        }


        .email-icon {
            background: #eee8ff;
        }


        .phone-icon {
            background: #e4f8eb;
        }


        .hours-icon {
            background: #fff0df;
        }


        .info-content h3 {

            font-size: 18px;

            margin-bottom: 9px;
        }


        .info-content p {

            color: #697593;

            font-size: 14px;

            line-height: 1.7;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            background: #111a3b;

            color: white;

            padding: 25px 8%;

            display: flex;

            justify-content: space-between;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 1000px) {

            .nav-links {
                display: none;
            }

            .contact-hero {

                grid-template-columns: 1fr;

                text-align: center;
            }

            .contact-left {
                margin: auto;
            }

            .contact-description {
                margin-left: auto;
                margin-right: auto;
            }

            .contact-info {

                grid-template-columns:
                    repeat(2, 1fr);
            }
        }


        @media(max-width: 650px) {

            .navbar {
                padding: 0 18px;
            }

            .search-box {
                display: none;
            }

            .logo-subtitle {
                display: none;
            }

            .contact-hero {
                padding: 35px 18px;
            }

            .contact-title {
                font-size: 43px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .illustration-bg {
                width: 290px;
                height: 290px;
            }

            .contact-image {
                width: 350px;
            }

            .contact-info {
                grid-template-columns: 1fr;
            }

            .footer {

                flex-direction: column;

                gap: 10px;

                text-align: center;
            }
        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">


    <a href="/" class="logo">

        <div class="logo-icon">
            🎓
        </div>

        <div class="logo-content">

            <div class="logo-title">
                LearnHub
            </div>

            <div class="logo-subtitle">
                Online Learning System
            </div>

        </div>

    </a>


    <div class="nav-links">

        <a href="/">
            Home
        </a>

        <a href="#">
            Courses
        </a>

        <a href="#">
            About
        </a>

        <a href="#">
            Instructors
        </a>

        <a
            href="{{ route('contact') }}"
            class="active"
        >
            Contact
        </a>

    </div>


    <div class="nav-right">


        <div class="search-box">

            🔍

            <input
                type="text"
                placeholder="Search courses..."
            >

        </div>


        @guest

            <a
                href="{{ route('login') }}"
                class="nav-btn login-btn"
            >
                Login
            </a>


            <a
                href="{{ route('register') }}"
                class="nav-btn register-btn"
            >
                Register
            </a>

        @else

            <a
                href="{{ url('/dashboard') }}"
                class="nav-btn register-btn"
            >
                Dashboard
            </a>

        @endguest

    </div>

</nav>



<!-- =====================================================
     CONTACT HERO
===================================================== -->

<section class="contact-hero">


    <!-- LEFT -->

    <div class="contact-left">


        <div class="contact-badge">

            ✈

            Get In Touch

        </div>


        <h1 class="contact-title">

            Contact
            <span>Us</span>

        </h1>


        <p class="contact-description">

            Have questions? We're here to help!
            Reach out to us and we'll get back to
            you as soon as possible.

        </p>



        {{-- Success message --}}

        @if(session('success'))

            <div class="success-message">

                {{ session('success') }}

            </div>

        @endif



        {{-- Validation errors --}}

        @if($errors->any())

            <div class="success-message"
                 style="
                    background:#fff1f2;
                    color:#dc2626;
                    border-color:#fecdd3;
                 ">

                Please fix the errors below.

            </div>

        @endif



        <!-- CONTACT FORM -->

        <form
            action="{{ route('contact.store') }}"
            method="POST"
        >

            @csrf


            <!-- NAME + EMAIL -->

            <div class="form-row">


                <div>

                    <div class="input-box">

                        <span>
                            ♙
                        </span>

                        <input
                            type="text"
                            name="name"
                            placeholder="Your Name"
                            value="{{ old('name') }}"
                            required
                        >

                    </div>


                    @error('name')

                        <span class="error-message">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <div>

                    <div class="input-box">

                        <span>
                            ✉
                        </span>

                        <input
                            type="email"
                            name="email"
                            placeholder="Your Email"
                            value="{{ old('email') }}"
                            required
                        >

                    </div>


                    @error('email')

                        <span class="error-message">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


            </div>



            <!-- SUBJECT -->

            <div>

                <div class="input-box subject-box">

                    <span>
                        ▣
                    </span>

                    <input
                        type="text"
                        name="subject"
                        placeholder="Subject"
                        value="{{ old('subject') }}"
                        required
                    >

                </div>


                @error('subject')

                    <span class="error-message">
                        {{ $message }}
                    </span>

                @enderror

            </div>



            <!-- MESSAGE -->

            <div>

                <div class="input-box message-box">

                    <span>
                        💬
                    </span>

                    <textarea
                        name="message"
                        placeholder="Your Message"
                        required
                    >{{ old('message') }}</textarea>

                </div>


                @error('message')

                    <span class="error-message">
                        {{ $message }}
                    </span>

                @enderror

            </div>



            <!-- SEND -->

            <button
                type="submit"
                class="send-button"
            >

                ✈

                &nbsp;

                Send Message

            </button>


        </form>


    </div>



    <!-- RIGHT SIDE -->

    <div class="contact-right">


        <div class="illustration-bg"></div>


        <img
            src="{{ asset('images/contact-support.png') }}"
            alt="LearnHub Support"
            class="contact-image"
        >


        <div class="chat-bubble bubble-help">

            <div class="chat-bubble-icon">
                🎓
            </div>

            <div>
                We're here<br>
                to help you!
            </div>

        </div>


        <div class="chat-bubble bubble-connect">

            <div class="chat-bubble-icon">
                👥
            </div>

            <div>
                Let's connect<br>
                and grow together!
            </div>

        </div>


    </div>


</section>



<!-- =====================================================
     CONTACT INFORMATION
===================================================== -->

<section class="contact-info">


    <div class="info-card">

        <div class="info-icon location-icon">
            📍
        </div>

        <div class="info-content">

            <h3>
                Our Location
            </h3>

            <p>
                123 Learning Street,<br>
                Dhaka, Bangladesh
            </p>

        </div>

    </div>



    <div class="info-card">

        <div class="info-icon email-icon">
            ✉
        </div>

        <div class="info-content">

            <h3>
                Email Us
            </h3>

            <p>
                support@learnhub.com<br>
                info@learnhub.com
            </p>

        </div>

    </div>



    <div class="info-card">

        <div class="info-icon phone-icon">
            ☎
        </div>

        <div class="info-content">

            <h3>
                Call Us
            </h3>

            <p>
                +880 1234 567890<br>
                +880 9876 543210
            </p>

        </div>

    </div>



    <div class="info-card">

        <div class="info-icon hours-icon">
            🕐
        </div>

        <div class="info-content">

            <h3>
                Working Hours
            </h3>

            <p>
                Sunday - Friday<br>
                9:00 AM - 6:00 PM
            </p>

        </div>

    </div>


</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">

    <div>

        © {{ date('Y') }} LearnHub.
        All rights reserved.

    </div>


    <div>

        Learn • Grow • Succeed ❤️

    </div>

</footer>


</body>

</html>