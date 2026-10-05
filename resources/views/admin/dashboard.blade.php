<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - LearnHub</title>

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

        button,
        input,
        select {
            font-family: inherit;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           LAYOUT
        ========================== */

        .dashboard-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 260px;
            background: #111827;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar-logo {
            height: 82px;
            display: flex;
            align-items: center;
            padding: 0 22px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-right: 11px;
        }

        .logo-text h2 {
            font-size: 20px;
            line-height: 1;
        }

        .logo-text span {
            font-size: 11px;
            color: #9ca3af;
            display: block;
            margin-top: 5px;
        }

        .sidebar-menu {
            padding: 20px 13px;
        }

        .menu-title {
            color: #6b7280;
            font-size: 11px;
            font-weight: bold;
            padding: 14px 12px 8px;
            letter-spacing: 1px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #cbd5e1;
            padding: 12px 13px;
            border-radius: 9px;
            margin-bottom: 4px;
            transition: 0.2s;
            font-size: 14px;
        }

        .menu-item:hover {
            background: #1e293b;
            color: white;
        }

        .menu-item.active {
            background: #2563eb;
            color: white;
        }

        .menu-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .submenu {
            margin-left: 20px;
            margin-bottom: 5px;
        }

        .submenu a {
            display: block;
            color: #9ca3af;
            font-size: 13px;
            padding: 9px 12px;
            border-radius: 7px;
            margin: 2px 0;
        }

        .submenu a:hover,
        .submenu a.active {
            color: #60a5fa;
            background: rgba(37,99,235,0.12);
        }

        /* =========================
           MAIN CONTENT
        ========================== */

        .main-content {
            margin-left: 260px;
            width: calc(100% - 260px);
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================== */

        .topbar {
            height: 82px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 500;
        }

        .breadcrumb {
            color: #6b7280;
            font-size: 13px;
        }

        .breadcrumb strong {
            color: #111827;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Notification */

        .notification-wrap {
            position: relative;
        }

        .notification-button {
            border: none;
            background: #f8fafc;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 19px;
            position: relative;
            transition: 0.2s;
        }

        .notification-button:hover {
            background: #eff6ff;
        }

        .notification-badge {
            position: absolute;
            top: -2px;
            right: -1px;
            background: #ef4444;
            color: white;
            min-width: 18px;
            height: 18px;
            border-radius: 20px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
        }

        .notification-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 52px;
            width: 340px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border: 1px solid #e5e7eb;
            overflow: hidden;
        }

        .notification-menu.show {
            display: block;
        }

        .notification-header {
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .notification-header h4 {
            font-size: 15px;
        }

        .notification-header span {
            font-size: 11px;
            color: #2563eb;
        }

        .notification-item {
            padding: 13px 16px;
            display: flex;
            gap: 11px;
            border-bottom: 1px solid #f1f5f9;
        }

        .notification-item:hover {
            background: #f8fafc;
        }

        .notification-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .notification-text strong {
            display: block;
            font-size: 13px;
            color: #111827;
        }

        .notification-text small {
            display: block;
            font-size: 11px;
            color: #6b7280;
            margin-top: 3px;
        }

        .notification-empty {
            padding: 25px 15px;
            text-align: center;
            color: #9ca3af;
            font-size: 13px;
        }

        /* Profile */

        .profile-wrap {
            position: relative;
        }

        .profile-button {
            border: none;
            background: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-avatar {
            width: 43px;
            height: 43px;
            border-radius: 50%;
            overflow: hidden;
            background: #2563eb;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 17px;
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
            font-size: 13px;
            color: #111827;
        }

        .profile-info span {
            display: block;
            font-size: 11px;
            color: #6b7280;
            margin-top: 2px;
        }

        .profile-arrow {
            color: #6b7280;
            font-size: 12px;
        }

        .profile-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 55px;
            width: 210px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 11px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
            padding: 7px;
        }

        .profile-menu.show {
            display: block;
        }

        .profile-menu button,
        .profile-menu a {
            width: 100%;
            border: none;
            background: transparent;
            display: block;
            text-align: left;
            padding: 10px 12px;
            border-radius: 7px;
            color: #374151;
            font-size: 13px;
            cursor: pointer;
        }

        .profile-menu button:hover,
        .profile-menu a:hover {
            background: #f3f4f6;
        }

        .profile-menu .logout-btn {
            color: #dc2626;
        }

        /* =========================
           PAGE
        ========================== */

        .page-content {
            padding: 30px 32px;
        }

        .page-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 27px;
        }

        .page-title {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .page-title-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .page-title h1 {
            font-size: 25px;
            color: #111827;
            margin-bottom: 5px;
        }

        .page-title p {
            font-size: 13px;
            color: #6b7280;
        }

        /* =========================
           ALERT
        ========================== */

        .alert {
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .alert-success {
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }

        .alert-error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        /* =========================
           STATS
        ========================== */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 13px;
            padding: 21px;
            border: 1px solid #e8edf4;
            box-shadow: 0 3px 12px rgba(15,23,42,0.03);
            transition: 0.25s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(15,23,42,0.08);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-icon {
            width: 43px;
            height: 43px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        .stat-blue .stat-icon {
            background: #eff6ff;
            color: #2563eb;
        }

        .stat-green .stat-icon {
            background: #ecfdf5;
            color: #059669;
        }

        .stat-purple .stat-icon {
            background: #f5f3ff;
            color: #7c3aed;
        }

        .stat-orange .stat-icon {
            background: #fff7ed;
            color: #ea580c;
        }

        .stat-card h3 {
            font-size: 13px;
            color: #6b7280;
            font-weight: 500;
            margin-top: 17px;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            margin-top: 5px;
        }

        .stat-growth {
            font-size: 11px;
            color: #10b981;
            margin-top: 7px;
        }

        /* =========================
           USERS CARD
        ========================== */

        .users-card {
            background: white;
            border-radius: 14px;
            border: 1px solid #e8edf4;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(15,23,42,0.03);
        }

        .users-card-header {
            padding: 20px 22px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .users-card-header h2 {
            font-size: 17px;
            color: #111827;
        }

        .users-card-header p {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 4px;
        }

        .table-tools {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .search-box {
            position: relative;
        }

        .search-box span {
            position: absolute;
            left: 11px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 13px;
        }

        .search-box input {
            width: 210px;
            height: 38px;
            border: 1px solid #dfe4ea;
            border-radius: 8px;
            outline: none;
            padding: 0 12px 0 34px;
            font-size: 12px;
        }

        .search-box input:focus {
            border-color: #2563eb;
        }

        .role-filter {
            height: 38px;
            border: 1px solid #dfe4ea;
            border-radius: 8px;
            padding: 0 10px;
            outline: none;
            font-size: 12px;
            color: #374151;
        }

        .create-btn {
            height: 38px;
            border: none;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            padding: 0 15px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            transition: 0.2s;
        }

        .create-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           TABLE
        ========================== */

        .table-wrapper {
            overflow-x: auto;
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        .users-table th {
            text-align: left;
            padding: 14px 20px;
            background: #f8fafc;
            color: #6b7280;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .users-table td {
            padding: 14px 20px;
            border-top: 1px solid #f0f2f5;
            font-size: 12px;
            color: #4b5563;
        }

        .users-table tbody tr {
            transition: 0.15s;
        }

        .users-table tbody tr:hover {
            background: #f8fbff;
        }

        .user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-small-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            overflow: hidden;
        }

        .user-small-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-name {
            color: #111827;
            font-weight: 600;
            font-size: 12px;
        }

        .user-email {
            color: #9ca3af;
            font-size: 10px;
            margin-top: 3px;
        }

        .role-badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .role-student {
            color: #2563eb;
            background: #eff6ff;
        }

        .role-teacher {
            color: #7c3aed;
            background: #f5f3ff;
        }

        .role-admin {
            color: #ea580c;
            background: #fff7ed;
        }

        .status-badge {
            color: #059669;
            background: #ecfdf5;
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .actions {
            display: flex;
            gap: 5px;
        }

        .action-btn {
            width: 30px;
            height: 30px;
            border-radius: 7px;
            border: 1px solid #e5e7eb;
            background: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: 0.2s;
        }

        .action-btn:hover {
            transform: translateY(-1px);
        }

        .view-btn:hover {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .edit-btn:hover {
            background: #f5f3ff;
            border-color: #ddd6fe;
        }

        .delete-btn:hover {
            background: #fef2f2;
            border-color: #fecaca;
        }

        /* =========================
           PAGINATION
        ========================== */

        .table-footer {
            padding: 16px 20px;
            border-top: 1px solid #edf0f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #9ca3af;
            font-size: 11px;
        }

        .pagination {
            display: flex;
            gap: 5px;
        }

        .page-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #e5e7eb;
            background: white;
            border-radius: 6px;
            color: #6b7280;
            cursor: pointer;
            font-size: 11px;
        }

        .page-btn:hover,
        .page-btn.active {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }

        /* =========================
           MODAL
        ========================== */

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(15,23,42,0.55);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 25px 70px rgba(0,0,0,0.25);
            animation: modalShow 0.2s ease;
        }

        @keyframes modalShow {
            from {
                transform: translateY(10px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            padding: 20px 22px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .modal-title-icon {
            width: 37px;
            height: 37px;
            border-radius: 9px;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-title h3 {
            font-size: 16px;
        }

        .modal-title p {
            font-size: 10px;
            color: #9ca3af;
            margin-top: 3px;
        }

        .close-modal {
            width: 32px;
            height: 32px;
            border: none;
            background: #f3f4f6;
            border-radius: 7px;
            cursor: pointer;
            color: #6b7280;
        }

        .modal-body {
            padding: 22px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 7px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            height: 42px;
            border: 1px solid #dfe4ea;
            border-radius: 8px;
            padding: 0 12px;
            outline: none;
            font-size: 12px;
            color: #374151;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #2563eb;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .modal-footer {
            padding: 16px 22px;
            border-top: 1px solid #edf0f4;
            display: flex;
            justify-content: flex-end;
            gap: 9px;
        }

        .cancel-btn {
            height: 39px;
            padding: 0 17px;
            border: 1px solid #dfe4ea;
            background: white;
            color: #6b7280;
            border-radius: 8px;
            cursor: pointer;
            font-size: 12px;
        }

        .submit-btn {
            height: 39px;
            padding: 0 18px;
            border: none;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
        }

        /* =========================
           PROFILE MODAL
        ========================== */

        .profile-modal-card {
            width: 100%;
            max-width: 450px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 25px 70px rgba(0,0,0,0.25);
        }

        .profile-image-preview {
            width: 85px;
            height: 85px;
            border-radius: 50%;
            overflow: hidden;
            background: #eff6ff;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
            margin: 0 auto 18px;
        }

        .profile-image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* =========================
           MOBILE
        ========================== */

        .mobile-menu-btn {
            display: none;
            border: none;
            background: #f3f4f6;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        @media(max-width: 1100px) {

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .users-card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .table-tools {
                width: 100%;
                flex-wrap: wrap;
            }
        }

        @media(max-width: 800px) {

            .sidebar {
                transform: translateX(-100%);
                transition: 0.25s;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .mobile-menu-btn {
                display: block;
            }

            .topbar {
                padding: 0 18px;
            }

            .page-content {
                padding: 22px 18px;
            }

            .profile-info,
            .profile-arrow {
                display: none;
            }

            .notification-menu {
                right: -70px;
            }
        }

        @media(max-width: 550px) {

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .page-heading {
                align-items: flex-start;
            }

            .page-title h1 {
                font-size: 21px;
            }

            .table-tools {
                display: grid;
                grid-template-columns: 1fr;
            }

            .search-box input,
            .role-filter,
            .create-btn {
                width: 100%;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .table-footer {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }
        }
        /* =========================================================
   LEARNHUB - GLOBAL HOVER EFFECT
========================================================= */

/* SIDEBAR */
.menu-item {
    transition: all 0.25s ease !important;
}

.menu-item:hover {
    background: #1e293b !important;
    color: #ffffff !important;
    transform: translateX(3px);
}

.menu-item.active {
    background: #2563eb !important;
    color: #ffffff !important;
}

.menu-item.active:hover {
    background: #1d4ed8 !important;
}


/* SUBMENU */
.submenu a {
    transition: all 0.25s ease !important;
}

.submenu a:hover {
    background: rgba(37, 99, 235, 0.18) !important;
    color: #60a5fa !important;
    padding-left: 17px !important;
}


/* LOGO */
.logo-icon {
    transition: all 0.25s ease !important;
}

.logo-icon:hover {
    transform: scale(1.08);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.35);
}


/* STAT CARDS */
.stat-card {
    transition: all 0.25s ease !important;
}

.stat-card:hover {
    transform: translateY(-5px) !important;
    border-color: #bfdbfe !important;
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.10) !important;
}

.stat-icon {
    transition: all 0.25s ease !important;
}

.stat-card:hover .stat-icon {
    transform: scale(1.08);
}


/* USERS CARD */
.users-card {
    transition: all 0.25s ease !important;
}

.users-card:hover {
    box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08) !important;
}


/* TABLE */
.users-table tbody tr {
    transition: all 0.2s ease !important;
}

.users-table tbody tr:hover {
    background: #f0f7ff !important;
}


/* USER AVATAR */
.user-small-avatar {
    transition: all 0.25s ease !important;
}

.user-cell:hover .user-small-avatar {
    transform: scale(1.08);
    box-shadow: 0 5px 15px rgba(37, 99, 235, 0.20);
}


/* CREATE BUTTON */
.create-btn {
    transition: all 0.25s ease !important;
}

.create-btn:hover {
    background: #1d4ed8 !important;
    transform: translateY(-2px);
    box-shadow: 0 7px 18px rgba(37, 99, 235, 0.25);
}


/* ACTION BUTTONS */
.action-btn {
    transition: all 0.2s ease !important;
}

.action-btn:hover {
    transform: translateY(-2px) scale(1.06);
}

.view-btn:hover {
    background: #eff6ff !important;
    border-color: #93c5fd !important;
    color: #2563eb !important;
}

.edit-btn:hover {
    background: #f5f3ff !important;
    border-color: #c4b5fd !important;
    color: #7c3aed !important;
}

.delete-btn:hover {
    background: #fef2f2 !important;
    border-color: #fca5a5 !important;
    color: #dc2626 !important;
}


/* PAGINATION */
.page-btn {
    transition: all 0.2s ease !important;
}

.page-btn:hover {
    background: #eff6ff !important;
    color: #2563eb !important;
    border-color: #93c5fd !important;
    transform: translateY(-2px);
}

.page-btn.active:hover {
    background: #1d4ed8 !important;
    color: #ffffff !important;
}


/* SEARCH */
.search-box input {
    transition: all 0.25s ease !important;
}

.search-box input:hover {
    border-color: #93c5fd !important;
}

.search-box input:focus {
    outline: none !important;
    border-color: #2563eb !important;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10) !important;
}


/* FILTER */
.role-filter {
    transition: all 0.25s ease !important;
}

.role-filter:hover {
    border-color: #93c5fd !important;
}

.role-filter:focus {
    outline: none !important;
    border-color: #2563eb !important;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10) !important;
}


/* FORM INPUTS */
.form-group input,
.form-group select,
.form-group textarea {
    transition: all 0.25s ease !important;
}

.form-group input:hover,
.form-group select:hover,
.form-group textarea:hover {
    border-color: #93c5fd !important;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none !important;
    border-color: #2563eb !important;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10) !important;
}


/* NOTIFICATION */
.notification-button {
    transition: all 0.2s ease !important;
}

.notification-button:hover {
    background: #eff6ff !important;
    color: #2563eb !important;
    transform: scale(1.05);
}


/* NOTIFICATION ITEMS */
.notification-item {
    transition: all 0.2s ease !important;
}

.notification-item:hover {
    background: #f0f7ff !important;
    padding-left: 20px;
}


/* PROFILE */
.profile-button {
    transition: all 0.25s ease !important;
}

.profile-button:hover {
    opacity: 0.9;
}

.profile-avatar {
    transition: all 0.25s ease !important;
}

.profile-button:hover .profile-avatar {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(37, 99, 235, 0.20);
}


/* PROFILE MENU */
.profile-menu a,
.profile-menu button {
    transition: all 0.2s ease !important;
}

.profile-menu a:hover,
.profile-menu button:hover {
    background: #eff6ff !important;
    color: #2563eb !important;
    padding-left: 17px !important;
}

.profile-menu .logout-btn:hover {
    background: #fef2f2 !important;
    color: #dc2626 !important;
}


/* MODAL CLOSE */
.close-modal {
    transition: all 0.25s ease !important;
}

.close-modal:hover {
    background: #fee2e2 !important;
    color: #dc2626 !important;
    transform: rotate(90deg);
}


/* CANCEL */
.cancel-btn {
    transition: all 0.2s ease !important;
}

.cancel-btn:hover {
    background: #f8fafc !important;
    border-color: #cbd5e1 !important;
    transform: translateY(-1px);
}


/* SUBMIT */
.submit-btn {
    transition: all 0.2s ease !important;
}

.submit-btn:hover {
    background: #1d4ed8 !important;
    transform: translateY(-2px);
    box-shadow: 0 7px 18px rgba(37, 99, 235, 0.25);
}


/* BADGES */
.role-badge,
.status-badge {
    transition: all 0.2s ease !important;
}

.role-badge:hover,
.status-badge:hover {
    transform: translateY(-2px);
}


/* PROFILE IMAGE */
.profile-image-preview {
    transition: all 0.25s ease !important;
}

.profile-image-preview:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.15);
}


/* MOBILE MENU */
.mobile-menu-btn {
    transition: all 0.2s ease !important;
}

.mobile-menu-btn:hover {
    background: #dbeafe !important;
    color: #2563eb !important;
    transform: scale(1.05);
}


/* ALL BUTTONS */
button {
    transition: all 0.2s ease;
}

button:active {
    transform: scale(0.97);
}


/* CLICKABLE */
a,
button,
select,
.menu-item,
.action-btn,
.page-btn {
    cursor: pointer;
}
    </style>
</head>

<body>

<div class="dashboard-wrapper">

<!-- =========================
     SIDEBAR
========================== -->

<aside class="sidebar" id="sidebar">

    <!-- LOGO -->
    <div class="sidebar-logo">

        <div class="logo-icon">
            🎓
        </div>

        <div class="logo-text">
            <h2>LearnHub</h2>
            <span>Online Learning System</span>
        </div>

    </div>


    <!-- MENU -->
    <div class="sidebar-menu">

        <!-- =========================
             DASHBOARD
        ========================== -->

        <a href="{{ route('admin.dashboard') }}"
           class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

            <span class="menu-icon">
                🏠
            </span>

            <span>
                Dashboard
            </span>

        </a>


        <!-- =========================
             MANAGE
        ========================== -->

        <div class="menu-title">
            MANAGE
        </div>


        <!-- USERS -->

        <a href="{{ route('admin.users') }}"
           class="menu-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">

            <span class="menu-icon">
                👥
            </span>

            <span>
                Users
            </span>

            <span class="menu-arrow">
                ⌄
            </span>

        </a>


        <!-- USER SUBMENU -->

        <div class="submenu">

            <a href="{{ route('admin.users') }}"
               class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">

                <span class="submenu-dot">
                    ●
                </span>

                All Users

            </a>


            <a href="#"
               onclick="openCreateModal(); return false;">

                <span class="submenu-dot empty">
                    ○
                </span>

                Create User

            </a>

        </div>


        <!-- =========================
             COURSES
        ========================== -->

        <a href="{{ route('admin.courses') }}"
           class="menu-item {{ request()->routeIs('admin.courses') ? 'active' : '' }}">

            <span class="menu-icon">
                📚
            </span>

            <span>
                Courses
            </span>

            <span class="menu-arrow">
                ⌄
            </span>

        </a>


        <!-- =========================
             ENROLLMENTS
        ========================== -->

     <a href="{{ route('admin.enrollments') }}"
   class="menu-item {{ request()->routeIs('admin.enrollments') ? 'active' : '' }}">

    <span class="menu-icon">
        🧑‍🎓
    </span>

    <span>
        Enrollments
    </span>

</a>

        <!-- =========================
             ASSIGNMENTS
        ========================== -->

        <a href="#"
           class="menu-item">

            <span class="menu-icon">
                📝
            </span>

            <span>
                Assignments
            </span>

        </a>


        <!-- =========================
             MESSAGES
        ========================== -->

 <a href="{{ route('admin.messages') }}"
   class="menu-item {{ request()->routeIs('admin.messages') ? 'active' : '' }}">

    <span class="menu-icon">
        💬
    </span>

    <span>
        Messages
    </span>

</a>

        <!-- =========================
             REPORTS
        ========================== -->

        <a href="#"
           class="menu-item">

            <span class="menu-icon">
                📊
            </span>

            <span>
                Reports
            </span>

            <span class="menu-arrow">
                ⌄
            </span>

        </a>


        <!-- =========================
             SETTINGS
        ========================== -->

        <div class="menu-title">
            SETTINGS
        </div>


        <!-- PROFILE -->

        <a href="#"
           class="menu-item"
           onclick="openProfileModal(); return false;">

            <span class="menu-icon">
                👤
            </span>

            <span>
                Profile
            </span>

        </a>


        <!-- SETTINGS -->

        <a href="#"
           class="menu-item">

            <span class="menu-icon">
                ⚙️
            </span>

            <span>
                Settings
            </span>

        </a>


        <!-- =========================
             LOGOUT
        ========================== -->

        <form action="{{ route('logout') }}"
              method="POST"
              style="margin:0;">

            @csrf

            <button type="submit"
                    class="menu-item logout-menu-item">

                <span class="menu-icon">
                    🚪
                </span>

                <span>
                    Logout
                </span>

            </button>

        </form>

    </div>

</aside>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main-content">

        <!-- TOPBAR -->

        <header class="topbar">

            <div style="display:flex; align-items:center; gap:12px;">

                <button class="mobile-menu-btn"
                        onclick="toggleSidebar()">
                    ☰
                </button>

                <div class="breadcrumb">
                    Dashboard / <strong>Users</strong>
                </div>

            </div>


            <div class="topbar-right">

                <!-- NOTIFICATION -->

                <div class="notification-wrap">

                    <button type="button"
                            class="notification-button"
                            id="notificationButton">
                        🔔

                        @php
                            $pendingNotificationCount = \App\Models\Course::where('status', 'pending')->count();
                        @endphp

                        @if($pendingNotificationCount > 0)
                            <span class="notification-badge">
                                {{ $pendingNotificationCount > 9 ? '9+' : $pendingNotificationCount }}
                            </span>
                        @endif
                    </button>


                    <div class="notification-menu"
                         id="notificationMenu">

                        <div class="notification-header">

                            <h4>Notifications</h4>

                            <span>
                                {{ $pendingNotificationCount }} pending
                            </span>

                        </div>


                        @php
                            $pendingCourses = \App\Models\Course::where('status', 'pending')
                                ->latest()
                                ->take(5)
                                ->get();
                        @endphp


                        @forelse($pendingCourses as $course)

                            <a href="{{ route('admin.courses') }}"
                               class="notification-item"
                               style="text-decoration:none;">

                                <div class="notification-icon">
                                    📚
                                </div>

                                <div class="notification-text">

                                    <strong>
                                        New course waiting for approval
                                    </strong>

                                    <small>
                                        {{ $course->title ?? 'New Course' }}
                                    </small>

                                </div>

                            </a>

                        @empty

                            <div class="notification-empty">
                                🎉 No new notifications
                            </div>

                        @endforelse

                    </div>

                </div>


                <!-- PROFILE -->

                <div class="profile-wrap">

                    <button type="button"
                            class="profile-button"
                            id="profileButton">

                        <div class="profile-avatar">

                            @if(auth()->user()->profile_image)
                                <img src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                                     alt="Profile">
                            @else
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
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

                        <span class="profile-arrow">
                            ▼
                        </span>

                    </button>


                    <div class="profile-menu"
                         id="profileMenu">

                        <button type="button"
                                onclick="openProfileModal(); closeProfileMenu();">
                            👤 Edit Profile
                        </button>

                        <a href="{{ route('profile.edit') }}">
                            ⚙️ Profile Settings
                        </a>

                        <form action="{{ route('logout') }}"
                              method="POST">
                            @csrf

                            <button type="submit"
                                    class="logout-btn">
                                🚪 Logout
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </header>


        <!-- PAGE -->

        <section class="page-content">


            <!-- SUCCESS / ERROR -->

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif


            @if(session('error'))

                <div class="alert alert-error">
                    {{ session('error') }}
                </div>

            @endif


            @if($errors->any())

                <div class="alert alert-error">

                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach

                </div>

            @endif


            <!-- PAGE HEADING -->

            <div class="page-heading">

                <div class="page-title">

                    <div class="page-title-icon">
                        👥
                    </div>

                    <div>

                        <h1>
                            Manage Users
                        </h1>

                        <p>
                            View, create, and manage all users
                            (Students, Teachers, and Admins)
                        </p>

                    </div>

                </div>

            </div>


            <!-- =========================
                 STAT CARDS
            ========================== -->

            <div class="stats-grid">


                <!-- TOTAL -->

                <div class="stat-card stat-blue">

                    <div class="stat-top">

                        <div>
                            <h3>Total Users</h3>

                            <div class="stat-number">
                                {{ $totalUsers ?? \App\Models\User::count() }}
                            </div>

                            <div class="stat-growth">
                                ↑ Active users
                            </div>
                        </div>

                        <div class="stat-icon">
                            👥
                        </div>

                    </div>

                </div>


                <!-- STUDENTS -->

                <div class="stat-card stat-green">

                    <div class="stat-top">

                        <div>
                            <h3>Students</h3>

                            <div class="stat-number">
                                {{ $studentCount ?? \App\Models\User::where('role','student')->count() }}
                            </div>

                            <div class="stat-growth">
                                ↑ Student accounts
                            </div>
                        </div>

                        <div class="stat-icon">
                            🎓
                        </div>

                    </div>

                </div>


                <!-- TEACHERS -->

                <div class="stat-card stat-purple">

                    <div class="stat-top">

                        <div>
                            <h3>Teachers</h3>

                            <div class="stat-number">
                                {{ $teacherCount ?? \App\Models\User::where('role','teacher')->count() }}
                            </div>

                            <div class="stat-growth">
                                ↑ Teacher accounts
                            </div>
                        </div>

                        <div class="stat-icon">
                            👨‍🏫
                        </div>

                    </div>

                </div>


                <!-- ADMINS -->

                <div class="stat-card stat-orange">

                    <div class="stat-top">

                        <div>
                            <h3>Admins</h3>

                            <div class="stat-number">
                                {{ $adminCount ?? \App\Models\User::where('role','admin')->count() }}
                            </div>

                            <div class="stat-growth">
                                ↑ Admin accounts
                            </div>
                        </div>

                        <div class="stat-icon">
                            🛡️
                        </div>

                    </div>

                </div>

            </div>


            <!-- =========================
                 USERS TABLE
            ========================== -->

            <div class="users-card">


                <div class="users-card-header">

                    <div>

                        <h2>
                            All Users
                        </h2>

                        <p>
                            Manage all registered users
                        </p>

                    </div>


                    <div class="table-tools">

                        <div class="search-box">

                            <span>🔍</span>

                            <input type="text"
                                   id="userSearch"
                                   placeholder="Search users...">

                        </div>


                        <select id="roleFilter"
                                class="role-filter">

                            <option value="all">
                                All Roles
                            </option>

                            <option value="student">
                                Student
                            </option>

                            <option value="teacher">
                                Teacher
                            </option>

                            <option value="admin">
                                Admin
                            </option>

                        </select>


                        <button type="button"
                                class="create-btn"
                                onclick="openCreateModal()">

                            + Create User

                        </button>

                    </div>

                </div>


                <div class="table-wrapper">

                    <table class="users-table">

                        <thead>

                        <tr>

                            <th>#</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Role</th>

                            <th>Status</th>

                            <th>Joined At</th>

                            <th>Actions</th>

                        </tr>

                        </thead>


                        <tbody id="usersTableBody">

                        @forelse($users as $index => $user)

                            <tr
                                data-name="{{ strtolower($user->name) }}"
                                data-email="{{ strtolower($user->email) }}"
                                data-role="{{ strtolower($user->role) }}"
                            >

                                <td>
                                    {{ $index + 1 }}
                                </td>


                                <td>

                                    <div class="user-cell">

                                        <div class="user-small-avatar">

                                            @if($user->profile_image)

                                                <img src="{{ asset('storage/' . $user->profile_image) }}"
                                                     alt="Profile">

                                            @else

                                                {{ strtoupper(substr($user->name, 0, 1)) }}

                                            @endif

                                        </div>


                                        <div>

                                            <div class="user-name">
                                                {{ $user->name }}
                                            </div>

                                            <div class="user-email">
                                                User ID: #{{ $user->id }}
                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    {{ $user->email }}
                                </td>


                                <td>

                                    @if($user->role === 'student')

                                        <span class="role-badge role-student">
                                            Student
                                        </span>

                                    @elseif($user->role === 'teacher')

                                        <span class="role-badge role-teacher">
                                            Teacher
                                        </span>

                                    @else

                                        <span class="role-badge role-admin">
                                            Admin
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <span class="status-badge">
                                        ● Active
                                    </span>

                                </td>


                                <td>

                                    {{ $user->created_at
                                        ? $user->created_at->format('M d, Y')
                                        : 'N/A'
                                    }}

                                </td>


                                <td>

                                    <div class="actions">

                                        <!-- VIEW -->

                                        <button type="button"
                                                class="action-btn view-btn"
                                                onclick="viewUser(
                                                    '{{ addslashes($user->name) }}',
                                                    '{{ addslashes($user->email) }}',
                                                    '{{ $user->role }}'
                                                )"
                                                title="View">
                                            👁
                                        </button>


                                        <!-- EDIT -->

                                        <button type="button"
                                                class="action-btn edit-btn"
                                                onclick="editUser(
                                                    '{{ addslashes($user->name) }}',
                                                    '{{ addslashes($user->email) }}',
                                                    '{{ $user->role }}'
                                                )"
                                                title="Edit">
                                            ✏
                                        </button>


                                        <!-- DELETE -->

                                        @if($user->id !== auth()->id())

                                            <form action="{{ route('admin.users.delete', $user->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this user?');"
                                                  style="display:inline;">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                        class="action-btn delete-btn"
                                                        title="Delete">
                                                    🗑
                                                </button>

                                            </form>

                                        @endif

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7"
                                    style="text-align:center; padding:45px; color:#9ca3af;">

                                    👥 No users found.

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>


                <div class="table-footer">

                    <div id="resultCount">

                        Showing
                        <strong>{{ $users->count() }}</strong>
                        users

                    </div>


                    <div class="pagination">

                        <button class="page-btn active">
                            1
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>


<!-- =========================
     CREATE USER MODAL
========================== -->

<div class="modal-overlay"
     id="createUserModal">

    <div class="modal">

        <div class="modal-header">

            <div class="modal-title">

                <div class="modal-title-icon">
                    👤
                </div>

                <div>

                    <h3>
                        Create New User
                    </h3>

                    <p>
                        Add a student, teacher, or admin
                    </p>

                </div>

            </div>


            <button type="button"
                    class="close-modal"
                    onclick="closeCreateModal()">

                ✕

            </button>

        </div>


        <form action="{{ route('admin.users.store') }}"
              method="POST">

            @csrf


            <div class="modal-body">

                <div class="form-group">

                    <label>
                        Full Name
                    </label>

                    <input type="text"
                           name="name"
                           placeholder="Enter full name"
                           required>

                </div>


                <div class="form-group">

                    <label>
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           placeholder="Enter email address"
                           required>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               placeholder="Enter password"
                               required>

                    </div>


                    <div class="form-group">

                        <label>
                            Confirm Password
                        </label>

                        <input type="password"
                               name="password_confirmation"
                               placeholder="Confirm password"
                               required>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Role
                    </label>

                    <select name="role"
                            required>

                        <option value="">
                            Select a role
                        </option>

                        <option value="student">
                            Student
                        </option>

                        <option value="teacher">
                            Teacher
                        </option>

                        <option value="admin">
                            Admin
                        </option>

                    </select>

                </div>

            </div>


            <div class="modal-footer">

                <button type="button"
                        class="cancel-btn"
                        onclick="closeCreateModal()">

                    Cancel

                </button>


                <button type="submit"
                        class="submit-btn">

                    + Create User

                </button>

            </div>

        </form>

    </div>

</div>


<!-- =========================
     PROFILE MODAL
========================== -->

<div class="modal-overlay"
     id="profileModal">

    <div class="profile-modal-card">

        <div class="modal-header">

            <div class="modal-title">

                <div class="modal-title-icon">
                    👤
                </div>

                <div>

                    <h3>
                        Edit Profile
                    </h3>

                    <p>
                        Update your administrator profile
                    </p>

                </div>

            </div>


            <button type="button"
                    class="close-modal"
                    onclick="closeProfileModal()">

                ✕

            </button>

        </div>


        <form action="{{ route('profile.update') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            @method('PATCH')


            <div class="modal-body">

                <div class="profile-image-preview">

                    @if(auth()->user()->profile_image)

                        <img src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                             alt="Profile">

                    @else

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    @endif

                </div>


                <div class="form-group">

                    <label>
                        Name
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ auth()->user()->name }}"
                           required>

                </div>


                <div class="form-group">

                    <label>
                        Email
                    </label>

                    <input type="email"
                           value="{{ auth()->user()->email }}"
                           disabled>

                </div>


                <div class="form-group">

                    <label>
                        Profile Image
                    </label>

                    <input type="file"
                           name="profile_image"
                           accept="image/jpeg,image/png,image/webp">

                    <small style="display:block; margin-top:6px; color:#9ca3af; font-size:10px;">
                        JPG, PNG or WEBP — maximum 2MB
                    </small>

                </div>

            </div>


            <div class="modal-footer">

                <button type="button"
                        class="cancel-btn"
                        onclick="closeProfileModal()">

                    Cancel

                </button>


                <button type="submit"
                        class="submit-btn">

                    Update Profile

                </button>

            </div>

        </form>

    </div>

</div>


<!-- =========================
     JAVASCRIPT
========================== -->

<script>

    /* =========================
       CREATE MODAL
    ========================== */

    function openCreateModal() {
        document
            .getElementById('createUserModal')
            .classList.add('show');
    }

    function closeCreateModal() {
        document
            .getElementById('createUserModal')
            .classList.remove('show');
    }


    /* =========================
       PROFILE MODAL
    ========================== */

    function openProfileModal() {
        document
            .getElementById('profileModal')
            .classList.add('show');
    }

    function closeProfileModal() {
        document
            .getElementById('profileModal')
            .classList.remove('show');
    }


    /* =========================
       NOTIFICATION
    ========================== */

    document
        .getElementById('notificationButton')
        .addEventListener('click', function (event) {

            event.stopPropagation();

            document
                .getElementById('notificationMenu')
                .classList.toggle('show');

            document
                .getElementById('profileMenu')
                .classList.remove('show');

        });


    /* =========================
       PROFILE DROPDOWN
    ========================== */

    document
        .getElementById('profileButton')
        .addEventListener('click', function (event) {

            event.stopPropagation();

            document
                .getElementById('profileMenu')
                .classList.toggle('show');

            document
                .getElementById('notificationMenu')
                .classList.remove('show');

        });


    function closeProfileMenu() {

        document
            .getElementById('profileMenu')
            .classList.remove('show');

    }


    /* =========================
       OUTSIDE CLICK
    ========================== */

    document.addEventListener('click', function () {

        document
            .getElementById('notificationMenu')
            .classList.remove('show');

        document
            .getElementById('profileMenu')
            .classList.remove('show');

    });


    /* =========================
       CLOSE MODAL OUTSIDE
    ========================== */

    document
        .getElementById('createUserModal')
        .addEventListener('click', function (event) {

            if (event.target === this) {
                closeCreateModal();
            }

        });


    document
        .getElementById('profileModal')
        .addEventListener('click', function (event) {

            if (event.target === this) {
                closeProfileModal();
            }

        });


    /* =========================
       SEARCH
    ========================== */

    const searchInput =
        document.getElementById('userSearch');

    const roleFilter =
        document.getElementById('roleFilter');

    const rows =
        document.querySelectorAll('#usersTableBody tr');


    function filterUsers() {

        const search =
            searchInput.value.toLowerCase().trim();

        const role =
            roleFilter.value.toLowerCase();

        let visibleCount = 0;


        rows.forEach(function(row) {

            const name =
                row.dataset.name || '';

            const email =
                row.dataset.email || '';

            const userRole =
                row.dataset.role || '';


            const searchMatch =
                name.includes(search) ||
                email.includes(search);

            const roleMatch =
                role === 'all' ||
                userRole === role;


            if (searchMatch && roleMatch) {

                row.style.display = '';

                visibleCount++;

            } else {

                row.style.display = 'none';

            }

        });


        document.getElementById('resultCount').innerHTML =
            'Showing <strong>' +
            visibleCount +
            '</strong> users';

    }


    searchInput.addEventListener(
        'input',
        filterUsers
    );

    roleFilter.addEventListener(
        'change',
        filterUsers
    );


    /* =========================
       VIEW USER
    ========================== */

    function viewUser(name, email, role) {

        alert(
            'User Information\n\n' +
            'Name: ' + name + '\n' +
            'Email: ' + email + '\n' +
            'Role: ' + role
        );

    }


    /* =========================
       EDIT USER
    ========================== */

    function editUser(name, email, role) {

        alert(
            'Edit feature can be connected to an edit-user page later.\n\n' +
            'Name: ' + name + '\n' +
            'Email: ' + email + '\n' +
            'Role: ' + role
        );

    }


    /* =========================
       SIDEBAR MOBILE
    ========================== */

    function toggleSidebar() {

        document
            .getElementById('sidebar')
            .classList.toggle('open');

    }


    /* =========================
       ESCAPE KEY
    ========================== */

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeCreateModal();
            closeProfileModal();

            document
                .getElementById('notificationMenu')
                .classList.remove('show');

            document
                .getElementById('profileMenu')
                .classList.remove('show');

        }

    });

</script>

</body>
</html>