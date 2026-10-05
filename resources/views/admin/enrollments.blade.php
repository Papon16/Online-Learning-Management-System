<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Manage Enrollments - LearnHub</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        a {
            text-decoration: none;
        }

        button,
        input,
        select {
            font-family: inherit;
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {
            width: 250px;
            background: #111c2d;
            color: white;

            position: fixed;

            left: 0;
            top: 0;
            bottom: 0;

            overflow-y: auto;

            z-index: 1000;
        }


        .sidebar-logo {
            height: 78px;

            display: flex;

            align-items: center;

            padding: 0 19px;

            border-bottom:
                1px solid rgba(255,255,255,0.07);
        }


        .logo-icon {
            width: 40px;
            height: 40px;

            border-radius: 9px;

            background: #2563eb;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 20px;

            margin-right: 10px;
        }


        .logo-text h2 {
            color: white;

            font-size: 18px;

            line-height: 1;
        }


        .logo-text span {
            display: block;

            color: #94a3b8;

            font-size: 9px;

            margin-top: 5px;
        }


        .sidebar-menu {
            padding: 16px 11px;
        }


        .menu-title {
            color: #64748b;

            font-size: 10px;

            font-weight: 700;

            padding: 13px 12px 8px;

            letter-spacing: 1px;
        }


        .menu-item {
            width: 100%;

            height: 38px;

            display: flex;

            align-items: center;

            gap: 10px;

            padding: 0 12px;

            margin-bottom: 4px;

            border-radius: 8px;

            color: #d1d5db;

            font-size: 13px;

            border: none;

            background: transparent;

            cursor: pointer;

            text-align: left;

            transition: .2s;
        }


        .menu-item:hover {
            background: #1d293b;

            color: white;
        }


        .menu-item.active {
            background: #1677f2;

            color: white;
        }


        .menu-icon {
            width: 19px;

            text-align: center;

            font-size: 14px;
        }


        .menu-arrow {
            margin-left: auto;
        }


        .submenu {
            margin-left: 17px;

            margin-bottom: 7px;
        }


        .submenu a {
            display: flex;

            align-items: center;

            gap: 8px;

            height: 30px;

            padding: 0 11px;

            color: #94a3b8;

            font-size: 12px;

            border-radius: 7px;
        }


        .submenu a:hover {
            color: #60a5fa;

            background: rgba(37,99,235,.1);
        }


        .submenu a.active {
            color: #60a5fa;

            background: rgba(37,99,235,.15);
        }


        .submenu-dot {
            font-size: 8px;
        }


        /* =====================================================
           MAIN
        ====================================================== */

        .main-content {
            margin-left: 250px;

            width: calc(100% - 250px);

            min-height: 100vh;
        }


        /* =====================================================
           TOPBAR
        ====================================================== */

        .topbar {
            height: 78px;

            background: white;

            border-bottom: 1px solid #e5e7eb;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 28px;
        }


        .breadcrumb {
            font-size: 12px;

            color: #64748b;
        }


        .breadcrumb strong {
            color: #111827;
        }


        .topbar-right {
            display: flex;

            align-items: center;

            gap: 20px;
        }


        .notification-button {
            width: 39px;
            height: 39px;

            border-radius: 50%;

            border: none;

            background: #f8fafc;

            cursor: pointer;

            font-size: 17px;

            position: relative;
        }


        .notification-badge {
            position: absolute;

            top: -2px;

            right: -1px;

            background: #ef4444;

            color: white;

            width: 17px;
            height: 17px;

            border-radius: 50%;

            font-size: 9px;

            display: flex;

            align-items: center;
            justify-content: center;
        }


        .profile-button {
            display: flex;

            align-items: center;

            gap: 9px;

            background: none;

            border: none;

            cursor: pointer;
        }


        .profile-avatar {
            width: 39px;
            height: 39px;

            border-radius: 50%;

            overflow: hidden;

            background: #2563eb;

            color: white;

            display: flex;

            align-items: center;
            justify-content: center;

            font-weight: bold;
        }


        .profile-avatar img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }


        .profile-info {
            text-align: left;
        }


        .profile-info strong {
            display: block;

            font-size: 12px;

            color: #111827;
        }


        .profile-info span {
            display: block;

            font-size: 9px;

            color: #64748b;

            margin-top: 2px;
        }


        /* =====================================================
           PAGE
        ====================================================== */

        .page-content {
            padding: 26px 28px;
        }


        .page-heading {
            display: flex;

            align-items: center;

            margin-bottom: 23px;
        }


        .page-title-icon {
            width: 43px;
            height: 43px;

            background: #eaf3ff;

            color: #2563eb;

            border-radius: 11px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 21px;

            margin-right: 11px;
        }


        .page-heading h1 {
            font-size: 23px;

            color: #111827;

            margin-bottom: 4px;
        }


        .page-heading p {
            color: #64748b;

            font-size: 11px;
        }


        /* =====================================================
           STAT CARDS
        ====================================================== */

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 18px;

            margin-bottom: 23px;
        }


        .stat-card {
            background: white;

            border: 1px solid #e7edf4;

            border-radius: 12px;

            padding: 19px;

            box-shadow:
                0 3px 10px rgba(15,23,42,.025);

            transition: .25s;
        }


        .stat-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 10px 25px rgba(15,23,42,.07);
        }


        .stat-top {
            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .stat-card h3 {
            color: #64748b;

            font-size: 12px;

            font-weight: 500;

            margin-bottom: 6px;
        }


        .stat-number {
            color: #111827;

            font-size: 27px;

            font-weight: 700;
        }


        .stat-growth {
            margin-top: 7px;

            font-size: 10px;

            font-weight: 500;
        }


        .stat-icon {
            width: 43px;
            height: 43px;

            border-radius: 11px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 19px;
        }


        .blue .stat-icon {
            background: #eaf3ff;
            color: #2563eb;
        }


        .green .stat-icon {
            background: #e8fbf3;
            color: #10b981;
        }


        .light-blue .stat-icon {
            background: #eaf3ff;
            color: #2563eb;
        }


        .red .stat-icon {
            background: #fff0f1;
            color: #ef4444;
        }


        .blue .stat-growth,
        .green .stat-growth,
        .light-blue .stat-growth {
            color: #10b981;
        }


        .red .stat-growth {
            color: #ef4444;
        }


        /* =====================================================
           ENROLLMENT CARD
        ====================================================== */

        .enrollment-card {
            background: white;

            border: 1px solid #e6ebf2;

            border-radius: 13px;

            overflow: hidden;

            box-shadow:
                0 3px 12px rgba(15,23,42,.03);
        }


        .enrollment-header {
            padding: 18px 20px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 1px solid #edf1f5;
        }


        .enrollment-header h2 {
            font-size: 16px;

            color: #111827;

            margin-bottom: 3px;
        }


        .enrollment-header p {
            font-size: 10px;

            color: #94a3b8;
        }


        .tools {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .search-box {
            position: relative;
        }


        .search-box span {
            position: absolute;

            left: 10px;

            top: 50%;

            transform: translateY(-50%);

            color: #64748b;

            font-size: 13px;
        }


        .search-input {
            width: 245px;

            height: 37px;

            border: 1px solid #dce3eb;

            border-radius: 8px;

            outline: none;

            padding: 0 10px 0 31px;

            font-size: 11px;
        }


        .search-input:focus {
            border-color: #2563eb;
        }


        .status-filter {
            height: 37px;

            border: 1px solid #dce3eb;

            border-radius: 8px;

            padding: 0 10px;

            font-size: 11px;

            color: #475569;

            background: white;

            outline: none;
        }


        .export-btn {
            height: 37px;

            padding: 0 15px;

            border: none;

            border-radius: 8px;

            background: #2563eb;

            color: white;

            font-size: 11px;

            font-weight: 600;

            cursor: pointer;
        }


        .export-btn:hover {
            background: #1d4ed8;
        }


        /* =====================================================
           TABLE
        ====================================================== */

        .table-wrapper {
            overflow-x: auto;
        }


        .enrollment-table {
            width: 100%;

            border-collapse: collapse;

            min-width: 1050px;
        }


        .enrollment-table th {
            text-align: left;

            padding: 12px 15px;

            background: #f8fafc;

            color: #64748b;

            font-size: 9px;

            font-weight: 700;

            text-transform: uppercase;
        }


        .enrollment-table td {
            padding: 12px 15px;

            border-top: 1px solid #eef1f5;

            font-size: 11px;

            color: #475569;

            vertical-align: middle;
        }


        .enrollment-table tbody tr {
            transition: .15s;
        }


        .enrollment-table tbody tr:hover {
            background: #f9fbff;
        }


        /* =====================================================
           STUDENT
        ====================================================== */

        .student-cell {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .student-avatar {
            width: 32px;
            height: 32px;

            border-radius: 50%;

            background: #eaf3ff;

            color: #2563eb;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 11px;

            font-weight: 700;

            flex-shrink: 0;
        }


        .student-name {
            color: #111827;

            font-size: 11px;

            font-weight: 700;
        }


        .student-email {
            color: #94a3b8;

            font-size: 8px;

            margin-top: 2px;
        }


        /* =====================================================
           COURSE
        ====================================================== */

        .course-cell {
            display: flex;

            align-items: center;

            gap: 9px;
        }


        .course-thumb {
            width: 57px;
            height: 40px;

            border-radius: 6px;

            background: #eaf3ff;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #2563eb;

            font-size: 17px;

            overflow: hidden;

            flex-shrink: 0;
        }


        .course-thumb img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }


        .course-name {
            color: #111827;

            font-size: 11px;

            font-weight: 700;

            margin-bottom: 4px;
        }


        .category {
            display: inline-block;

            padding: 4px 8px;

            border-radius: 7px;

            background: #eee8ff;

            color: #6d28d9;

            font-size: 8px;

            font-weight: 600;
        }


        /* =====================================================
           PROGRESS
        ====================================================== */

        .progress-wrapper {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .progress-bar {
            width: 105px;

            height: 8px;

            background: #e8edf3;

            border-radius: 20px;

            overflow: hidden;
        }


        .progress-fill {
            height: 100%;

            background: #3182f6;

            border-radius: 20px;
        }


        .progress-text {
            font-size: 10px;

            color: #64748b;

            min-width: 30px;
        }


        /* =====================================================
           STATUS
        ====================================================== */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 6px 10px;

            border-radius: 7px;

            font-size: 9px;

            font-weight: 600;
        }


        .status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;
        }


        .status-active {
            background: #e5f8ef;

            color: #059669;
        }


        .status-active .status-dot {
            background: #10b981;
        }


        .status-completed {
            background: #e9f2ff;

            color: #2563eb;
        }


        .status-completed .status-dot {
            background: #2563eb;
        }


        .status-cancelled {
            background: #fff1df;

            color: #d97706;
        }


        .status-cancelled .status-dot {
            background: #f59e0b;
        }


        /* =====================================================
           ACTIONS
        ====================================================== */

        .actions {
            display: flex;

            gap: 6px;
        }


        .view-btn,
        .delete-btn {
            width: 34px;
            height: 34px;

            border-radius: 7px;

            display: flex;

            align-items: center;
            justify-content: center;

            cursor: pointer;

            font-size: 13px;
        }


        .view-btn {
            border: 1px solid #dce3eb;

            background: white;

            color: #475569;
        }


        .view-btn:hover {
            background: #f1f5f9;
        }


        .delete-btn {
            border: none;

            background: #ef3340;

            color: white;
        }


        .delete-btn:hover {
            background: #dc2626;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .table-footer {
            padding: 13px 20px;

            border-top: 1px solid #edf1f5;

            display: flex;

            align-items: center;

            justify-content: space-between;

            color: #94a3b8;

            font-size: 10px;
        }


        .pagination {
            display: flex;

            gap: 5px;
        }


        .page-btn {
            width: 29px;
            height: 29px;

            border: 1px solid #dce3eb;

            background: white;

            border-radius: 6px;

            cursor: pointer;

            font-size: 10px;

            color: #64748b;
        }


        .page-btn.active {
            background: #2563eb;

            color: white;

            border-color: #2563eb;
        }


        /* =====================================================
           EMPTY
        ====================================================== */

        .empty-state {
            padding: 50px;

            text-align: center;

            color: #94a3b8;
        }


        .empty-icon {
            font-size: 40px;

            margin-bottom: 10px;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media(max-width: 1100px) {

            .stats-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media(max-width: 800px) {

            .sidebar {
                transform: translateX(-100%);

                transition: .25s;
            }


            .main-content {
                margin-left: 0;

                width: 100%;
            }


            .profile-info {
                display: none;
            }


            .page-content {
                padding: 20px 15px;
            }


            .topbar {
                padding: 0 15px;
            }

        }


        @media(max-width: 550px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }


            .enrollment-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }


            .tools {
                width: 100%;

                flex-wrap: wrap;
            }

        }

    </style>

</head>


<body>


<div class="dashboard-wrapper">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <div class="sidebar-logo">

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

        </div>


        <div class="sidebar-menu">


            <!-- DASHBOARD -->

            <a href="{{ route('admin.dashboard') }}"
               class="menu-item
               {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                <span class="menu-icon">
                    🏠
                </span>

                Dashboard

            </a>


            <div class="menu-title">
                MANAGE
            </div>


            <!-- USERS -->

            <a href="{{ route('admin.users') }}"
               class="menu-item
               {{ request()->routeIs('admin.users*') ? 'active' : '' }}">

                <span class="menu-icon">
                    👥
                </span>

                Users

                <span class="menu-arrow">
                    ›
                </span>

            </a>


            <!-- COURSES -->

            <a href="{{ route('admin.courses') }}"
               class="menu-item
               {{ request()->routeIs('admin.courses') ? 'active' : '' }}">

                <span class="menu-icon">
                    📚
                </span>

                Courses

                <span class="menu-arrow">
                    ›
                </span>

            </a>


            <!-- ENROLLMENTS -->

            <a href="{{ route('admin.enrollments') }}"
               class="menu-item
               {{ request()->routeIs('admin.enrollments') ? 'active' : '' }}">

                <span class="menu-icon">
                    🏅
                </span>

                Enrollments

                <span class="menu-arrow">
                    ⌃
                </span>

            </a>


            <!-- SUBMENU -->

            @if(request()->routeIs('admin.enrollments'))

                <div class="submenu">

                    <a href="{{ route('admin.enrollments') }}"
                       class="active">

                        <span class="submenu-dot">
                            ●
                        </span>

                        All Enrollments

                    </a>

                </div>

            @endif


            <!-- ASSIGNMENTS -->

            <a href="#"
               class="menu-item">

                <span class="menu-icon">
                    📄
                </span>

                Assignments

            </a>


            <!-- MESSAGES -->

            <a href="#"
               class="menu-item">

                <span class="menu-icon">
                    💬
                </span>

                Messages

            </a>


            <!-- REPORTS -->

            <a href="#"
               class="menu-item">

                <span class="menu-icon">
                    📊
                </span>

                Reports

                <span class="menu-arrow">
                    ›
                </span>

            </a>


            <div class="menu-title">
                SETTINGS
            </div>


            <!-- PROFILE -->

            <a href="{{ route('profile.edit') }}"
               class="menu-item">

                <span class="menu-icon">
                    👤
                </span>

                Profile

            </a>


            <!-- SETTINGS -->

            <a href="#"
               class="menu-item">

                <span class="menu-icon">
                    ⚙️
                </span>

                Settings

            </a>


            <!-- LOGOUT -->

            <form action="{{ route('logout') }}"
                  method="POST"
                  style="margin:0;">

                @csrf

                <button type="submit"
                        class="menu-item">

                    <span class="menu-icon">
                        🚪
                    </span>

                    Logout

                </button>

            </form>


        </div>

    </aside>


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="main-content">


        <!-- TOPBAR -->

        <header class="topbar">


            <div class="breadcrumb">

                Dashboard /

                <strong>
                    Enrollments
                </strong>

            </div>


            <div class="topbar-right">


                <button class="notification-button">

                    🔔

                    @if($totalEnrollments > 0)

                        <span class="notification-badge">

                            {{ $totalEnrollments > 9
                                ? '9+'
                                : $totalEnrollments }}

                        </span>

                    @endif

                </button>


                <button class="profile-button">

                    <div class="profile-avatar">

                        @if(auth()->user()->profile_image)

                            <img
                                src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                                alt="Profile">

                        @else

                            {{ strtoupper(
                                substr(
                                    auth()->user()->name,
                                    0,
                                    1
                                )
                            ) }}

                        @endif

                    </div>


                    <div class="profile-info">

                        <strong>
                            {{ auth()->user()->name }}
                        </strong>

                        <span>
                            Administrator
                        </span>

                    </div>


                    <span>
                        ▼
                    </span>

                </button>

            </div>

        </header>


        <!-- =====================================================
             PAGE
        ====================================================== -->

        <section class="page-content">


            <!-- PAGE TITLE -->

            <div class="page-heading">

                <div class="page-title-icon">
                    🏅
                </div>


                <div>

                    <h1>
                        Manage Enrollments
                    </h1>

                    <p>
                        View and manage all student enrollments in courses
                    </p>

                </div>

            </div>


            <!-- =================================================
                 STATISTICS
            ================================================== -->

            <div class="stats-grid">


                <!-- TOTAL -->

                <div class="stat-card blue">

                    <div class="stat-top">

                        <div>

                            <h3>
                                Total Enrollments
                            </h3>

                            <div class="stat-number">

                                {{ $totalEnrollments }}

                            </div>

                            <div class="stat-growth">

                                ↑ All enrollments

                            </div>

                        </div>


                        <div class="stat-icon">
                            👥
                        </div>

                    </div>

                </div>


                <!-- ACTIVE -->

                <div class="stat-card green">

                    <div class="stat-top">

                        <div>

                            <h3>
                                Active Enrollments
                            </h3>

                            <div class="stat-number">

                                {{ $activeEnrollments }}

                            </div>

                            <div class="stat-growth">

                                ↑ Currently learning

                            </div>

                        </div>


                        <div class="stat-icon">
                            ▶
                        </div>

                    </div>

                </div>


                <!-- COMPLETED -->

                <div class="stat-card light-blue">

                    <div class="stat-top">

                        <div>

                            <h3>
                                Completed
                            </h3>

                            <div class="stat-number">

                                {{ $completedEnrollments }}

                            </div>

                            <div class="stat-growth">

                                ↑ Finished courses

                            </div>

                        </div>


                        <div class="stat-icon">
                            ✓
                        </div>

                    </div>

                </div>


                <!-- CANCELLED -->

                <div class="stat-card red">

                    <div class="stat-top">

                        <div>

                            <h3>
                                Cancelled
                            </h3>

                            <div class="stat-number">

                                {{ $cancelledEnrollments }}

                            </div>

                            <div class="stat-growth">

                                ↑ Cancelled enrollments

                            </div>

                        </div>


                        <div class="stat-icon">
                            ✕
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 TABLE CARD
            ================================================== -->

            <div class="enrollment-card">


                <!-- HEADER -->

                <div class="enrollment-header">


                    <div>

                        <h2>
                            All Enrollments
                        </h2>

                        <p>
                            View and manage all student enrollments
                        </p>

                    </div>


                    <div class="tools">


                        <!-- SEARCH -->

                        <div class="search-box">

                            <span>
                                🔍
                            </span>

                            <input
                                type="text"
                                id="searchInput"
                                class="search-input"
                                placeholder="Search students or courses...">

                        </div>


                        <!-- STATUS -->

                        <select
                            id="statusFilter"
                            class="status-filter">

                            <option value="all">
                                All Status
                            </option>

                            <option value="active">
                                Active
                            </option>

                            <option value="completed">
                                Completed
                            </option>

                            <option value="cancelled">
                                Cancelled
                            </option>

                        </select>


                        <!-- EXPORT -->

                        <button
                            type="button"
                            class="export-btn"
                            onclick="exportTable()">

                            + Export

                        </button>

                    </div>

                </div>


                <!-- =================================================
                     TABLE
                ================================================== -->

                <div class="table-wrapper">

                    <table class="enrollment-table"
                           id="enrollmentTable">


                        <thead>

                        <tr>

                            <th>
                                #
                            </th>

                            <th>
                                Student
                            </th>

                            <th>
                                Course
                            </th>

                            <th>
                                Enrolled At
                            </th>

                            <th>
                                Progress
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                        </thead>


                        <tbody>


                        @forelse($enrollments as $index => $enrollment)


                            @php

                                $student =
                                    $enrollment->student
                                    ?? null;

                                $course =
                                    $enrollment->course
                                    ?? null;


                                $studentName =
                                    $student->name
                                    ?? 'Student';


                                $studentEmail =
                                    $student->email
                                    ?? '';


                                $courseTitle =
                                    $course->title
                                    ?? 'Course';


                                $category =
                                    $course->category
                                    ?? $course->category_name
                                    ?? 'Programming';


                                $status =
                                    strtolower(
                                        $enrollment->status
                                        ?? 'active'
                                    );


                                $progress =
                                    $enrollment->progress
                                    ?? 0;


                                if ($progress >= 100) {

                                    $status = 'completed';

                                }


                            @endphp


                            <tr
                                data-status="{{ $status }}"
                                data-search="{{ strtolower(
                                    $studentName .
                                    ' ' .
                                    $studentEmail .
                                    ' ' .
                                    $courseTitle
                                ) }}">


                                <!-- NUMBER -->

                                <td>

                                    {{ $index + 1 }}

                                </td>


                                <!-- STUDENT -->

                                <td>

                                    <div class="student-cell">


                                        <div class="student-avatar">

                                            {{ strtoupper(
                                                substr(
                                                    $studentName,
                                                    0,
                                                    1
                                                )
                                            ) }}

                                        </div>


                                        <div>

                                            <div class="student-name">

                                                {{ $studentName }}

                                            </div>


                                            <div class="student-email">

                                                {{ $studentEmail }}

                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <!-- COURSE -->

                                <td>

                                    <div class="course-cell">


                                        <div class="course-thumb">

                                            @if(
                                                isset($course->thumbnail)
                                                && $course->thumbnail
                                            )

                                                <img
                                                    src="{{ asset('storage/' . $course->thumbnail) }}"
                                                    alt="Course">

                                            @else

                                                📚

                                            @endif

                                        </div>


                                        <div>

                                            <div class="course-name">

                                                {{ $courseTitle }}

                                            </div>


                                            <span class="category">

                                                {{ $category }}

                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <!-- DATE -->

                                <td>

                                    {{ $enrollment->created_at
                                        ? $enrollment->created_at->format('M d, Y')
                                        : 'N/A'
                                    }}

                                </td>


                                <!-- PROGRESS -->

                                <td>

                                    <div class="progress-wrapper">


                                        <div class="progress-bar">

                                            <div
                                                class="progress-fill"
                                                style="width: {{ min(100, max(0, $progress)) }}%;">
                                            </div>

                                        </div>


                                        <span class="progress-text">

                                            {{ $progress }}%

                                        </span>

                                    </div>

                                </td>


                                <!-- STATUS -->

                                <td>


                                    @if($status === 'completed')

                                        <span class="status status-completed">

                                            <span class="status-dot"></span>

                                            Completed

                                        </span>


                                    @elseif($status === 'cancelled')

                                        <span class="status status-cancelled">

                                            <span class="status-dot"></span>

                                            Cancelled

                                        </span>


                                    @else

                                        <span class="status status-active">

                                            <span class="status-dot"></span>

                                            Active

                                        </span>

                                    @endif


                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="actions">


                                        <!-- VIEW -->

                                        <button
                                            type="button"
                                            class="view-btn"
                                            onclick="viewEnrollment(
                                                '{{ $studentName }}',
                                                '{{ $courseTitle }}',
                                                '{{ $progress }}',
                                                '{{ ucfirst($status) }}'
                                            )">

                                            👁

                                        </button>


                                        <!-- DELETE -->

                                        <form
                                            action="#"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this enrollment?');">

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="delete-btn">

                                                🗑

                                            </button>

                                        </form>


                                    </div>

                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td colspan="7">

                                    <div class="empty-state">

                                        <div class="empty-icon">
                                            🎓
                                        </div>

                                        <strong>
                                            No enrollments found
                                        </strong>

                                        <p style="margin-top:6px;">
                                            No students have enrolled in any course yet.
                                        </p>

                                    </div>

                                </td>

                            </tr>


                        @endforelse


                        </tbody>

                    </table>

                </div>


                <!-- FOOTER -->

                <div class="table-footer">

                    <div id="resultCount">

                        Showing
                        <strong>
                            {{ $enrollments->count() }}
                        </strong>
                        enrollments

                    </div>


                    <div class="pagination">

                        <button class="page-btn">
                            ‹
                        </button>

                        <button class="page-btn active">
                            1
                        </button>

                        <button class="page-btn">
                            2
                        </button>

                        <button class="page-btn">
                            3
                        </button>

                        <button class="page-btn">
                            ›
                        </button>

                    </div>

                </div>


            </div>

        </section>

    </main>

