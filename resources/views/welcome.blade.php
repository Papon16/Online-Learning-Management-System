<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>LearnHub - Online Learning System</title>

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

            color: #101b41;

            background: #ffffff;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {

            height: 72px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 8%;

            background: #ffffff;

            border-bottom: 1px solid #eef1f8;

            position: sticky;

            top: 0;

            z-index: 1000;
        }


        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            text-decoration: none;

            color: #101b41;
        }


        .logo-icon {

            width: 48px;

            height: 48px;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #1769ff,
                    #5835e8
                );

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 26px;

            color: white;
        }


        .logo-text {

            display: flex;

            flex-direction: column;
        }


        .logo-text strong {

            font-size: 25px;

            color: #1769ff;

            line-height: 1;
        }


        .logo-text span {

            font-size: 11px;

            color: #68728d;

            margin-top: 4px;
        }


        .nav-links {

            display: flex;

            align-items: center;

            gap: 32px;
        }


        .nav-links a {

            text-decoration: none;

            color: #17213f;

            font-size: 15px;

            transition: .3s;

            position: relative;
        }


        .nav-links a:hover,
        .nav-links a.active {

            color: #1769ff;
        }


        .nav-links a.active::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: -8px;

            width: 100%;

            height: 2px;

            background: #1769ff;

            border-radius: 10px;
        }


        .nav-right {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .search-box {

            width: 245px;

            height: 42px;

            border-radius: 22px;

            background: #f4f6fa;

            display: flex;

            align-items: center;

            padding: 0 16px;

            gap: 10px;

            color: #71809e;
        }


        .search-box input {

            border: none;

            outline: none;

            background: transparent;

            width: 100%;

            font-size: 14px;
        }


        .btn {

            border: none;

            text-decoration: none;

            cursor: pointer;

            height: 42px;

            padding: 0 25px;

            border-radius: 9px;

            font-size: 14px;

            font-weight: 600;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            transition: .3s;
        }


        .btn-outline {

            background: white;

            color: #1769ff;

            border: 1px solid #1769ff;
        }


        .btn-outline:hover {

            background: #1769ff;

            color: white;
        }


        .btn-primary {

            background:
                linear-gradient(
                    135deg,
                    #1769ff,
                    #1554d1
                );

            color: white;

            box-shadow:
                0 8px 20px rgba(
                    23,
                    105,
                    255,
                    .18
                );
        }


        .btn-primary:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(
                    23,
                    105,
                    255,
                    .28
                );
        }


        /* =========================
           HERO
        ========================= */

        .hero {

            min-height: 450px;

            padding:
                55px 8%
                35px;

            display: grid;

            grid-template-columns:
                1fr 1fr;

            align-items: center;

            gap: 30px;

            background:

                radial-gradient(
                    circle at 90% 20%,
                    #dce8ff 0,
                    transparent 32%
                ),

                linear-gradient(
                    135deg,
                    #ffffff,
                    #f0f5ff
                );

            overflow: hidden;
        }


        .hero-left {

            max-width: 650px;
        }


        .small-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: #e8f1ff;

            color: #1769ff;

            border-radius: 25px;

            padding: 9px 17px;

            font-size: 13px;

            margin-bottom: 20px;
        }


        .hero h1 {

            font-size: clamp(
                40px,
                5vw,
                64px
            );

            line-height: 1.05;

            font-weight: 800;

            letter-spacing: -2px;

            margin-bottom: 10px;
        }


        .hero h1 .gradient-text {

            background:

                linear-gradient(
                    90deg,
                    #4c29e8,
                    #1769ff
                );

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;
        }


        .hero-description {

            color: #617092;

            font-size: 17px;

            line-height: 1.7;

            max-width: 600px;

            margin: 20px 0 25px;
        }


        .hero-buttons {

            display: flex;

            gap: 20px;

            margin-bottom: 35px;
        }


        .video-btn {

            background: white;

            color: #1769ff;

            border: 1px solid #1769ff;
        }


        .stats {

            display: flex;

            gap: 32px;

            flex-wrap: wrap;
        }


        .stat {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .stat-icon {

            width: 43px;

            height: 43px;

            border-radius: 50%;

            background: #e8f3ff;

            display: flex;

            align-items: center;

            justify-content: center;

            color: #1769ff;

            font-size: 20px;
        }


        .stat strong {

            display: block;

            font-size: 17px;
        }


        .stat span {

            display: block;

            font-size: 12px;

            color: #6c7895;

            margin-top: 2px;
        }


        /* =========================
           HERO IMAGE
        ========================= */

        .hero-right {

            position: relative;

            min-height: 410px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .hero-circle {

            width: 390px;

            height: 390px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #dce8ff,
                    #b9ceff
                );

            position: absolute;
        }


        .student-image {

            position: relative;

            z-index: 2;

            width: 390px;

            height: 390px;

            border-radius: 50%;

            object-fit: cover;

            object-position: center;
        }


        .floating-card {

            position: absolute;

            z-index: 5;

            background: rgba(
                255,
                255,
                255,
                .95
            );

            border-radius: 12px;

            padding: 13px 16px;

            box-shadow:
                0 12px 35px rgba(
                    40,
                    66,
                    120,
                    .13
                );

            display: flex;

            align-items: center;

            gap: 10px;

            min-width: 170px;
        }


        .floating-card .icon {

            width: 40px;

            height: 40px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e9f2ff;

            color: #1769ff;

            font-size: 20px;
        }


        .floating-card strong {

            display: block;

            font-size: 13px;

        }


        .floating-card span {

            display: block;

            color: #74809b;

            font-size: 11px;

            margin-top: 4px;
        }


        .card-live {

            top: 60px;

            left: 10px;
        }


        .card-flexible {

            top: 40px;

            right: -10px;
        }


        .card-certificate {

            bottom: 75px;

            left: 20px;
        }


        .card-instructor {

            bottom: 95px;

            right: -10px;
        }


        /* =========================
           FEATURES
        ========================= */

        .features {

            padding:
                25px 8%;

            display: grid;

            grid-template-columns:
                repeat(5, 1fr);

            gap: 20px;

            border-top: 1px solid #edf0f7;

            border-bottom: 1px solid #edf0f7;

            background: white;
        }


        .feature {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .feature-icon {

            min-width: 48px;

            height: 48px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #edf4ff;

            font-size: 20px;
        }


        .feature h4 {

            font-size: 14px;

            margin-bottom: 5px;
        }


        .feature p {

            color: #77829c;

            font-size: 11px;

            line-height: 1.5;
        }


        /* =========================
           COURSES
        ========================= */

        .courses-section {

            padding:
                40px 8%
                60px;

            background: #ffffff;
        }


        .section-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;
        }


        .section-header h2 {

            font-size: 31px;

            margin-bottom: 5px;
        }


        .section-header p {

            color: #6d7893;

            font-size: 14px;
        }


        .view-all {

            color: #1769ff;

            text-decoration: none;

            font-size: 14px;

            font-weight: 600;
        }


        .courses-grid {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }


        .course-card {

            border: 1px solid #e9edf5;

            border-radius: 10px;

            overflow: hidden;

            background: white;

            box-shadow:
                0 4px 15px rgba(
                    20,
                    40,
                    90,
                    .04
                );

            transition: .3s;
        }


        .course-card:hover {

            transform: translateY(-5px);

            box-shadow:
                0 15px 35px rgba(
                    20,
                    40,
                    90,
                    .10
                );
        }


        .course-image {

            height: 145px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 55px;

            color: white;

            position: relative;
        }


        .course-image.web {

            background:
                linear-gradient(
                    135deg,
                    #245fff,
                    #2342c6
                );
        }


        .course-image.database {

            background:
                linear-gradient(
                    135deg,
                    #0c2e4e,
                    #004f78
                );
        }


        .course-image.ai {

            background:
                linear-gradient(
                    135deg,
                    #4420a5,
                    #27115e
                );
        }


        .course-image.mobile {

            background:
                linear-gradient(
                    135deg,
                    #2997ef,
                    #3e60e9
                );
        }


        .course-category {

            position: absolute;

            bottom: 10px;

            left: 12px;

            background: white;

            color: #19213f;

            padding: 5px 11px;

            border-radius: 15px;

            font-size: 11px;

            font-weight: 600;
        }


        .course-body {

            padding: 15px;
        }


        .course-body h3 {

            font-size: 16px;

            line-height: 1.35;

            margin-bottom: 10px;
        }


        .instructor {

            color: #66718b;

            font-size: 12px;

            margin-bottom: 8px;
        }


        .rating {

            font-size: 12px;

            margin-bottom: 12px;

            color: #68738d;
        }


        .star {

            color: #ffab00;
        }


        .course-bottom {

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .price {

            font-size: 18px;

            font-weight: 700;
        }


        .enroll-btn {

            padding: 9px 15px;

            border-radius: 7px;

            border: none;

            background: #1769ff;

            color: white;

            cursor: pointer;

            font-weight: 600;

            font-size: 12px;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {

            padding: 25px 8%;

            background: #101a39;

            color: white;

            display: flex;

            justify-content: space-between;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1200px) {

            .navbar {
                padding: 0 4%;
            }

            .hero {
                padding-left: 5%;
                padding-right: 5%;
            }

            .features {
                padding-left: 5%;
                padding-right: 5%;
            }

            .courses-section {
                padding-left: 5%;
                padding-right: 5%;
            }

            .nav-links {
                gap: 18px;
            }

            .search-box {
                width: 180px;
            }

            .courses-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 900px) {

            .nav-links {
                display: none;
            }

            .hero {

                grid-template-columns: 1fr;

                text-align: center;

            }

            .hero-left {

                margin: auto;
            }

            .hero-buttons {

                justify-content: center;
            }

            .stats {

                justify-content: center;
            }

            .hero-right {

                min-height: 430px;
            }

            .features {

                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 600px) {

            .navbar {

                padding: 0 20px;
            }

            .logo-text {
                display: none;
            }

            .nav-right .search-box {
                display: none;
            }

            .hero {

                padding:
                    40px 20px;
            }

            .hero h1 {

                font-size: 39px;

            }

            .hero-description {

                font-size: 15px;
            }

            .hero-buttons {

                flex-direction: column;

                align-items: center;
            }

            .stats {

                gap: 18px;
            }

            .hero-circle,
            .student-image {

                width: 280px;

                height: 280px;
            }

            .floating-card {

                transform: scale(.75);
            }

            .card-live {
                left: -15px;
            }

            .card-flexible {
                right: -20px;
            }

            .card-certificate {
                left: -20px;
            }

            .card-instructor {
                right: -20px;
            }

            .features {

                grid-template-columns: 1fr;

                padding:
                    25px 20px;
            }

            .courses-section {

                padding:
                    35px 20px;
            }

            .courses-grid {

                grid-template-columns: 1fr;
            }

            .section-header {

                align-items: flex-start;

                gap: 15px;
            }

            footer {

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

        <div class="logo-text">

            <strong>LearnHub</strong>

            <span>Online Learning System</span>

        </div>

    </a>


    <div class="nav-links">

        <a href="/" class="active">
            Home
        </a>

        <a href="#">
            Courses
        </a>

        <a href="{{ route('about') }}">
    About
</a>

       <a href="{{ route('instructors') }}">
    Instructors
</a>
       <a
    href="{{ route('contact') }}"
    class="{{ request()->routeIs('contact') ? 'active' : '' }}"
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
                class="btn btn-outline"
            >
                Login
            </a>


            <a
                href="{{ route('register') }}"
                class="btn btn-primary"
            >
                Register
            </a>

        @else

            <a
                href="{{ url('/dashboard') }}"
                class="btn btn-primary"
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


    <div class="hero-left">


        <div class="small-badge">

            🎓

            Learn Anywhere, Anytime

        </div>


        <h1>

            Welcome to LearnHub

            <br>

            <span class="gradient-text">
                Your Future Starts Here
            </span>

        </h1>


        <p class="hero-description">

            Learn new skills, advance your career,
            and achieve your goals with our
            high-quality online courses taught by
            industry experts.

        </p>


        <div class="hero-buttons">


            <a
                href="#courses"
                class="btn btn-primary"
            >
                Explore Courses →
            </a>


            <a
                href="#"
                class="btn video-btn"
            >
                ▶ &nbsp; Watch Video
            </a>


        </div>



        <div class="stats">


            <div class="stat">

                <div class="stat-icon">
                    💻
                </div>

                <div>

                    <strong>100+</strong>

                    <span>Online Courses</span>

                </div>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    👥
                </div>

                <div>

                    <strong>500+</strong>

                    <span>Students</span>

                </div>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    📚
                </div>

                <div>

                    <strong>50+</strong>

                    <span>Expert Instructors</span>

                </div>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    🏆
                </div>

                <div>

                    <strong>98%</strong>

                    <span>Success Rate</span>

                </div>

            </div>


        </div>


    </div>



    <!-- HERO IMAGE -->

    <div class="hero-right">


        <div class="hero-circle"></div>


        <!--
            এখানে চাইলে তোমার generated student image বসাতে পারো।
            public/images/student-learning.png ফাইলে image রাখবে।
        -->

        <img
            src="{{ asset('images/student-learning.png') }}"
            class="student-image"
            alt="Student Learning"
        >


        <div class="floating-card card-live">

            <div class="icon">
                🎥
            </div>

            <div>

                <strong>Live Classes</strong>

                <span>
                    Join interactive sessions
                </span>

            </div>

        </div>



        <div class="floating-card card-flexible">

            <div class="icon">
                ⏰
            </div>

            <div>

                <strong>Flexible Learning</strong>

                <span>
                    Learn at your own pace
                </span>

            </div>

        </div>



        <div class="floating-card card-certificate">

            <div class="icon">
                🏅
            </div>

            <div>

                <strong>Certificate</strong>

                <span>
                    Get certified on completion
                </span>

            </div>

        </div>



        <div class="floating-card card-instructor">

            <div class="icon">
                👨‍🏫
            </div>

            <div>

                <strong>Expert Instructors</strong>

                <span>
                    Learn from industry experts
                </span>

            </div>

        </div>


    </div>


</section>



<!-- =====================================================
     FEATURES
===================================================== -->

<section class="features">


    <div class="feature">

        <div class="feature-icon">
            💻
        </div>

        <div>

            <h4>
                Online Learning
            </h4>

            <p>
                Access courses from anywhere
                in the world
            </p>

        </div>

    </div>


    <div class="feature">

        <div class="feature-icon">
            📖
        </div>

        <div>

            <h4>
                Expert Instructors
            </h4>

            <p>
                Learn from industry
                professionals
            </p>

        </div>

    </div>


    <div class="feature">

        <div class="feature-icon">
            📈
        </div>

        <div>

            <h4>
                Career Growth
            </h4>

            <p>
                Boost your skills and
                opportunities
            </p>

        </div>

    </div>


    <div class="feature">

        <div class="feature-icon">
            🏅
        </div>

        <div>

            <h4>
                Earn Certificates
            </h4>

            <p>
                Get recognized with
                verified certificates
            </p>

        </div>

    </div>


    <div class="feature">

        <div class="feature-icon">
            👥
        </div>

        <div>

            <h4>
                Support Community
            </h4>

            <p>
                Join a community
                of learners
            </p>

        </div>

    </div>


</section>



<!-- =====================================================
     POPULAR COURSES
===================================================== -->

<section
    class="courses-section"
    id="courses"
>


    <div class="section-header">

        <div>

            <h2>
                Popular Courses
            </h2>

            <p>
                Discover our most popular courses
                and start learning today.
            </p>

        </div>


        <a
            href="#"
            class="view-all"
        >
            View All Courses →
        </a>

    </div>



    <div class="courses-grid">


        <!-- COURSE 1 -->

        <div class="course-card">

            <div class="course-image web">

                &lt;/&gt;

                <span class="course-category">
                    Web Development
                </span>

            </div>


            <div class="course-body">

                <h3>
                    Complete Web Development
                    Bootcamp
                </h3>

                <div class="instructor">
                    👤 By John Doe
                </div>

                <div class="rating">

                    <span class="star">
                        ★
                    </span>

                    4.8 (320 students)

                </div>


                <div class="course-bottom">

                    <span class="price">
                        $49.99
                    </span>

                    <button class="enroll-btn">
                        Enroll Now
                    </button>

                </div>

            </div>

        </div>



        <!-- COURSE 2 -->

        <div class="course-card">

            <div class="course-image database">

                🗄️

                <span class="course-category">
                    Database
                </span>

            </div>


            <div class="course-body">

                <h3>
                    Database Management
                    with MySQL
                </h3>

                <div class="instructor">
                    👤 By Sarah Khan
                </div>

                <div class="rating">

                    <span class="star">
                        ★
                    </span>

                    4.7 (180 students)

                </div>


                <div class="course-bottom">

                    <span class="price">
                        $39.99
                    </span>

                    <button class="enroll-btn">
                        Enroll Now
                    </button>

                </div>

            </div>

        </div>



        <!-- COURSE 3 -->

        <div class="course-card">

            <div class="course-image ai">

                🤖

                <span class="course-category">
                    Artificial Intelligence
                </span>

            </div>


            <div class="course-body">

                <h3>
                    Introduction to
                    Artificial Intelligence
                </h3>

                <div class="instructor">
                    👤 By Ahmed Rony
                </div>

                <div class="rating">

                    <span class="star">
                        ★
                    </span>

                    4.9 (250 students)

                </div>


                <div class="course-bottom">

                    <span class="price">
                        $59.99
                    </span>

                    <button class="enroll-btn">
                        Enroll Now
                    </button>

                </div>

            </div>

        </div>



        <!-- COURSE 4 -->

        <div class="course-card">

            <div class="course-image mobile">

                📱

                <span class="course-category">
                    Mobile Development
                </span>

            </div>


            <div class="course-body">

                <h3>
                    Flutter Mobile App
                    Development
                </h3>

                <div class="instructor">
                    👤 By Nusrat Jahan
                </div>

                <div class="rating">

                    <span class="star">
                        ★
                    </span>

                    4.6 (210 students)

                </div>


                <div class="course-bottom">

                    <span class="price">
                        $44.99
                    </span>

                    <button class="enroll-btn">
                        Enroll Now
                    </button>

                </div>

            </div>

        </div>


    </div>


</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

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