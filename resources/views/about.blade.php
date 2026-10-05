<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>About Us - LearnHub</title>


    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            color: #101a42;

            background: #ffffff;

            overflow-x: hidden;
        }



        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            height: 68px;

            padding: 0 8%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            background: #ffffff;

            border-bottom:
                1px solid #edf1f7;

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        /* LOGO */

        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            flex-shrink: 0;
        }


        .logo-icon {

            width: 43px;

            height: 43px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #7436ed,
                    #1769ff
                );

            font-size: 22px;

            color: white;
        }


        .logo-text strong {

            display: block;

            font-size: 21px;

            color: #155eea;
        }


        .logo-text span {

            display: block;

            font-size: 9px;

            color: #78839c;

            margin-top: 2px;
        }



        /* NAV LINKS */

        .nav-links {

            display: flex;

            align-items: center;

            gap: 30px;
        }


        .nav-links a {

            position: relative;

            text-decoration: none;

            color: #65708d;

            font-size: 14px;

            padding: 24px 0;

            transition:
                color .3s ease;
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

            bottom: 8px;

            height: 2px;

            background: #1769ff;

            border-radius: 5px;
        }



        /* NAV RIGHT */

        .nav-right {

            display: flex;

            align-items: center;

            gap: 9px;
        }


        .search {

            width: 220px;

            height: 38px;

            border-radius: 20px;

            background: #f4f6fa;

            display: flex;

            align-items: center;

            gap: 8px;

            padding: 0 14px;

            color: #6e7890;
        }


        .search input {

            width: 100%;

            border: none;

            outline: none;

            background: transparent;

            font-size: 12px;
        }


        .login,
        .register {

            height: 38px;

            padding: 0 19px;

            border-radius: 8px;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 13px;

            font-weight: 600;

            transition:
                all .3s ease;
        }


        .login {

            border:
                1px solid #1769ff;

            color: #1769ff;

            background: white;
        }


        .login:hover {

            background: #1769ff;

            color: white;

            transform:
                translateY(-2px);
        }


        .register {

            background: #1769ff;

            color: white;

            border:
                1px solid #1769ff;

            box-shadow:
                0 5px 15px
                rgba(
                    23,
                    105,
                    255,
                    .16
                );
        }


        .register:hover {

            background: #0f55d7;

            transform:
                translateY(-2px);

            box-shadow:
                0 9px 20px
                rgba(
                    23,
                    105,
                    255,
                    .25
                );
        }



        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            min-height: 520px;

            padding:
                35px 8% 0;

            position: relative;

            overflow: hidden;

            background:

                radial-gradient(
                    circle at 75% 25%,
                    #d9eaff,
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    #f8fcff,
                    #eaf4ff
                );
        }


        .hero::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 250px;

            background: #dcecff;

            border-radius: 50%;

            left: -180px;

            top: 50px;

            opacity: .55;
        }


        .hero::after {

            content: "";

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            background: #e5efff;

            right: -100px;

            bottom: -100px;

            opacity: .6;
        }


        .hero-content {

            position: relative;

            height: 485px;

            display: flex;

            align-items: center;

            justify-content: center;
        }



        /* =====================================================
           HERO CARDS
        ===================================================== */

        .hero-card {

            position: absolute;

            width: 300px;

            min-height: 150px;

            padding: 22px;

            background:
                rgba(
                    255,
                    255,
                    255,
                    .94
                );

            border-radius: 18px;

            box-shadow:
                0 12px 30px
                rgba(
                    45,
                    75,
                    130,
                    .12
                );

            z-index: 5;

            cursor: pointer;

            transition:
                transform .35s ease,
                box-shadow .35s ease,
                background .35s ease;

            backdrop-filter:
                blur(8px);
        }


        .hero-card:hover {

            transform:
                translateY(-10px)
                scale(1.02);

            box-shadow:
                0 23px 48px
                rgba(
                    23,
                    105,
                    255,
                    .18
                );

            background: #ffffff;
        }


        .hero-card h3 {

            font-size: 21px;

            margin-bottom: 10px;

            color: #13204d;
        }


        .hero-card h3 span {

            color: #1769ff;
        }


        .hero-card p {

            color: #526184;

            font-size: 13px;

            line-height: 1.55;
        }


        .card-icon {

            width: 45px;

            height: 45px;

            border-radius: 12px;

            background: #e6f2ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

            margin-bottom: 9px;

            transition:
                transform .35s ease;
        }


        .hero-card:hover .card-icon {

            transform:
                rotate(-6deg)
                scale(1.12);
        }


        /* CARD POSITIONS */

        .mission {

            left: 0;

            top: 20px;
        }


        .vision {

            left: 310px;

            top: 30px;
        }


        .values {

            left: 25px;

            bottom: 50px;
        }


        .values .card-icon {

            background: #e4f9eb;
        }


        .values h3 span {

            color: #16a34a;
        }


        .vision .card-icon {

            background: #f1e8ff;
        }


        .vision h3 span {

            color: #7135d9;
        }



        /* =====================================================
           MAIN IMAGE
        ===================================================== */

        .main-image {

            position: absolute;

            width: 760px;

            max-width: 65%;

            right: 5%;

            bottom: -5px;

            z-index: 3;

            transition:
                transform .5s ease;
        }


        .main-image:hover {

            transform:
                scale(1.025)
                translateY(-4px);
        }



        /* =====================================================
           WORLD CARD
        ===================================================== */

        .world-card {

            position: absolute;

            right: 0;

            bottom: 85px;

            z-index: 6;

            background:
                rgba(
                    255,
                    255,
                    255,
                    .95
                );

            border-radius: 16px;

            padding: 18px 25px;

            box-shadow:
                0 12px 30px
                rgba(
                    30,
                    60,
                    120,
                    .13
                );

            font-size: 15px;

            font-weight: 700;

            cursor: pointer;

            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }


        .world-card:hover {

            transform:
                translateY(-8px)
                scale(1.03);

            box-shadow:
                0 20px 40px
                rgba(
                    23,
                    105,
                    255,
                    .18
                );
        }


        .world-card span {

            color: #1769ff;
        }



        /* =====================================================
           STATS
        ===================================================== */

        .stats {

            position: relative;

            z-index: 20;

            margin:
                -2px auto 0;

            padding:
                0 8%;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }


        .stat {

            min-height: 82px;

            background: white;

            border-radius: 14px;

            border:
                1px solid transparent;

            box-shadow:
                0 8px 25px
                rgba(
                    40,
                    70,
                    120,
                    .08
                );

            display: flex;

            align-items: center;

            gap: 15px;

            padding:
                16px 25px;

            cursor: pointer;

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;
        }


        .stat:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 19px 38px
                rgba(
                    23,
                    105,
                    255,
                    .14
                );

            border-color:
                rgba(
                    23,
                    105,
                    255,
                    .13
                );
        }


        .stat-icon {

            width: 48px;

            height: 48px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e8f2ff;

            font-size: 23px;

            transition:
                transform .3s ease;
        }


        .stat:hover .stat-icon {

            transform:
                rotate(-5deg)
                scale(1.12);
        }


        .stat:nth-child(2)
        .stat-icon {

            background: #e6faec;
        }


        .stat:nth-child(3)
        .stat-icon {

            background: #fff1df;
        }


        .stat:nth-child(4)
        .stat-icon {

            background: #f0e7ff;
        }


        .stat strong {

            display: block;

            font-size: 22px;

            color: #101b48;
        }


        .stat span {

            color: #6d7894;

            font-size: 12px;
        }



        /* =====================================================
           WHY CHOOSE
        ===================================================== */

        .why {

            padding:
                35px 8% 55px;

            text-align: center;
        }


        .why h2 {

            font-size: 31px;

            margin-bottom: 7px;
        }


        .why h2 span {

            color: #1769ff;
        }


        .why > p {

            max-width: 620px;

            margin: auto;

            color: #6b7693;

            font-size: 13px;

            line-height: 1.6;
        }


        .features {

            margin-top: 25px;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 22px;

            text-align: left;
        }


        .feature {

            background: white;

            border:
                1px solid #edf0f6;

            border-radius: 14px;

            padding: 25px;

            display: flex;

            gap: 18px;

            box-shadow:
                0 7px 25px
                rgba(
                    30,
                    60,
                    120,
                    .05
                );

            cursor: pointer;

            transition:
                transform .35s ease,
                box-shadow .35s ease,
                border-color .35s ease;
        }


        .feature:hover {

            transform:
                translateY(-9px);

            box-shadow:
                0 20px 40px
                rgba(
                    23,
                    105,
                    255,
                    .13
                );

            border-color:
                rgba(
                    23,
                    105,
                    255,
                    .18
                );
        }


        .feature-icon {

            min-width: 55px;

            width: 55px;

            height: 55px;

            border-radius: 13px;

            background: #e8f2ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 24px;

            transition:
                transform .35s ease;
        }


        .feature:hover .feature-icon {

            transform:
                rotate(-6deg)
                scale(1.1);
        }


        .feature:nth-child(2)
        .feature-icon {

            background: #f0e8ff;
        }


        .feature:nth-child(3)
        .feature-icon {

            background: #fff0df;
        }


        .feature h3 {

            font-size: 16px;

            margin-bottom: 8px;
        }


        .feature p {

            color: #697592;

            font-size: 12px;

            line-height: 1.6;
        }



        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background: #111a3b;

            color: white;

            padding:
                23px 8%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            font-size: 12px;
        }



        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1100px) {

            .navbar {

                padding:
                    0 4%;
            }


            .nav-links {

                gap: 18px;
            }


            .search {

                width: 160px;
            }


            .hero {

                padding-left: 4%;

                padding-right: 4%;
            }


            .hero-card {

                width: 245px;
            }


            .vision {

                left: 260px;
            }


            .main-image {

                right: 0;

                width: 700px;
            }


            .stats {

                padding-left: 4%;

                padding-right: 4%;
            }

        }



        /* =====================================================
           TABLET / SMALL LAPTOP
        ===================================================== */

        @media (max-width: 850px) {

            .nav-links {

                display: none;
            }


            .hero {

                min-height: 760px;

                padding:
                    25px 20px 0;
            }


            .hero-content {

                height: 735px;

                width: 100%;
            }


            .main-image {

                width: 700px;

                max-width: 95%;

                right: 50%;

                transform:
                    translateX(50%);

                bottom: 0;
            }


            .main-image:hover {

                transform:
                    translateX(50%)
                    scale(1.025);
            }


            .hero-card {

                width: 235px;

                min-height: 130px;

                padding: 17px;
            }


            .mission {

                left: 0;

                top: 10px;
            }


            .vision {

                right: 0;

                left: auto;

                top: 20px;
            }


            .values {

                left: 0;

                bottom: 285px;
            }


            .world-card {

                right: 0;

                bottom: 285px;
            }


            .stats {

                grid-template-columns:
                    repeat(2, 1fr);

                padding:
                    20px 5%;
            }


            .features {

                grid-template-columns:
                    1fr;
            }

        }



        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 600px) {

            .navbar {

                height: 62px;

                padding:
                    0 15px;
            }


            .logo-icon {

                width: 38px;

                height: 38px;

                font-size: 20px;
            }


            .logo-text strong {

                font-size: 18px;
            }


            .logo-text span {

                display: none;
            }


            .search {

                display: none;
            }


            .login,
            .register {

                height: 35px;

                padding:
                    0 11px;

                font-size: 11px;
            }


            /* HERO */

            .hero {

                min-height: 690px;

                padding:
                    15px 12px 0;
            }


            .hero-content {

                height: 675px;
            }


            .hero-card {

                width: 170px;

                min-height: 105px;

                padding: 12px;

                border-radius: 13px;
            }


            .hero-card h3 {

                font-size: 13px;

                margin-bottom: 6px;
            }


            .hero-card p {

                font-size: 9px;

                line-height: 1.4;
            }


            .card-icon {

                width: 32px;

                height: 32px;

                font-size: 16px;

                margin-bottom: 5px;
            }


            .mission {

                left: 0;

                top: 5px;
            }


            .vision {

                right: 0;

                left: auto;

                top: 5px;
            }


            .values {

                left: 0;

                bottom: 245px;
            }


            .world-card {

                right: 0;

                bottom: 235px;

                padding:
                    10px 13px;

                font-size: 9px;
            }


            .main-image {

                width: 480px;

                max-width: 110%;

                bottom: 0;
            }


            .main-image:hover {

                transform:
                    scale(1.025);
            }


            /* STATS */

            .stats {

                grid-template-columns:
                    1fr;

                padding:
                    15px 20px;
            }


            .stat {

                min-height: 72px;

                padding:
                    12px 17px;
            }


            /* WHY */

            .why {

                padding:
                    35px 18px 45px;
            }


            .why h2 {

                font-size: 25px;
            }


            .why > p {

                font-size: 12px;
            }


            .features {

                gap: 15px;
            }


            .feature {

                padding: 18px;

                gap: 13px;
            }


            .feature-icon {

                min-width: 45px;

                width: 45px;

                height: 45px;

                font-size: 20px;
            }


            .feature h3 {

                font-size: 15px;
            }


            .feature p {

                font-size: 11px;
            }


            footer {

                flex-direction: column;

                gap: 8px;

                text-align: center;

                padding:
                    20px 15px;
            }

        }



        /* =====================================================
           VERY SMALL MOBILE
        ===================================================== */

        @media (max-width: 400px) {

            .hero {

                min-height: 620px;
            }


            .hero-content {

                height: 605px;
            }


            .hero-card {

                width: 145px;

                min-height: 95px;

                padding: 9px;
            }


            .hero-card h3 {

                font-size: 11px;
            }


            .hero-card p {

                font-size: 8px;
            }


            .values {

                bottom: 220px;
            }


            .world-card {

                bottom: 210px;
            }


            .main-image {

                width: 430px;
            }


            .login,
            .register {

                padding:
                    0 8px;
            }

        }

    </style>

