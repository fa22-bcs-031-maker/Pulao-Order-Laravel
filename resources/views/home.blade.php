<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SherAlam Khan Pulao Center</title>
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

        /* Hero Section with Image */
        .hero {
            margin-top: 70px; /* Offset for fixed navbar */
            width: 100%;
            height: 500px;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/pulao.png');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Main Content Container */
        .main-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
        }

        .order-section {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 800px;
        }

        .section-title {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 32px;
            border-bottom: 3px solid #e74c3c;
            display: inline-block;
            padding-bottom: 10px;
        }

        .success-message {
            background-color: #27ae60;
            color: white;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #e74c3c;
        }

        .plate-options {
            display: flex;
            gap: 20px;
        }

        .plate-option {
            flex: 1;
            border: 2px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
        }

        .plate-option:hover {
            border-color: #e74c3c;
            transform: translateY(-2px);
        }

        .plate-option.selected {
            border-color: #e74c3c;
            background-color: #fff9f9;
        }

        .plate-option input[type="radio"] {
            display: none;
        }

        .plate-option h3 {
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .price-tag {
            font-size: 20px;
            color: #e74c3c;
            font-weight: bold;
        }

        .submit-btn {
            background-color: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: background-color 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            background-color: #c0392b;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal h2 {
            color: #27ae60;
            margin-bottom: 15px;
        }

        .modal p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .close-btn {
            background-color: #2c3e50;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .close-btn:hover {
            background-color: #34495e;
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
   
    <nav>
        <div class="nav-brand">SherAlam Khan Pulao</div>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>
    </nav>

    <!-- Hero Section with Image -->
    <div class="hero">
        <h1>Authentic Pakistani Pulao</h1>
        <p>Taste the Tradition - Since 1985</p>
    </div>

    <!-- Main Content -->
    <div class="main-container">
        <div class="order-section">
            <div style="text-align: center;">
                <h2 class="section-title">Place Your Order</h2>
                <h3 style="color: #2c3e50; margin-bottom: 15px; font-weight: bold;">Sher Alam Khan Pulao Center<br/>Bata Chowk, Major Road, Attock</h3>
            </div>

            <form action="{{ route('order.place') }}" method="POST">
                @csrf

                <!-- Customer Name -->
                <div class="form-group">
                    <label for="customer_name">Full Name</label>
                    <input type="text" id="customer_name" name="customer_name" value="{{ old('customer_name') }}" placeholder="Enter your full name" required>
                    @error('customer_name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Delivery Address</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Enter your complete address" required>
                    @error('address')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Plate Type -->
                <div class="form-group">
                    <label>Select Portion Size</label>
                    <div class="plate-options">
                        <div class="plate-option" onclick="selectPlate('single')">
                            <input type="radio" id="single" name="plate_type" value="single" {{ old('plate_type') == 'single' ? 'checked' : '' }} required>
                            <h3>Single Plate</h3>
                            <div class="price-tag">Rs. 150</div>
                        </div>
                        <div class="plate-option" onclick="selectPlate('double')">
                            <input type="radio" id="double" name="plate_type" value="double" {{ old('plate_type') == 'double' ? 'checked' : '' }} required>
                            <h3>Double Plate</h3>
                            <div class="price-tag">Rs. 250</div>
                        </div>
                    </div>
                    @error('plate_type')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quantity -->
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="{{ old('quantity', 1) }}" required>
                    @error('quantity')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn">Confirm Order</button>
            </form>
        </div>
    </div>

    <!-- Order Confirmation Modal -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <div style="font-size: 50px; margin-bottom: 10px;"></div>
            <h2>Order Confirmed!</h2>
            <p>Based on your location, we will reach you in approximately <strong>15 minutes</strong>.</p>
            <button class="close-btn" onclick="closeModal()">Okay, Great!</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 SherAlam Khan Pulao Center. All Rights Reserved.</p>
    </footer>

    <script>
        function selectPlate(type) {
            document.querySelectorAll('.plate-option').forEach(option => {
                option.classList.remove('selected');
            });

            if (type === 'single') {
                document.getElementById('single').checked = true;
                document.querySelector('.plate-option:nth-child(1)').classList.add('selected');
            } else {
                document.getElementById('double').checked = true;
                document.querySelector('.plate-option:nth-child(2)').classList.add('selected');
            }
        }

        function closeModal() {
            document.getElementById('orderModal').style.display = 'none';
        }

        window.addEventListener('load', function() {
            // Handle plate selection
            if (document.getElementById('single').checked) {
                document.querySelector('.plate-option:nth-child(1)').classList.add('selected');
            } else if (document.getElementById('double').checked) {
                document.querySelector('.plate-option:nth-child(2)').classList.add('selected');
            }

            // Show modal if success session exists
            @if(session('success'))
                document.getElementById('orderModal').style.display = 'flex';
            @endif
        });
    </script>
</body>
</html>
