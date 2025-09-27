<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetPilot | Driver Management</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#93C5FD',
                        dark: '#1E293B',
                        light: '#F8FAFC'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar {
            transition: all 0.3s ease;
        }
        .table-row:hover {
            background-color: rgba(59, 130, 246, 0.05);
        }
        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
        }
        .active {
            background-color: #D1FAE5;
            color: #065F46;
        }
        .inactive {
            background-color: #FEE2E2;
            color: #B91C1C;
        }
    </style>
</head>
<body class="bg-gray-50 h-full">
    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="sidebar bg-white w-64 border-r border-gray-200 flex-shrink-0 hidden md:block">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-primary flex items-center">
                    <i data-feather="truck" class="mr-2"></i> FleetPilot
                </h1>
            </div>
            <nav class="p-4">
                <div class="mb-8">
                    <p class="text-xs uppercase text-gray-500 font-semibold mb-2">Main</p>
                    <a href="#" class="flex items-center py-2 px-3 bg-primary bg-opacity-10 text-primary rounded-lg font-medium">
                        <i data-feather="home" class="mr-3"></i> Dashboard
                    </a>
                </div>
                <div class="mb-8">
                    <p class="text-xs uppercase text-gray-500 font-semibold mb-2">Management</p>
                    <a href="#" class="flex items-center py-2 px-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium mb-1">
                        <i data-feather="users" class="mr-3"></i> Drivers
                    </a>
                    <a href="#" class="flex items-center py-2 px-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium mb-1">
                        <i data-feather="truck" class="mr-3"></i> Vehicles
                    </a>
                    <a href="#" class="flex items-center py-2 px-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                        <i data-feather="map" class="mr-3"></i> Routes
                    </a>
                </div>
                <div class="mb-8">
                    <p class="text-xs uppercase text-gray-500 font-semibold mb-2">Reports</p>
                    <a href="#" class="flex items-center py-2 px-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium mb-1">
                        <i data-feather="activity" class="mr-3"></i> Analytics
                    </a>
                    <a href="#" class="flex items-center py-2 px-3 text-gray-700 hover:bg-gray-100 rounded-lg font-medium">
                        <i data-feather="file-text" class="mr-3"></i> Documents
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white border-b border-gray-200 py-4 px-6 flex items-center justify-between">
                <div class="flex items-center">
                    <button class="md:hidden mr-4 text-gray-600">
                        <i data-feather="menu"></i>
                    </button>
                    <h2 class="text-lg font-semibold text-gray-800">Driver Management</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                        <i data-feather="bell"></i>
                    </button>
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white font-medium">AD</div>
                        <span class="ml-2 text-sm font-medium hidden md:inline">Admin</span>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Header with Actions -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Drivers</h1>
                        <p class="text-gray-600">Manage your fleet drivers and their information</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <button class="flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition">
                            <i data-feather="plus" class="mr-2"></i> Add Driver
                        </button>
                        <button class="flex items-center px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                            <i data-feather="download" class="mr-2"></i> Export
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>All Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">License Type</label>
                            <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>All Types</option>
                                <option>Class A</option>
                                <option>Class B</option>
                                <option>Class C</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                            <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="flex items-end">
                            <button class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                                Apply Filters
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Driver Table -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Driver
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        License
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contact
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Driver 1 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                                <div class="text-sm text-gray-500">ID: DRV-001</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Class A</div>
                                        <div class="text-sm text-gray-500">Exp: 12/2025</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">john.smith@example.com</div>
                                        <div class="text-sm text-gray-500">(555) 123-4567</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge active">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 2 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/2" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                                <div class="text-sm text-gray-500">ID: DRV-002</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Class B</div>
                                        <div class="text-sm text-gray-500">Exp: 06/2024</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">sarah.j@example.com</div>
                                        <div class="text-sm text-gray-500">(555) 987-6543</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge active">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 3 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/3" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                                <div class="text-sm text-gray-500">ID: DRV-003</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Class C</div>
                                        <div class="text-sm text-gray-500">Exp: 03/2023</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">michael.b@example.com</div>
                                        <div class="text-sm text-gray-500">(555) 456-7890</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge inactive">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 4 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/4" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                                <div class="text-sm text-gray-500">ID: DRV-004</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Class A</div>
                                        <div class="text-sm text-gray-500">Exp: 09/2026</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">emily.d@example.com</div>
                                        <div class="text-sm text-gray-500">(555) 789-0123</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <
</body>
</html>