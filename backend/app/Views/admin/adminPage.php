
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gappy's Plushies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="min-h-screen bg-gray-50">
    <!-- Dashboard Header -->
    <header class="bg-pink-600 shadow-lg py-4"></header>
        <div class="container mx-auto px-4"></div>
            <h1 class="text-2xl font-bold text-white">Gappy's Plushies Admin</h1>
        </div>
    </header>

    <!-- Admin Navigation -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Navigation Links -->
                <div class="flex items-center space-x-4"></div>
                    <a href="<?= site_url('admin/dashboard') ?>" class="text-pink-600 hover:text-pink-800 px-3 py-2 rounded-md font-medium">
                        Dashboard
                    </a>
                    <a href="<?= site_url('admin/products') ?>" class="text-gray-600 hover:text-pink-600 px-3 py-2 rounded-md font-medium">
                        Products
                    </a>
                    <a href="<?= site_url('admin/orders') ?>" class="text-gray-600 hover:text-pink-600 px-3 py-2 rounded-md font-medium">
                        Orders
                    </a>
                    <a href="<?= site_url('admin/customers') ?>" class="text-gray-600 hover:text-pink-600 px-3 py-2 rounded-md font-medium">
                        Customers
                    </a>
                </div>

                <!-- Admin Actions -->
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, Admin</span>
                    <a href="<?= site_url('logout') ?>" class="text-gray-600 hover:text-pink-600"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"></svg>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-pink-500"></div>
                <h3 class="text-gray-500 text-sm font-medium">Today's Orders</h3>
                <p class="text-3xl font-bold text-gray-700">24</p>
                <p class="text-green-600 text-sm mt-2">↑ 15% from yesterday</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-purple-500"></div>
                <h3 class="text-gray-500 text-sm font-medium">Daily Revenue</h3>
                <p class="text-3xl font-bold text-gray-700">₱12,450</p>
                <p class="text-green-600 text-sm mt-2">↑ 8% from yesterday</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-pink-400">
                <h3 class="text-gray-500 text-sm font-medium">Active Products</h3>
                <p class="text-3xl font-bold text-gray-700">86</p>
                <p class="text-yellow-600 text-sm mt-2">→ 2 new today</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-purple-400">
                <h3 class="text-gray-500 text-sm font-medium">New Customers</h3>
                <p class="text-3xl font-bold text-gray-700">12</p>
                <p class="text-green-600 text-sm mt-2">↑ 4 today</p>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Recent Orders -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Recent Orders</h2>
                    <a href="<?= site_url('admin/orders') ?>" class="text-pink-600 hover:text-pink-700 text-sm">View all</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Customer</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50"></tr>
                                <td class="px-4 py-3 text-sm text-gray-900">#1234</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Maria Santos</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Delivered</span>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-900">₱2,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-2 gap-4"></div>
                    <a href="<?= site_url('admin/products/create') ?>" 
                       class="flex items-center p-4 bg-pink-50 rounded-lg hover:bg-pink-100 transition-colors">
                        <span class="text-pink-600 font-medium">Add Product</span>
                    </a>
                    <a href="<?= site_url('admin/orders/pending') ?>" 
                       class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors"></a>
                        <span class="text-purple-600 font-medium">Pending Orders</span>
                    </a>
                    <a href="<?= site_url('admin/inventory') ?>" 
                       class="flex items-center p-4 bg-pink-50 rounded-lg hover:bg-pink-100 transition-colors"></a>
                        <span class="text-pink-600 font-medium">Update Stock</span>
                    </a>
                    <a href="<?= site_url('admin/reports') ?>" 
                       class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                        <span class="text-purple-600 font-medium">Sales Report</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
