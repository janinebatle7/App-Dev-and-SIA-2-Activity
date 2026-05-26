<!DOCTYPE html>
<html>
<head>
    <title>Laundry Preference Viewer</title>

    <!-- 📍 SIMPLE DESIGN -->
    <style>
        body {
            font-family: Arial;
            background: #f0f5f9;
            margin: 0;
        }
        header {
            background: #2c7be5;
            color: white;
            text-align: center;
            padding: 15px;
        }
        footer {
            background: #2c7be5;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .container {
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 260px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.2);
        }
        .btn {
            background: #2c7be5;
            color: white;
            padding: 8px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #1a5fd0;
        }
    </style>
</head>
<body>

<header>
    <h1>Laundry Preference Viewer</h1>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>© 2026 Laundry Preferences</p>
</footer>

</body>
</html>