<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderFlow - Manage Orders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#6366f1',
                            600: '#4f46e5',
                        },
                        secondary: {
                            500: '#10b981',
                            600: '#059669',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .badge {
            @apply inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium;
        }
        .status-pending {
            @apply bg-yellow-100 text-yellow-800;
        }
        .status-processing {
            @apply bg-blue-100 text-blue-800;
        }
        .status-completed {
            @apply bg-green-100 text-green-800;
        }
        .status-cancelled {
            @apply bg-red-100 text-red-800;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .order-row:hover {
            @apply bg-gray-50 dark:bg-gray-800;
        }
        [data-tooltip] {
            position: relative;
        }
        [data-tooltip]:after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #1f2937;
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
        }
        [data-tooltip]:hover:after {
            opacity: 1;
            visibility: visible;
            bottom: calc(100% + 5px);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Manage Orders</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Track and manage all customer orders</p>
                    </div>
                    <div class="relative w-full md:w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="search" class="h-4 w-4 text-gray-400"></i>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md leading-5 bg-white dark:bg-gray-700 placeholder-gray-500 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" placeholder="Search orders...">
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Orders</p>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-white">1,248</p>
                            </div>
                            <div class="p-3 rounded-full bg-primary-100 dark:bg-primary-900/30">
                                <i data-feather="shopping-bag" class="h-6 w-6 text-primary-600 dark:text-primary-400"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Pending</p>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-white">156</p>
                            </div>
                            <div class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900/30">
                                <i data-feather="clock" class="h-6 w-6 text-yellow-600 dark:text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Processing</p>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-white">42</p>
                            </div>
                            <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900/30">
                                <i data-feather="rotate-cw" class="h-6 w-6 text-blue-600 dark:text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Completed</p>
                                <p class="text-2xl font-semibold text-gray-900 dark:text-white">1,050</p>
                            </div>
                            <div class="p-3 rounded-full bg-green-100 dark:bg-green-900/30">
                                <i data-feather="check-circle" class="h-6 w-6 text-green-600 dark:text-green-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Filters Sidebar -->
                    <aside class="w-full md:w-64 flex-shrink-0">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 sticky top-6">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Filters</h2>
                            
                            <div class="space-y-4">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Order Status</h3>
                                    <div class="space-y-2">
                                        <div class="flex items-center">
                                            <input id="filter-all" name="status" type="radio" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-600 rounded" checked>
                                            <label for="filter-all" class="ml-3 text-sm text-gray-700 dark:text-gray-300">All Orders</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-pending" name="status" type="radio" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 dark:border-gray-600 rounded">
                                            <label for="filter-pending" class="ml-3 text-sm text-gray-700 dark:text-gray-300">Pending</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-processing" name="status" type="radio" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 dark:border-gray-600 rounded">
                                            <label for="filter-processing" class="ml-3 text-sm text-gray-700 dark:text-gray-300">Processing</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-completed" name="status" type="radio" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 dark:border-gray-600 rounded">
                                            <label for="filter-completed" class="ml-3 text-sm text-gray-700 dark:text-gray-300">Completed</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-cancelled" name="status" type="radio" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 dark:border-gray-600 rounded">
                                            <label for="filter-cancelled" class="ml-3 text-sm text-gray-700 dark:text-gray-300">Cancelled</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900 dark:text-white mb-2">Date Range</h3>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div>
                                            <label for="start-date" class="block text-xs text-gray-500 dark:text-gray-400 mb-1">From</label>
                                            <input type="date" id="start-date" class="block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm bg-white dark:bg-gray-700">
                                        </div>
                                        <div>
                                            <label for="end-date" class="block text-xs text-gray-500 dark:text-gray-400 mb-1">To</label>
                                            <input type="date" id="end-date" class="block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm bg-white dark:bg-gray-700">
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Apply Filters
                                </button>
                                
                                <button type="button" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md shadow-sm text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </aside>

                    <!-- Orders Table -->
                    <div class="flex-1">
                        <div class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden">
                            <!-- Table Header -->
                            <div class="px-4 py-5 border-b border-gray-200 dark:border-gray-700 sm:px-6">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">Recent Orders</h3>
                                    <div class="mt-3 sm:mt-0">
                                        <div class="flex space-x-3">
                                            <div class="relative">
                                                <select id="bulk-actions" class="block appearance-none bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-200 py-2 pl-3 pr-8 rounded-md leading-tight focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-sm">
                                                    <option>Bulk Actions</option>
                                                    <option>Mark as Processing</option>
                                                    <option>Mark as Completed</option>
                                                    <option>Cancel Orders</option>
                                                    <option>Export Selected</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                                                    <i data-feather="chevron-down" class="h-4 w-4"></i>
                                                </div>
                                            </div>
                                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-secondary-600 hover:bg-secondary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
                                                <i data-feather="plus" class="-ml-1 mr-2 h-4 w-4"></i>
                                                New Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Table -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                <input type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-600 rounded">
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Order ID
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Customer
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Total
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                        <!-- Order 1 -->
                                        <tr class="order-row transition-all hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-600 rounded">
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-primary-600 hover:text-primary-800 dark:text-primary-400 dark:hover:text-primary-300">
                                                    <a href="#">#ORD-2023-001</a>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900 dark:text-white">John Smith</div>
                                                        <div class="text-sm text-gray-500 dark:text-gray-400">john@example.com</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900 dark:text-gray-100">Jan 12, 2023</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">$249.99</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="badge status-completed">Completed</span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="flex justify-end space-x-2">
                                                    <button data-tooltip="View" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                        <i data-feather="eye" class="h-5 w-5"></i>
                                                    </button>
                                                    <button data-tooltip="Edit" class="text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">
                                                        <i data-feather="edit" class="h-5 w
</body>
</html>