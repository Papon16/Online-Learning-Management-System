<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Online learning System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f1f5f9;
}
#dashboard{ display:none; }
.section{ display:none; }
.card{
    border-radius:12px;
}
</style>
</head>
<body>

<div class="container mt-5" id="loginPage">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-3">LMS Login</h3>

                    <input type="email" class="form-control mb-2" placeholder="Email">
                    <input type="password" class="form-control mb-3" placeholder="Password">

                    <select class="form-select mb-3" id="role">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>

                    <button class="btn btn-primary w-100" onclick="login()">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="dashboard">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand"> Online Learning  System</span>
    <span class="text-white" id="showRole"></span>
</nav>

<div class="container mt-4">

<div class="section" id="studentSection">
    <h4> Student Dashboard</h4>

    <div class="card p-3 mb-3">
        <h6>My Courses</h6>
        <ul>
            <li>Web Development</li>
            <li>Database Systems</li>
        </ul>
    </div>

    <div class="card p-3">
        <h6>Submit Assignment</h6>
        <input type="file" class="form-control mb-2">
        <button class="btn btn-success btn-sm">Submit</button>
    </div>
</div>

<div class="section" id="teacherSection">
    <h4>Teacher Dashboard</h4>

    <div class="card p-3 mb-3">
        <h6>Create Course</h6>
        <input type="text" class="form-control mb-2" placeholder="Course Name">
        <button class="btn btn-success btn-sm">Add Course</button>
    </div>

    <div class="card p-3">
        <h6>Create Assignment</h6>
        <input type="text" class="form-control mb-2" placeholder="Assignment Title">
        <button class="btn btn-primary btn-sm">Create</button>
    </div>
</div>


<div class="section" id="adminSection">
    <h4> Admin Dashboard</h4>

    <div class="card p-3 mb-3">
        <h6>User Management</h6>
        <ul>
            <li>Add / Remove Students</li>
            <li>Add / Remove Teachers</li>
        </ul>
    </div>

    <div class="card p-3">
        <h6>System Overview</h6>
        <p>Total Users: 120</p>
        <p>Total Courses: 15</p>
    </div>
</div>

<button class="btn btn-danger mt-4" onclick="logout()">Logout</button>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function login(){
    const role = document.getElementById("role").value;

    document.getElementById("loginPage").style.display="none";
    document.getElementById("dashboard").style.display="block";
    document.getElementById("showRole").innerText = role.toUpperCase();

    document.querySelectorAll(".section").forEach(s=>s.style.display="none");

    if(role==="student"){
        document.getElementById("studentSection").style.display="block";
    }
    if(role==="teacher"){
        document.getElementById("teacherSection").style.display="block";
    }
    if(role==="admin"){
        document.getElementById("adminSection").style.display="block";
    }
}

function logout(){
    location.reload();
}
</script>

</body>
</html>