</head>


<body>



<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">


    <!-- LOGO -->

    <a
        href="{{ route('home') }}"
        class="logo"
    >

        <div class="logo-icon">
            🎓
        </div>


        <div class="logo-text">

            <strong>
                LearnHub
            </strong>

            <span>
                Online Learning System
            </span>

        </div>

    </a>



    <!-- NAV LINKS -->

    <div class="nav-links">

        <a
            href="{{ route('home') }}"
        >
            Home
        </a>


        <a href="#">
            Courses
        </a>


        <a
            href="{{ route('about') }}"
            class="active"
        >
            About
        </a>


        <a href="#">
            Instructors
        </a>


        <a
            href="{{ route('contact') }}"
        >
            Contact
        </a>

    </div>



    <!-- RIGHT -->

    <div class="nav-right">


        <div class="search">

            🔍

            <input
                type="text"
                placeholder="Search courses..."
            >

        </div>


        @guest

            <a
                href="{{ route('login') }}"
                class="login"
            >
                Login
            </a>


            <a
                href="{{ route('register') }}"
                class="register"
            >
                Register
            </a>

        @else

            <a
                href="{{ route('dashboard') }}"
                class="register"
            >
                Dashboard
            </a>

        @endguest


    </div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">


    <div class="hero-content">



        <!-- MISSION -->

        <div class="hero-card mission">


            <div class="card-icon">
                🎓
            </div>


            <h3>

                OUR
                <span>
                    MISSION
                </span>

            </h3>


            <p>

                To provide high-quality,
                accessible and affordable
                education for everyone,
                anywhere in the world.

            </p>


        </div>



        <!-- VISION -->

        <div class="hero-card vision">


            <div class="card-icon">
                🎯
            </div>


            <h3>

                OUR
                <span>
                    VISION
                </span>

            </h3>


            <p>

                To be a global leader
                in online education
                and help learners build
                a brighter future.

            </p>


        </div>



        <!-- VALUES -->

        <div class="hero-card values">


            <div class="card-icon">
                👥
            </div>


            <h3>

                OUR
                <span>
                    VALUES
                </span>

            </h3>


            <p>

                Learning, Innovation,
                Integrity, and a strong
                community for growth.

            </p>


        </div>



        <!-- MAIN IMAGE -->

        <img
            src="{{ asset('images/about-hero-illustration.png') }}"
            class="main-image"
            alt="LearnHub About"
        >



        <!-- WORLD CARD -->

        <div class="world-card">

            🌎

            Empowering

            <span>
                Learners Worldwide
            </span>

        </div>


    </div>

