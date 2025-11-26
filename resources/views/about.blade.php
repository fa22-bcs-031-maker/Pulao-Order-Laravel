<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SherAlam Khan Pulao Center</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            line-height: 1.6;
            color: #333;
        }

        /* Full Width Navbar */
        nav {
            background-color: #2c3e50;
            width: 100%;
            padding: 0 5%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .nav-brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 4px;
            transition: background 0.3s;
            font-weight: 500;
        }

        .nav-links a:hover {
            background-color: #34495e;
            color: #e74c3c;
        }

        /* Hero Section (Smaller for About Page) */
        .page-header {
            margin-top: 70px;
            background-color: #2c3e50;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .page-header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        /* Main Content Container */
        .main-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .content-section {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 28px;
            border-left: 5px solid #e74c3c;
            padding-left: 15px;
        }

        p {
            margin-bottom: 15px;
            font-size: 16px;
            color: #555;
        }

        .highlight-box {
            background-color: #fff9f9;
            border: 1px solid #ffecec;
            padding: 25px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .highlight-box h3 {
            color: #e74c3c;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        ul li:before {
            content: "✓";
            color: #e74c3c;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .menu-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #2c3e50;
        }

        .menu-item h4 {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .menu-price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 20px;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Full Width Navbar -->
    <nav>
        <div class="nav-brand">SherAlam Khan Pulao</div>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <h1>About Our Tradition</h1>
        <p>Serving Authentic Taste Since 1985</p>
    </div>

    <!-- Main Content -->
    <div class="main-container">
        
        <div class="content-section">
            <h2>Our Story</h2>
            <p>
                Welcome to <strong>SherAlam Khan Pulao Center</strong>, where tradition meets taste! 
                We have been serving authentic Pakistani pulao for generations, using traditional 
                recipes passed down through our family.
            </p>
            <p>
                Founded by SherAlam Khan, our restaurant has become a beloved destination for 
                pulao lovers across Pakistan. We use only the finest basmati rice and traditional 
                spices to create the perfect pulao every time.
            </p>
        </div>

        <div class="content-section">
            <h2>Our Menu</h2>
            <p>We keep it simple and perfect. Choose from our two signature serving sizes:</p>
            
            <div class="menu-grid">
                <div class="menu-item">
                    <h4>Single Plate</h4>
                    <div class="menu-price">Rs. 150</div>
                    <p>Perfect portion for one person, served with raita.</p>
                </div>
                <div class="menu-item">
                    <h4>Double Plate</h4>
                    <div class="menu-price">Rs. 250</div>
                    <p>Generous serving for a hearty appetite, served with raita and salad.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2>Why Choose Us?</h2>
            <div class="highlight-box">
                <h3>The SherAlam Promise</h3>
                <ul>
                    <li>Premium long-grain Basmati rice sourced from local farms</li>
                    <li>Authentic traditional cooking methods (Dum Pukht)</li>
                    <li>Fresh ingredients prepared daily</li>
                    <li>Affordable prices without compromising quality</li>
                    <li>Fast and friendly service</li>
                </ul>
            </div>
        </div>

        <div class="content-section">
            <h2>Visit Us</h2>
            <p>
                <strong>Location:</strong> Main Market, Lahore, Pakistan<br>
                <strong>Hours:</strong> 11:00 AM - 11:00 PM (Open Daily)<br>
                <strong>Phone:</strong> +92 300 1234567
            </p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 SherAlam Khan Pulao Center. All Rights Reserved.</p>
    </footer>
</body>
</html>
