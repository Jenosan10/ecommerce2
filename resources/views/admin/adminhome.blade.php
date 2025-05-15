<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .navbar {
            background: #ffffff;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 20px;
        }

        .dashboard-widgets {
            margin-top: 20px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .widget {
            background: white;
            padding: 20px;
            flex: 1;
            min-width: 200px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .widget h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .widget p {
            font-size: 24px;
            margin-top: 10px;
            color: #007bff;
        }
    </style>
</head>

<body>
    <style>
        #logoutBtn{
            position: absolute;
            border: none;
            color: white;
            background-color: transparent;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            padding-bottom: 15px;
        }
    </style>

    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Orders</a>
        <a href="#">Products</a>
        <a href="#">Settings</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
           <a href="#"> <input type="submit" id="logoutBtn" value="Logout"></a>
        </form>
    </div>

    <div class="content">
        <div class="navbar">
            <h1>Welcome, Admin</h1>
            <div>
                <span>🔔 Notifications</span>
            </div>
        </div>

        <div class="dashboard-widgets">
            <div class="widget">
                <h3>Total Users</h3>
                <p>1,024</p>
            </div>
            <div class="widget">
                <h3>Orders Today</h3>
                <p>56</p>
            </div>
            <div class="widget">
                <h3>Revenue</h3>
                <p>$8,540</p>
            </div>
        </div>
    </div>

</body>

</html>