</section>



<!-- =====================================================
     STATS
===================================================== -->

<section class="stats">


    <!-- COURSES -->

    <div class="stat">


        <div class="stat-icon">
            📖
        </div>


        <div>

            <strong>
                100+
            </strong>

            <span>
                Courses
            </span>

        </div>


    </div>



    <!-- STUDENTS -->

    <div class="stat">


        <div class="stat-icon">
            👥
        </div>


        <div>

            <strong>
                500+
            </strong>

            <span>
                Students
            </span>

        </div>


    </div>



    <!-- INSTRUCTORS -->

    <div class="stat">


        <div class="stat-icon">
            👨‍🏫
        </div>


        <div>

            <strong>
                50+
            </strong>

            <span>
                Instructors
            </span>

        </div>


    </div>



    <!-- SATISFACTION -->

    <div class="stat">


        <div class="stat-icon">
            🏆
        </div>


        <div>

            <strong>
                95%
            </strong>

            <span>
                Satisfaction Rate
            </span>

        </div>


    </div>


</section>



<!-- =====================================================
     WHY CHOOSE LEARNHUB
===================================================== -->

<section class="why">


    <h2>

        Why Choose

        <span>
            LearnHub?
        </span>

    </h2>


    <p>

        We combine technology, expert instructors,
        and flexible learning experiences to help
        students achieve their educational and
        professional goals.

    </p>



    <div class="features">



        <!-- QUALITY EDUCATION -->

        <div class="feature">


            <div class="feature-icon">
                📖
            </div>


            <div>

                <h3>
                    Quality Education
                </h3>


                <p>

                    Access carefully designed
                    courses created to provide
                    practical and useful knowledge.

                </p>

            </div>


        </div>



        <!-- EXPERT INSTRUCTORS -->

        <div class="feature">


            <div class="feature-icon">
                👨‍🏫
            </div>


            <div>

                <h3>
                    Expert Instructors
                </h3>


                <p>

                    Learn from experienced instructors
                    who understand real-world industry
                    requirements.

                </p>

            </div>


        </div>



        <!-- CAREER GROWTH -->

        <div class="feature">


            <div class="feature-icon">
                🚀
            </div>


            <div>

                <h3>
                    Career Growth
                </h3>


                <p>

                    Build skills, complete courses,
                    earn certificates, and prepare
                    yourself for better opportunities.

                </p>

            </div>


        </div>


    </div>


</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>


    <div>

        © {{ date('Y') }}

        LearnHub.

        All rights reserved.

    </div>


    <div>

        Learn • Grow • Succeed ❤️

    </div>


</footer>



</body>

</html>