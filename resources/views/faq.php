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
                background: #0a2540;
                font-family: "Poppins", sans-serif;
            }
            header {
                background: #e3e3e0;
                color: #1b1b18;
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
                background: #1b1b18;
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
                background: #0a2540;
            }
            .faq-title {
                font-weight: bold;
                color: #1b1b18;
                font-size: 1.5rem;
                margin-bottom: 1rem;
                font-family: "Poppins", sans-serif;
            }
            p, ul, li, div, strong, span, h1 {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <span class="brufuel-title">BruFuel</span>
            <a href="{{ route('home') }}" class="home-btn">Home</a>
            <a href="{{ route('faq') }}" class="home-btn">FAQ</a>
        </header>
        <div style="background: #0a2540; min-height: 100vh;">
        <div style="text-align: center; padding: 2rem; color: #fff;">
            <h1 class="faq-title" style="color: #fff;">Frequently Asked Questions (FAQ)</h1>
        </div>
        <div style="display: flex; flex-direction: column; gap: 1.5rem; align-items: center; padding-top: 2rem;">
            <div style="background: #e3e3e0; color: #333; border-radius: 8px; padding: 1.5rem 2rem; width: 80%; max-width: 600px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
                <strong>FAQ:</strong>
                <span style="font-weight: bold; font-size: 20px;">What type of fuel does BruFuel provide?</span>
                <div style="font-size: 16px; margin-top: 0.5rem;">We provide the following Shell fuels:
                    <ul>
                        <li>Shell V-Power RON 97</li>
                        <li>Shell Premium RON 97</li>
                        <li>Shell Regular RON 85</li>
                        <li>Shell Diesel</li>
                        <li>Shell V-Power Diesel</li>
                    </ul>
                </div>
            </div>
            <div style="background: #e3e3e0; color: #333; border-radius: 8px; padding: 1.5rem 2rem; width: 80%; max-width: 600px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
                <strong>FAQ:</strong>
                <span style="font-weight: bold; font-size: 20px;">How long does it take for fuel to arrive after placing an order?</span>
                <div style="font-size: 16px; margin-top: 0.5rem;">Delivery times may vary based on your location and current demand, but we strive to deliver fuel within 20 to 40 minutes upon receiving your order.</div>
            </div>
            <div style="background: #e3e3e0; color: #333; border-radius: 8px; padding: 1.5rem 2rem; width: 80%; max-width: 600px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
                <strong>FAQ:</strong>
                <span style="font-weight: bold; font-size: 20px;">Is there a delivery fee?</span>
            </div>
        </div>
    </div>
    </body>
</html>
