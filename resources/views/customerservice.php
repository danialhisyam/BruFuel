<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BruFuel</title>
        <!-- Add Google Fonts for Poppins -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0;
                background: #08073d;
                font-family: "Poppins", sans-serif;
            }
            header {
                background: #323155;
                color: #ffff;
                padding: 1rem;
                font-size: 1.1rem;
                display: flex;
                align-items: left;
                font-family: "Poppins", sans-serif;
            }
            .brufuel-title {
                font-weight: bold;
                color: #fff;
                font-size: 2rem;
                margin-right: 1rem;
                font-family: "Poppins", sans-serif;
            }
            .home-btn {
                background: #323155;
                color: #fff;
                border: none;
                padding: 0.5rem 1rem;
                border-radius: 4px;
                margin-right: 1rem;
                cursor: pointer;
                text-decoration: none;
                font-size: 1rem;
                transition: background 0.2s;
                font-family: "Poppins", sans-serif;
            }
            .home-btn:hover {
                background: #ece778;
            }
        </style>
    </head>
    <body>
        <header>
            <span class="brufuel-title">BruFuel</span>
            <a href="/" class="home-btn">Dashboard</a>
            <a href="/" class="home-btn">Order</a>
            <a href="/faq" class="home-btn">FAQ</a> 
        </header>
        <div style="text-align: center; padding: 2rem;">
            <h1 class="customerservice-title" style="color: #fff;">Customer Service</h1>
            <p style="color: #ddd; font-size: 16px; max-width: 600px; margin: 0 auto;">We're here to help! If you have any questions or need assistance, please reach out to our customer service team.</p>
            <br>
            <div style="background: #323155; color: #ffff; border-radius: 8px; padding: 1.5rem 2rem; width: 80%; max-width: 600px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); margin: 0 auto;">
                <p style="font-size: 16px; margin-bottom: 1rem;">You can contact us through the following methods:</p>
                <ul style="list-style-type: none; padding: 0; font-size: 16px;">
                    <li>Email: brufuel.bn@gmail.com <a href="mailto: brufuel@gmail.com"</a>
                    <li>WhatsApp: +673 1234567</li>
                    <li>Phone: +673 7654321</li>
                </ul>
            </div>
        </div>
    </body>
    <br>
<footer>
    <div style="text-align: center; padding: 1rem; background: #323155; color: #ffff; font-size: 14px;">
        &copy; 2025 BruFuel. All rights reserved.
    </div>
</footer>
</html>