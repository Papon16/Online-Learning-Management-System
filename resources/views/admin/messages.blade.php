<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages - LearnHub</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #111827;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 270px;
            background: #111d2e;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            overflow-y: auto;
            z-index: 1000;
        }

        .logo-area {
            height: 88px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            border-bottom: 1px solid rgba(255,255,255,.08);
        }

        .logo-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #1769ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-right: 12px;
        }

        .logo-text h2 {
            font-size: 21px;
            margin-bottom: 3px;
        }

        .logo-text p {
            font-size: 11px;
            color: #aebbd0;
        }

        .sidebar-menu {
            padding: 25px 13px;
        }

        .menu-title {
            color: #8292aa;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 22px 16px 12px;
        }

        .menu-item {
            width: 100%;
            height: 48px;
            display: flex;
            align-items: center;
            gap: 13px;
            color: #d6deea;
            padding: 0 15px;
            border-radius: 10px;
            margin-bottom: 5px;
            font-size: 14px;
            transition: .2s;
        }

        .menu-item:hover {
            background: #1d2a3d;
            color: white;
        }

        .menu-item.active {
            background: #1677f9;
            color: white;
        }

        .menu-icon {
            width: 25px;
            text-align: center;
            font-size: 18px;
        }

        .menu-arrow {
            margin-left: auto;
            font-size: 17px;
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            margin-left: 270px;
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e6eaf0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
        }

        .breadcrumb {
            color: #64748b;
            font-size: 13px;
        }

        .breadcrumb span {
            color: #111827;
            font-weight: 700;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .notification {
            position: relative;
            font-size: 21px;
        }

        .notification-badge {
            position: absolute;
            top: -7px;
            right: -7px;
            background: #ff334b;
            color: white;
            width: 19px;
            height: 19px;
            border-radius: 50%;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg,#d9a56d,#70492c);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .admin-info strong {
            display: block;
            font-size: 14px;
        }

        .admin-info small {
            color: #64748b;
            font-size: 11px;
        }

        /* =========================
           CONTENT
        ========================= */

        .content {
            padding: 30px 28px;
        }

        .page-heading {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 25px;
        }

        .page-icon {
            width: 60px;
            height: 60px;
            border-radius: 13px;
            background: #e5f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 29px;
        }

        .page-heading h1 {
            font-size: 27px;
            margin-bottom: 5px;
        }

        .page-heading p {
            font-size: 13px;
            color: #64748b;
        }

        /* =========================
           STAT CARDS
        ========================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 27px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5eaf1;
            border-radius: 14px;
            padding: 22px;
            display: flex;
            align-items: center;
            gap: 20px;
            min-height: 125px;
            box-shadow: 0 3px 12px rgba(15,23,42,.035);
        }

        .stat-icon {
            width: 68px;
            height: 68px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            flex-shrink: 0;
        }

        .blue-icon {
            background: #e6f0ff;
        }

        .pink-icon {
            background: #ffe7ed;
        }

        .sky-icon {
            background: #e4f0ff;
        }

        .green-icon {
            background: #e6f5ef;
        }

        .stat-card h2 {
            font-size: 28px;
            margin-bottom: 4px;
        }

        .stat-card p {
            font-size: 14px;
            color: #334155;
            margin-bottom: 7px;
        }

        .stat-bottom {
            font-size: 11px;
        }

        .green-text {
            color: #16a34a;
        }

        .red-text {
            color: #f04455;
        }

        .blue-text {
            color: #1769ff;
        }

        /* =========================
           MESSAGE AREA
        ========================= */

        .message-box {
            background: white;
            border: 1px solid #e5eaf1;
            border-radius: 14px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 42% 58%;
            height: 655px;
            box-shadow: 0 3px 15px rgba(15,23,42,.035);
        }

        /* =========================
           CONVERSATIONS
        ========================= */

        .conversations {
            border-right: 1px solid #e6eaf0;
            overflow: hidden;
        }

        .conversation-header {
            padding: 22px 20px 15px;
        }

        .conversation-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 17px;
        }

        .conversation-header h2 {
            font-size: 20px;
        }

        .new-message-btn {
            border: none;
            background: #1769ff;
            color: white;
            border-radius: 10px;
            padding: 12px 18px;
            font-size: 13px;
            cursor: pointer;
            font-weight: 600;
        }

        .new-message-btn:hover {
            background: #075ce9;
        }

        .search-box {
            position: relative;
        }

        .search-box span {
            position: absolute;
            left: 14px;
            top: 12px;
            font-size: 18px;
            color: #64748b;
        }

        .search-box input {
            width: 100%;
            height: 44px;
            border: 1px solid #d9e1eb;
            border-radius: 9px;
            outline: none;
            padding: 0 15px 0 42px;
            font-size: 13px;
        }

        .search-box input:focus {
            border-color: #1769ff;
        }

        .conversation-list {
            height: calc(100% - 135px);
            overflow-y: auto;
        }

        .conversation {
            padding: 13px 20px;
            display: flex;
            gap: 12px;
            border-top: 1px solid #edf0f4;
            cursor: pointer;
            transition: .2s;
        }

        .conversation:hover {
            background: #f7faff;
        }

        .conversation.active {
            background: #eef5ff;
        }

        .avatar {
            width: 47px;
            height: 47px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 15px;
            position: relative;
        }

        .avatar-blue {
            background: #dff0ff;
            color: #1769ff;
        }

        .avatar-pink {
            background: #ffe1e4;
            color: #d84c62;
        }

        .avatar-green {
            background: #dff8eb;
            color: #12925c;
        }

        .avatar-yellow {
            background: #fff1cf;
            color: #9b7210;
        }

        .avatar-purple {
            background: #eee6ff;
            color: #6040a0;
        }

        .online {
            width: 11px;
            height: 11px;
            background: #16c784;
            border: 2px solid white;
            border-radius: 50%;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .conversation-info {
            min-width: 0;
            flex: 1;
        }

        .conversation-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .conversation-name {
            font-size: 14px;
            font-weight: 700;
        }

        .conversation-time {
            color: #64748b;
            font-size: 11px;
        }

        .conversation-role {
            color: #64748b;
            font-size: 12px;
            margin-top: 3px;
        }

        .conversation-preview {
            color: #64748b;
            font-size: 12px;
            margin-top: 7px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .unread {
            background: #ff394b;
            color: white;
            width: 21px;
            height: 21px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            margin-left: auto;
            margin-top: 5px;
        }

        /* =========================
           CHAT
        ========================= */

        .chat {
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .chat-header {
            height: 91px;
            border-bottom: 1px solid #e7ebf0;
            padding: 17px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .chat-user {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .chat-user h3 {
            font-size: 17px;
            margin-bottom: 4px;
        }

        .chat-user p {
            font-size: 12px;
            color: #64748b;
        }

        .chat-actions {
            display: flex;
            gap: 20px;
            font-size: 21px;
            color: #64748b;
        }

        .chat-actions span {
            cursor: pointer;
        }

        .chat-messages {
            flex: 1;
            padding: 22px;
            overflow-y: auto;
            background: #fff;
        }

        .today {
            text-align: center;
            margin-bottom: 20px;
        }

        .today span {
            display: inline-block;
            background: #f0f4f9;
            color: #64748b;
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 11px;
        }

        .message-row {
            display: flex;
            margin-bottom: 20px;
        }

        .message-row.sent {
            justify-content: flex-end;
        }

        .message-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #dff0ff;
            color: #1769ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 10px;
            flex-shrink: 0;
        }

        .message-content {
            max-width: 72%;
        }

        .bubble {
            background: #f0f4f9;
            padding: 14px 18px;
            border-radius: 16px;
            border-top-left-radius: 5px;
            font-size: 13px;
            line-height: 1.5;
            color: #1e293b;
        }

        .sent .bubble {
            background: #1677f9;
            color: white;
            border-radius: 16px;
            border-top-right-radius: 5px;
        }

        .message-time {
            font-size: 10px;
            color: #64748b;
            margin-top: 6px;
        }

        .sent .message-time {
            text-align: right;
        }

        /* =========================
           INPUT
        ========================= */

        .chat-input-area {
            height: 82px;
            border-top: 1px solid #e7ebf0;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .attachment-btn {
            width: 48px;
            height: 48px;
            border: 1px solid #dce3ec;
            background: white;
            border-radius: 10px;
            font-size: 21px;
            color: #64748b;
            cursor: pointer;
        }

        .message-input {
            flex: 1;
            height: 48px;
            border: 1px solid #dce3ec;
            border-radius: 10px;
            outline: none;
            padding: 0 15px;
            font-size: 13px;
        }

        .message-input:focus {
            border-color: #1769ff;
        }

        .send-btn {
            width: 54px;
            height: 48px;
            background: #1769ff;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 21px;
            cursor: pointer;
        }

        .send-btn:hover {
            background: #075ce9;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 1200px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .message-box {
                grid-template-columns: 45% 55%;
            }
        }

        @media(max-width: 850px) {

            .sidebar {
                width: 220px;
            }

            .main {
                margin-left: 220px;
            }

            .message-box {
                grid-template-columns: 1fr;
                height: auto;
            }

            .conversations {
                display: none;
            }

            .chat {
                min-height: 600px;
            }
        }

        @media(max-width: 600px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .content {
                padding: 20px 15px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                padding: 0 15px;
            }

            .admin-info {
                display: none;
            }

            .page-heading h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

<!-- =========================
     SIDEBAR
========================= -->

<aside class="sidebar">

    <div class="logo-area">

        <div class="logo-box">
            🎓
        </div>

        <div class="logo-text">
            <h2>LearnHub</h2>
            <p>Online Learning System</p>
        </div>

    </div>


    <div class="sidebar-menu">

        <a href="{{ route('admin.dashboard') }}"
           class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

            <span class="menu-icon">🏠</span>
            <span>Dashboard</span>

        </a>


        <div class="menu-title">
            MANAGE
        </div>


        <a href="{{ route('admin.users') }}"
           class="menu-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">

            <span class="menu-icon">👥</span>
            <span>Users</span>
            <span class="menu-arrow">›</span>

        </a>


        <a href="{{ route('admin.courses') }}"
           class="menu-item {{ request()->routeIs('admin.courses') ? 'active' : '' }}">

            <span class="menu-icon">📚</span>
            <span>Courses</span>
            <span class="menu-arrow">›</span>

        </a>


        <a href="{{ route('admin.enrollments') }}"
           class="menu-item {{ request()->routeIs('admin.enrollments') ? 'active' : '' }}">

            <span class="menu-icon">🧑‍🎓</span>
            <span>Enrollments</span>

        </a>


        <a href="#"
           class="menu-item">

            <span class="menu-icon">📄</span>
            <span>Assignments</span>

        </a>


        <a href="{{ route('admin.messages') }}"
           class="menu-item {{ request()->routeIs('admin.messages') ? 'active' : '' }}">

            <span class="menu-icon">💬</span>
            <span>Messages</span>
            <span class="menu-arrow">›</span>

        </a>


        <a href="#"
           class="menu-item">

            <span class="menu-icon">📊</span>
            <span>Reports</span>
            <span class="menu-arrow">›</span>

        </a>


        <div class="menu-title">
            SETTINGS
        </div>


        <a href="{{ route('profile.edit') }}"
           class="menu-item">

            <span class="menu-icon">👤</span>
            <span>Profile</span>

        </a>


        <a href="#"
           class="menu-item">

            <span class="menu-icon">⚙️</span>
            <span>Settings</span>

        </a>


        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit"
                    class="menu-item"
                    style="border:none;background:none;cursor:pointer;text-align:left;">

                <span class="menu-icon">🚪</span>
                <span>Logout</span>

            </button>

        </form>

    </div>

</aside>


<!-- =========================
     MAIN
========================= -->

<main class="main">


    <!-- TOPBAR -->

    <div class="topbar">

        <div class="breadcrumb">
            Dashboard / <span>Messages</span>
        </div>


        <div class="top-right">

            <div class="notification">
                🔔
                <span class="notification-badge">3</span>
            </div>


            <div class="admin-profile">

                <div class="admin-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="admin-info">
                    <strong>{{ auth()->user()->name }}</strong>
                    <small>Administrator</small>
                </div>

                <span>▼</span>

            </div>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">


        <!-- PAGE HEADING -->

        <div class="page-heading">

            <div class="page-icon">
                💬
            </div>

            <div>

                <h1>Messages</h1>

                <p>
                    Send, receive and manage messages between students, teachers and admins
                </p>

            </div>

        </div>


        <!-- =========================
             STATISTICS
        ========================= -->

        <div class="stats">


            <div class="stat-card">

                <div class="stat-icon blue-icon">
                    ✉️
                </div>

                <div>
                    <h2>12</h2>
                    <p>Total Messages</p>

                    <span class="stat-bottom green-text">
                        ↑ All messages
                    </span>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon pink-icon">
                    💬
                </div>

                <div>
                    <h2>8</h2>
                    <p>Unread Messages</p>

                    <span class="stat-bottom red-text">
                        ↑ Need attention
                    </span>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon sky-icon">
                    ➤
                </div>

                <div>
                    <h2>5</h2>
                    <p>Sent Messages</p>

                    <span class="stat-bottom green-text">
                        ↑ Your messages
                    </span>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon blue-icon">
                    👥
                </div>

                <div>
                    <h2>7</h2>
                    <p>Active Conversations</p>

                    <span class="stat-bottom blue-text">
                        ↑ With users
                    </span>
                </div>

            </div>

        </div>


        <!-- =========================
             MESSAGE BOX
        ========================= -->

        <div class="message-box">


            <!-- =========================
                 CONVERSATIONS
            ========================= -->

            <div class="conversations">


                <div class="conversation-header">

                    <div class="conversation-header-top">

                        <h2>Conversations</h2>

                        <button class="new-message-btn"
                                onclick="newMessage()">

                            + New Message

                        </button>

                    </div>


                    <div class="search-box">

                        <span>⌕</span>

                        <input
                            type="text"
                            id="conversationSearch"
                            placeholder="Search messages..."
                            onkeyup="searchConversations()"
                        >

                    </div>

                </div>


                <div class="conversation-list"
                     id="conversationList">


                    <!-- JOHN -->

                    <div class="conversation active"
                         onclick="openChat(
                             'John Smith',
                             'Student',
                             'JS'
                         )">

                        <div class="avatar avatar-blue">

                            JS

                            <span class="online"></span>

                        </div>


                        <div class="conversation-info">

                            <div class="conversation-top">

                                <span class="conversation-name">
                                    John Smith
                                </span>

                                <span class="conversation-time">
                                    10:30 AM
                                </span>

                            </div>

                            <div class="conversation-role">
                                Student
                            </div>

                            <div class="conversation-preview">
                                Hi Sir, I have a question about...
                            </div>

                        </div>


                        <div class="unread">
                            2
                        </div>

                    </div>


                    <!-- SARAH -->

                    <div class="conversation"
                         onclick="openChat(
                             'Sarah Ahmed',
                             'Teacher',
                             'SA'
                         )">

                        <div class="avatar avatar-pink">

                            SA

                            <span class="online"></span>

                        </div>


                        <div class="conversation-info">

                            <div class="conversation-top">

                                <span class="conversation-name">
                                    Sarah Ahmed
                                </span>

                                <span class="conversation-time">
                                    09:15 AM
                                </span>

                            </div>

                            <div class="conversation-role">
                                Teacher
                            </div>

                            <div class="conversation-preview">
                                Thank you for your submission!
                            </div>

                        </div>


                        <div class="unread">
                            1
                        </div>

                    </div>


                    <!-- MIKE -->

                    <div class="conversation"
                         onclick="openChat(
                             'Mike Johnson',
                             'Student',
                             'MJ'
                         )">

                        <div class="avatar avatar-green">

                            MJ

                            <span class="online"></span>

                        </div>


                        <div class="conversation-info">

                            <div class="conversation-top">

                                <span class="conversation-name">
                                    Mike Johnson
                                </span>

                                <span class="conversation-time">
                                    Yesterday
                                </span>

                            </div>

                            <div class="conversation-role">
                                Student
                            </div>

                            <div class="conversation-preview">
                                When will the next assignment...
                            </div>

                        </div>


                        <div class="unread">
                            3
                        </div>

                    </div>


                    <!-- EMILY -->

                    <div class="conversation"
                         onclick="openChat(
                             'Emily Davis',
                             'Teacher',
                             'ED'
                         )">

                        <div class="avatar avatar-yellow">

                            ED

                            <span class="online"></span>

                        </div>


                        <div class="conversation-info">

                            <div class="conversation-top">

                                <span class="conversation-name">
                                    Emily Davis
                                </span>

                                <span class="conversation-time">
                                    Yesterday
                                </span>

                            </div>

                            <div class="conversation-role">
                                Teacher
                            </div>

                            <div class="conversation-preview">
                                The course materials have been...
                            </div>

                        </div>

                    </div>


                    <!-- DAVID -->

                    <div class="conversation"
                         onclick="openChat(
                             'David Wilson',
                             'Student',
                             'DW'
                         )">

                        <div class="avatar avatar-purple">
                            DW
                        </div>


                        <div class="conversation-info">

                            <div class="conversation-top">

                                <span class="conversation-name">
                                    David Wilson
                                </span>

                                <span class="conversation-time">
                                    Oct 4
                                </span>

                            </div>

                            <div class="conversation-role">
                                Student
                            </div>

                            <div class="conversation-preview">
                                Can you please check my work?
                            </div>

                        </div>

                    </div>


                </div>

            </div>


            <!-- =========================
                 CHAT AREA
            ========================= -->

            <div class="chat">


                <!-- CHAT HEADER -->

                <div class="chat-header">

                    <div class="chat-user">

                        <div class="avatar avatar-blue"
                             id="chatAvatar">

                            JS

                            <span class="online"></span>

                        </div>


                        <div>

                            <h3 id="chatName">
                                John Smith
                            </h3>

                            <p id="chatRole">
                                Student
                            </p>

                        </div>

                    </div>


                    <div class="chat-actions">

                        <span title="Call">
                            📞
                        </span>

                        <span title="Video">
                            🎥
                        </span>

                        <span title="More">
                            ⋮
                        </span>

                    </div>

                </div>


                <!-- CHAT MESSAGES -->

                <div class="chat-messages"
                     id="chatMessages">


                    <div class="today">
                        <span>Today</span>
                    </div>


                    <!-- RECEIVED -->

                    <div class="message-row">

                        <div class="message-avatar">
                            JS
                        </div>


                        <div class="message-content">

                            <div class="bubble">
                                Hi Sir, I have a question about the Laravel course.
                            </div>

                            <div class="message-time">
                                10:25 AM
                            </div>

                        </div>

                    </div>


                    <!-- SENT -->

                    <div class="message-row sent">

                        <div class="message-content">

                            <div class="bubble">
                                Hello John, sure! What is your question?
                            </div>

                            <div class="message-time">
                                10:27 AM ✓✓
                            </div>

                        </div>

                    </div>


                    <!-- RECEIVED -->

                    <div class="message-row">

                        <div class="message-avatar">
                            JS
                        </div>


                        <div class="message-content">

                            <div class="bubble">
                                I am having trouble understanding the routing section. Could you please explain it in more detail?
                            </div>

                            <div class="message-time">
                                10:30 AM
                            </div>

                        </div>

                    </div>


                    <!-- SENT -->

                    <div class="message-row sent">

                        <div class="message-content">

                            <div class="bubble">
                                Of course! I can help you with that. Let me send you some additional resources.
                            </div>

                            <div class="message-time">
                                10:32 AM ✓✓
                            </div>

                        </div>

                    </div>


                </div>


                <!-- INPUT -->

                <div class="chat-input-area">

                    <button class="attachment-btn">
                        📎
                    </button>


                    <input
                        type="text"
                        id="messageInput"
                        class="message-input"
                        placeholder="Type your message..."
                        onkeydown="handleEnter(event)"
                    >


                    <button class="send-btn"
                            onclick="sendMessage()">

                        ➤

                    </button>

                </div>

            </div>

        </div>

    </div>