</div>


<script>


    /* =====================================================
       SEARCH + STATUS FILTER
    ====================================================== */

    const searchInput =
        document.getElementById('searchInput');


    const statusFilter =
        document.getElementById('statusFilter');


    function filterEnrollments() {

        const search =
            searchInput.value
                .toLowerCase()
                .trim();


        const status =
            statusFilter.value;


        const rows =
            document.querySelectorAll(
                '#enrollmentTable tbody tr'
            );


        let visible =
            0;


        rows.forEach(function(row) {

            const rowSearch =
                row.dataset.search || '';


            const rowStatus =
                row.dataset.status || '';


            const searchMatch =
                rowSearch.includes(search);


            const statusMatch =
                status === 'all' ||
                rowStatus === status;


            if (
                searchMatch &&
                statusMatch
            ) {

                row.style.display = '';

                visible++;

            } else {

                row.style.display = 'none';

            }

        });


        document.getElementById(
            'resultCount'
        ).innerHTML =
            'Showing <strong>' +
            visible +
            '</strong> enrollments';

    }


    searchInput.addEventListener(
        'input',
        filterEnrollments
    );


    statusFilter.addEventListener(
        'change',
        filterEnrollments
    );


    /* =====================================================
       VIEW ENROLLMENT
    ====================================================== */

    function viewEnrollment(
        student,
        course,
        progress,
        status
    ) {

        alert(
            'Student: ' +
            student +
            '\n\n' +

            'Course: ' +
            course +
            '\n\n' +

            'Progress: ' +
            progress +
            '%\n\n' +

            'Status: ' +
            status
        );

    }


    /* =====================================================
       EXPORT
    ====================================================== */

    function exportTable() {

        const table =
            document.getElementById(
                'enrollmentTable'
            );


        let csv = [];


        const rows =
            table.querySelectorAll(
                'tr'
            );


        rows.forEach(function(row) {

            const cols =
                row.querySelectorAll(
                    'th, td'
                );


            let rowData = [];


            cols.forEach(function(col) {

                rowData.push(
                    '"' +
                    col.innerText
                        .replace(/"/g, '""')
                        .replace(/\n/g, ' ')
                    +
                    '"'
                );

            });


            csv.push(
                rowData.join(',')
            );

        });


        const blob =
            new Blob(
                [csv.join('\n')],
                {
                    type: 'text/csv;charset=utf-8;'
                }
            );


        const url =
            URL.createObjectURL(blob);


        const link =
            document.createElement('a');


        link.href = url;

        link.download =
            'learnhub-enrollments.csv';


        link.click();


        URL.revokeObjectURL(url);

    }

</script>


</body>

</html>