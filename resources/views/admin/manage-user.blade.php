<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BruFuel UserHub Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brufuel: {
                            primary: '#1a56db',
                            secondary: '#046c4e',
                            accent: '#f59e0b',
                            dark: '#1f2937'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .user-role-admin { @apply bg-brufuel-primary/10 text-brufuel-primary border-brufuel-primary }
        .user-role-dispatcher { @apply bg-purple-100 text-purple-800 border-purple-300 }
        .user-role-driver { @apply bg-blue-100 text-blue-800 border-blue-300 }
        .user-role-customer { @apply bg-green-100 text-green-800 border-green-300 }
        .user-status-active { @apply bg-green-100 text-green-800 }
        .user-status-inactive { @apply bg-red-100 text-red-800 }
        .user-status-pending { @apply bg-yellow-100 text-yellow-800 }
    </style>
</head>
<body class="h-full">
    <!-- Main Layout -->
    <div class="min-h-full">
        <!-- Navigation -->
        <nav class="bg-brufuel-dark">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="flex items-center">
                                <i data-feather="droplet" class="h-8 w-8 text-brufuel-accent"></i>
                                <span class="ml-2 text-white font-bold text-xl">BruFuel</span>
                                <span class="ml-2 bg-brufuel-accent px-2 py-0.5 rounded-md text-xs font-semibold text-brufuel-dark">ADMIN</span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-4">
                            <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                                <i data-feather="activity" class="h-4 w-4 mr-1"></i> Dashboard
                            </button>
                            <button class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                                <i data-feather="users" class="h-4 w-4 mr-1"></i> User Management
                            </button>
                            <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                                <i data-feather="truck" class="h-4 w-4 mr-1"></i> Fleet
                            </button>
                            <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex items-center">
                                <i data-feather="settings" class="h-4 w-4 mr-1"></i> Settings
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none">
                            <i data-feather="bell" class="h-6 w-6"></i>
                        </button>
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="http://static.photos/workspace/200x200/5" alt="Admin profile">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <h1 class="text-2xl font-bold leading-tight text-gray-900">User Management</h1>
                    <div class="mt-4 md:mt-0 flex items-center space-x-3">
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <i data-feather="search" class="h-4 w-4 text-gray-400"></i>
                            </div>
                            <input type="text" name="search" id="search" class="block w-full rounded-md border-gray-300 pl-10 focus:border-brufuel-primary focus:ring-brufuel-primary sm:text-sm" placeholder="Search users">
                        </div>
                        <button class="inline-flex items-center rounded-md border border-transparent bg-brufuel-primary px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i data-feather="plus" class="h-4 w-4 mr-2"></i> Add User
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="mb-6 bg-white shadow rounded-lg p-4">
                    <div class="flex flex-col md:flex-row md:items-center md:space-x-6 space-y-4 md:space-y-0">
                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                            <select id="role" name="role" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-brufuel-primary focus:outline-none focus:ring-brufuel-primary sm:text-sm">
                                <option>All Roles</option>
                                <option>Admin</option>
                                <option>Dispatcher</option>
                                <option>Driver</option>
                                <option>Customer</option>
                            </select>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select id="status" name="status" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-brufuel-primary focus:outline-none focus:ring-brufuel-primary sm:text-sm">
                                <option>All Statuses</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Pending</option>
                            </select>
                        </div>
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Last Login</label>
                            <select id="date" name="date" class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-brufuel-primary focus:outline-none focus:ring-brufuel-primary sm:text-sm">
                                <option>Any Time</option>
                                <option>Last 24 Hours</option>
                                <option>Last 7 Days</option>
                                <option>Last 30 Days</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brufuel-primary focus:ring-offset-2">
                                Apply Filters
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Bulk Actions -->
                <div class="mb-4 flex items-center">
                    <div class="flex items-center">
                        <input id="select-all" name="select-all" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                        <label for="select-all" class="ml-2 text-sm text-gray-700">Select all</label>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <select id="bulk-actions" name="bulk-actions" class="block w-full rounded-md border-gray-300 py-1 pl-3 pr-10 text-base focus:border-brufuel-primary focus:outline-none focus:ring-brufuel-primary sm:text-sm">
                            <option>Bulk Actions</option>
                            <option>Activate</option>
                            <option>Deactivate</option>
                            <option>Delete</option>
                            <option>Export</option>
                        </select>
                    </div>
                    <button class="ml-2 inline-flex items-center rounded-md border border-transparent bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-brufuel-primary focus:ring-offset-2">
                        Apply
                    </button>
                </div>

                <!-- Users Table -->
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
                    <div class="bg-white">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Last Login</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <!-- User 1 -->
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <input id="user-1" name="users[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                                                    <img class="h-10 w-10 rounded-full ml-4" src="http://static.photos/people/200x200/1" alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">Michael Foster</div>
                                                    <div class="text-gray-500">ID: FL-001</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">michael.foster@example.com</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium border user-role-admin">
                                                <i data-feather="shield" class="h-3 w-3 mr-1"></i> Admin
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium user-status-active">
                                                Active
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">2 hours ago</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-brufuel-primary hover:text-blue-700">
                                                    <i data-feather="edit" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <i data-feather="eye" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i data-feather="trash-2" class="h-4 w-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- User 2 -->
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <input id="user-2" name="users[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                                                    <img class="h-10 w-10 rounded-full ml-4" src="http://static.photos/people/200x200/2" alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">Sarah Johnson</div>
                                                    <div class="text-gray-500">ID: FL-002</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">sarah.johnson@example.com</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium border user-role-dispatcher">
                                                <i data-feather="radio" class="h-3 w-3 mr-1"></i> Dispatcher
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium user-status-active">
                                                Active
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">15 minutes ago</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-brufuel-primary hover:text-blue-700">
                                                    <i data-feather="edit" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <i data-feather="eye" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i data-feather="trash-2" class="h-4 w-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- User 3 -->
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <input id="user-3" name="users[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                                                    <img class="h-10 w-10 rounded-full ml-4" src="http://static.photos/people/200x200/3" alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">Robert Davis</div>
                                                    <div class="text-gray-500">ID: FL-003</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">robert.davis@example.com</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium border user-role-driver">
                                                <i data-feather="truck" class="h-3 w-3 mr-1"></i> Driver
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium user-status-inactive">
                                                Inactive
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">3 days ago</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-brufuel-primary hover:text-blue-700">
                                                    <i data-feather="edit" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <i data-feather="eye" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i data-feather="trash-2" class="h-4 w-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- User 4 -->
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <input id="user-4" name="users[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                                                    <img class="h-10 w-10 rounded-full ml-4" src="http://static.photos/people/200x200/4" alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">Emily Wilson</div>
                                                    <div class="text-gray-500">ID: FL-004</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">emily.wilson@example.com</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium border user-role-customer">
                                                <i data-feather="user" class="h-3 w-3 mr-1"></i> Customer
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium user-status-pending">
                                                Pending
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Never logged in</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-brufuel-primary hover:text-blue-700">
                                                    <i data-feather="edit" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <i data-feather="eye" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i data-feather="trash-2" class="h-4 w-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- User 5 -->
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <input id="user-5" name="users[]" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-brufuel-primary focus:ring-brufuel-primary">
                                                    <img class="h-10 w-10 rounded-full ml-4" src="http://static.photos/people/200x200/5" alt="User avatar">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">David Thompson</div>
                                                    <div class="text-gray-500">ID: FL-005</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">david.thompson@example.com</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium border user-role-driver">
                                                <i data-feather="truck" class="h-3 w-3 mr-1"></i> Driver
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium user-status-active">
                                                Active
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1 hour ago</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex items-center space-x-2">
                                                <button class="text-brufuel-primary hover:text-blue-700">
                                                    <i data-feather="edit" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <i data-feather="eye" class="h-4 w-4"></i>
                                                </button>
                                                <button class="text-red-500 hover:text-red-700">
                                                    <i data-feather="trash-2" class="h-4 w-4"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-6 flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                        <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">24</span> results
                            </p>
                        </div>
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                    <span class="sr-only">Previous</span>
                                    <i data-feather="chevron-left" class="h-5 w-5"></i>
                                </a>
                                <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-brufuel-primary bg-brufuel-primary/10 px-4 py-2 text-sm font-medium text-brufuel-primary focus:z-20">1</a>
                                <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                    <span class="sr-only">Next</span>
                                    <i data-feather="chevron-right" class="h-5 w-5"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script>
        feather.replace();
        // Sortable table functionality would be implemented here
        document.querySelectorAll('th').forEach(header => {
            header.addEventListener('click', () => {
                // Sorting logic would go here
                console.log(`Sorting by ${header.textContent}`);
            });
        });
    </script>
</body>
</html>