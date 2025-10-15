<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trips - RoadRanger</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .tab-content { display: none; }
        .tab-content.active { display: block; animation: fadeIn 0.3s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white p-4 shadow-md">
            <div class="container mx-auto flex items-center">
                <!-- ✅ Back to Menu -->
                <a href="{{ route('driver.dashboard') }}" class="mr-4">
                    <i data-feather="arrow-left" class="w-5 h-5"></i>
                </a>
                <h1 class="text-xl font-bold">My Trips</h1>
            </div>
        </header>

        <main class="flex-grow container mx-auto p-4">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Tabs -->
                <div class="flex border-b">
                    <button onclick="openTab(event, 'pending')" class="flex-1 py-3 px-4 text-center font-medium text-blue-600 border-b-2 border-blue-600">
                        Pending
                    </button>
                    <button onclick="openTab(event, 'inprogress')" class="flex-1 py-3 px-4 text-center font-medium text-gray-500">
                        In Progress
                    </button>
                    <button onclick="openTab(event, 'cancelled')" class="flex-1 py-3 px-4 text-center font-medium text-gray-500">
                        Cancelled
                    </button>
                </div>

                <!-- Tab Contents -->
                <div id="pending" class="tab-content active p-4">
                    <div class="space-y-4">
                        <div class="p-4 border rounded-lg hover:shadow-md transition-all duration-200">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-gray-800">TRP-789456</h3>
                                    <p class="text-sm text-gray-600">From: Central Park</p>
                                    <p class="text-sm text-gray-600">To: Times Square</p>
                                </div>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full">Pending</span>
                            </div>
                            <div class="mt-3 flex items-center text-sm text-gray-500">
                                <i data-feather="clock" class="w-4 h-4 mr-1"></i>
                                <span>Today, 10:30 AM</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Accept</button>
                                <button class="flex-1 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition">Decline</button>
                            </div>
                        </div>

                        <div id="emptyPending" class="hidden text-center py-10">
                            <i data-feather="clock" class="w-12 h-12 mx-auto text-gray-300"></i>
                            <p class="mt-2 text-gray-500">No pending trips available</p>
                        </div>
                    </div>
                </div>

                <div id="inprogress" class="tab-content p-4">
                    <div class="space-y-4">
                        <div class="p-4 border rounded-lg hover:shadow-md transition-all duration-200">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-gray-800">TRP-123456</h3>
                                    <p class="text-sm text-gray-600">From: Airport Terminal</p>
                                    <p class="text-sm text-gray-600">To: Downtown Hotel</p>
                                </div>
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full">In Progress</span>
                            </div>
                            <div class="mt-3 flex items-center text-sm text-gray-500">
                                <i data-feather="clock" class="w-4 h-4 mr-1"></i>
                                <span>Today, 09:15 AM</span>
                            </div>
                            <div class="mt-3">
                                <button class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">View Details</button>
                            </div>
                        </div>

                        <div id="emptyInProgress" class="hidden text-center py-10">
                            <i data-feather="map" class="w-12 h-12 mx-auto text-gray-300"></i>
                            <p class="mt-2 text-gray-500">No trips in progress</p>
                        </div>
                    </div>
                </div>

                <div id="cancelled" class="tab-content p-4">
                    <div class="space-y-4">
                        <div class="p-4 border rounded-lg hover:shadow-md transition-all duration-200">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-gray-800">TRP-654321</h3>
                                    <p class="text-sm text-gray-600">From: Shopping Mall</p>
                                    <p class="text-sm text-gray-600">To: Residential Area</p>
                                </div>
                                <span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded-full">Cancelled</span>
                            </div>
                            <div class="mt-3 flex items-center text-sm text-gray-500">
                                <i data-feather="clock" class="w-4 h-4 mr-1"></i>
                                <span>Yesterday, 03:45 PM</span>
                            </div>
                            <div class="mt-2 text-xs text-gray-500">
                                <i data-feather="info" class="w-3 h-3 mr-1 inline"></i>
                                <span>Customer cancelled the trip</span>
                            </div>
                        </div>

                        <div id="emptyCancelled" class="text-center py-10">
                            <i data-feather="x-circle" class="w-12 h-12 mx-auto text-gray-300"></i>
                            <p class="mt-2 text-gray-500">No cancelled trips</p>
                        </div>
                    </div>
                </div>

                <!-- ✅ Return to Menu Button -->
                <div class="p-4 border-t">
                    <a href="{{ route('driver.dashboard') }}" 
                       class="block w-full py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition text-center">
                        ← Return to Menu
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        feather.replace();
        function openTab(evt, tabName) {
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }
            var tabButtons = document.querySelectorAll(".flex button");
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("text-blue-600", "border-blue-600");
                tabButtons[i].classList.add("text-gray-500");
            }
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.remove("text-gray-500");
            evt.currentTarget.classList.add("text-blue-600", "border-blue-600");
        }
    </script>
</body>
</html>
