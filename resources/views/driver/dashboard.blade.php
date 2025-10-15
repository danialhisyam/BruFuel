<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadRanger - Driver Portal</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Menu Page -->
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white p-4 shadow-md">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">RoadRanger</h1>
                <div class="flex items-center space-x-2">
                    <span class="text-sm">Driver ID: DRV12345</span>
                    <i data-feather="user" class="w-5 h-5"></i>
                </div>
            </div>
        </header>

        <main class="flex-grow container mx-auto p-4">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Driver Menu</h2>
                        <p class="text-gray-600">Welcome back, John Driver!</p>
                    </div>

                    <div class="space-y-4">
                        <!-- My Trips Card -->
                        <a href="trips.html" class="block">
                            <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-100 hover:shadow-md transition-all duration-300">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
                                    <i data-feather="map" class="w-6 h-6 text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-medium text-gray-900">My Trips</h3>
                                    <p class="text-sm text-gray-500">View your trip history and status</p>
                                </div>
                                <i data-feather="chevron-right" class="ml-auto w-5 h-5 text-gray-400"></i>
                            </div>
                        </a>

                        <!-- Transactions Card -->
                        <a href="transactions.html" class="block">
                            <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-teal-50 rounded-lg border border-green-100 hover:shadow-md transition-all duration-300">
                                <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
                                    <i data-feather="dollar-sign" class="w-6 h-6 text-green-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-medium text-gray-900">Transactions</h3>
                                    <p class="text-sm text-gray-500">View your earnings and payments</p>
                                </div>
                                <i data-feather="chevron-right" class="ml-auto w-5 h-5 text-gray-400"></i>
                            </div>
                        </a>

                        <!-- Log Out Card -->
                        <a href="login.html" class="block">
                            <div class="flex items-center p-4 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg border border-red-100 hover:shadow-md transition-all duration-300">
                                <div class="flex-shrink-0 bg-red-100 p-3 rounded-full">
                                    <i data-feather="log-out" class="w-6 h-6 text-red-600"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-medium text-gray-900">Log Out</h3>
                                    <p class="text-sm text-gray-500">Sign out from your account</p>
                                </div>
                                <i data-feather="chevron-right" class="ml-auto w-5 h-5 text-gray-400"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-800 text-white p-4 text-center text-sm">
            © 2023 RoadRanger - Driver Portal
        </footer>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>