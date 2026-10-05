<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instructors - LearnHub</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ffffff;
            color: #102454;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            width: 100%;
            height: 82px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
            border-bottom: 1px solid #edf1f7;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: linear-gradient(135deg, #2d6bff, #5a35f2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .logo-text h2 {
            font-size: 21px;
            color: #1664ff;
            line-height: 1;
        }

        .logo-text span {
            font-size: 10px;
            color: #7d8ba7;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #51617d;
            font-size: 14px;
            font-weight: 500;
            position: relative;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #1768ff;
        }

        .nav-links a.active {
            color: #1768ff;
        }

        .nav-links a.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -12px;
            width: 100%;
            height: 2px;
            background: #1768ff;
            border-radius: 5px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-box {
            width: 210px;
            height: 38px;
            border-radius: 20px;
            background: #f4f6fb;
            display: flex;
            align-items: center;
            padding: 0 15px;
            color: #8793a9;
            font-size: 13px;
        }

        .search-box span {
            margin-right: 8px;
            font-size: 17px;
        }

        .login-btn,
        .register-btn {
            height: 38px;
            padding: 0 19px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-btn {
            border: 1px solid #2870ff;
            color: #1768ff;
            background: #ffffff;
        }

        .register-btn {
            border: none;
            background: #1768ff;
            color: white;
        }

        .login-btn:hover {
            background: #f1f6ff;
        }

        .register-btn:hover {
            background: #0d58df;
        }

        /* ================= HERO ================= */

        .hero {
            width: 100%;
            min-height: 555px;
            background: linear-gradient(
                135deg,
                #f6fbff 0%,
                #eaf5ff 50%,
                #e4f0ff 100%
            );
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            border-radius: 50%;
            background: rgba(81, 160, 255, 0.10);
            left: -180px;
            top: 80px;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(63, 127, 255, 0.08);
            right: -130px;
            bottom: -100px;
        }

        .hero-content {
            width: 86%;
            max-width: 1400px;
            margin: auto;
            min-height: 555px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .hero-text {
            width: 34%;
            padding-left: 10px;
            z-index: 3;
        }

        .hero-icon {
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: #e5edff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            margin-bottom: 25px;
        }

        .hero-text h1 {
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 22px;
            color: #12265a;
        }

        .hero-text h1 span {
            color: #1768ff;
        }

        .hero-text p {
            color: #52688f;
            font-size: 17px;
            line-height: 1.8;
            max-width: 390px;
        }

        .hero-line {
            width: 55px;
            height: 5px;
            border-radius: 5px;
            background: #1768ff;
            margin-top: 25px;
        }

        /* ================= IMAGE ================= */

        .hero-image {
            width: 65%;
            height: 555px;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
        }

        .hero-image img {
            width: 100%;
            max-width: 900px;
            height: auto;
            display: block;
            object-fit: contain;
            mix-blend-mode: multiply;
        }

        /* ================= INSTRUCTOR CARDS ================= */

        .instructors-section {
            padding: 70px 8%;
            background: #ffffff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h2 {
            font-size: 35px;
            color: #12265a;
            margin-bottom: 12px;
        }

        .section-title h2 span {
            color: #1768ff;
        }

        .section-title p {
            color: #74829b;
            font-size: 15px;
        }

        .instructor-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            max-width: 1200px;
            margin: auto;
        }

        .instructor-card {
            background: #ffffff;
            border: 1px solid #e8edf5;
            border-radius: 18px;
            padding: 28px 20px;
            text-align: center;
            transition: 0.3s ease;
            box-shadow: 0 8px 30px rgba(24, 76, 145, 0.06);
        }

        .instructor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(24, 76, 145, 0.14);
        }

        .instructor-avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin: auto;
            background: linear-gradient(135deg, #dceaff, #eef5ff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .instructor-card h3 {
            font-size: 18px;
            color: #14285a;
            margin-bottom: 7px;
        }

        .instructor-card span {
            font-size: 13px;
            color: #1768ff;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 1100px) {

            .navbar {
                padding: 0 4%;
            }

            .nav-links {
                gap: 18px;
            }

            .search-box {
                width: 160px;
            }

            .hero-content {
                width: 92%;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-image {
                width: 62%;
            }

            .instructor-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 850px) {

            .navbar {
                height: auto;
                padding: 15px 5%;
                flex-wrap: wrap;
                gap: 15px;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                padding-top: 8px;
            }

            .nav-right {
                margin-left: auto;
            }

            .hero {
                min-height: auto;
            }

            .hero-content {
                flex-direction: column;
                padding-top: 55px;
            }

            .hero-text {
                width: 100%;
                text-align: center;
                padding: 0;
            }

            .hero-text p {
                margin: auto;
            }

            .hero-icon {
                margin: 0 auto 20px;
            }

            .hero-line {
                margin: 22px auto;
            }

            .hero-image {
                width: 100%;
                height: auto;
                margin-top: 25px;
            }

            .hero-image img {
                max-width: 750px;
            }
        }

        @media (max-width: 600px) {

            .logo-text {
                display: none;
            }

            .nav-right {
                gap: 5px;
            }

            .search-box {
                display: none;
            }

            .login-btn,
            .register-btn {
                padding: 0 13px;
            }

            .nav-links {
                gap: 14px;
                overflow-x: auto;
                justify-content: flex-start;
            }

            .nav-links a {
                font-size: 12px;
                white-space: nowrap;
            }

            .hero-content {
                width: 94%;
                padding-top: 40px;
            }

            .hero-text h1 {
                font-size: 34px;
            }

            .hero-text p {
                font-size: 14px;
            }

            .instructors-section {
                padding: 50px 5%;
            }

            .instructor-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <a href="{{ url('/') }}" class="logo">
        <div class="logo-icon">🎓</div>

        <div class="logo-text">
            <h2>LearnHub</h2>
            <span>Online Learning System</span>
        </div>
    </a>

    <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/courses') }}">Courses</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/instructors') }}" class="active">Instructors</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </div>

    <div class="nav-right">

        <div class="search-box">
            <span>🔍</span>
            Search courses...
        </div>

        <a href="{{ route('login') }}" class="login-btn">
            Login
        </a>

        <a href="{{ route('register') }}" class="register-btn">
            Register
        </a>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <div class="hero-icon">
                👥
            </div>

            <h1>
                Our <span>Instructors</span>
            </h1>

            <p>
                Learn from industry experts and experienced instructors
                who are passionate about teaching and helping you grow.
            </p>

            <div class="hero-line"></div>

        </div>


        <div class="hero-image">

            <img
                src="{{ asset('images/instructors-hero.png') }}"
                alt="LearnHub Instructors"
            >

        </div>

    </div>

</section>


<!-- ================= INSTRUCTORS ================= -->

<section class="instructors-section">

    <div class="section-title">

        <h2>
            Meet Our <span>Expert Instructors</span>
        </h2>

        <p>
            Learn from experienced professionals and industry experts.
        </p>

    </div>


    <div class="instructor-grid">

        <div class="instructor-card">

            <div class="instructor-avatar">
                👨‍🏫
            </div>

            <h3>John Doe</h3>

            <span>Web Development</span>

        </div>


        <div class="instructor-card">

            <div class="instructor-avatar">
                👩‍🏫
            </div>

            <h3>Sarah Smith</h3>

            <span>UI/UX Design</span>

        </div>


        <div class="instructor-card">

            <div class="instructor-avatar">
                👨‍💻
            </div>

            <h3>Michael Lee</h3>

            <span>Programming</span>

        </div>


        <div class="instructor-card">

            <div class="instructor-avatar">
                👩‍💻
            </div>

            <h3>Emily Brown</h3>

            <span>Data Science</span>

        </div>

    </div>

</section>


</body>
</html>