</main>


<script>

    /* =========================
       SEARCH CONVERSATIONS
    ========================= */

    function searchConversations() {

        const input =
            document.getElementById('conversationSearch');

        const search =
            input.value.toLowerCase();

        const conversations =
            document.querySelectorAll('.conversation');

        conversations.forEach(function(item) {

            const text =
                item.innerText.toLowerCase();

            if (text.includes(search)) {

                item.style.display = 'flex';

            } else {

                item.style.display = 'none';

            }

        });

    }


    /* =========================
       OPEN CHAT
    ========================= */

    function openChat(name, role, initials) {

        document.getElementById('chatName').innerText = name;

        document.getElementById('chatRole').innerText = role;

        document.getElementById('chatAvatar').childNodes[0].nodeValue =
            initials + ' ';


        document
            .querySelectorAll('.conversation')
            .forEach(function(item) {

                item.classList.remove('active');

            });


        event.currentTarget.classList.add('active');

    }


    /* =========================
       SEND MESSAGE
    ========================= */

    function sendMessage() {

        const input =
            document.getElementById('messageInput');

        const message =
            input.value.trim();

        if (message === '') {
            return;
        }


        const chatMessages =
            document.getElementById('chatMessages');


        const row =
            document.createElement('div');

        row.className =
            'message-row sent';


        row.innerHTML = `

            <div class="message-content">

                <div class="bubble">
                    ${escapeHtml(message)}
                </div>

                <div class="message-time">
                    Just now ✓✓
                </div>

            </div>

        `;


        chatMessages.appendChild(row);


        input.value = '';


        chatMessages.scrollTop =
            chatMessages.scrollHeight;

    }


    /* =========================
       ENTER TO SEND
    ========================= */

    function handleEnter(event) {

        if (event.key === 'Enter') {

            event.preventDefault();

            sendMessage();

        }

    }


    /* =========================
       NEW MESSAGE
    ========================= */

    function newMessage() {

        alert(
            'New Message feature is ready to connect with your Laravel backend.'
        );

    }


    /* =========================
       HTML ESCAPE
    ========================= */

    function escapeHtml(text) {

        const div =
            document.createElement('div');

        div.textContent = text;

        return div.innerHTML;

    }

</script>

</body>
</html>