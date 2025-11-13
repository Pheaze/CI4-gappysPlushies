<!-- app/Views/admin/ordersPage.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Orders Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/3.3.3/tailwind.min.css" rel="stylesheet">
</head>
<?=view ('components/header')?>
<body class="bg-[#F8BBD0] min-h-screen">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-white mb-6">Orders Management</h1>
        <div class="bg-white rounded-lg shadow p-6">
            <table class="min-w-full divide-y divide-[#F8BBD0]">
                <thead class="bg-[#F8BBD0]">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Order #</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Customer</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Product</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Quantity</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Status</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Ordered At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($orders)): ?>
                        <?php foreach ($orders as $order): ?>
                            <tr class="border-b last:border-0 hover:bg-[#F8BBD0]/20">
                                <td class="px-4 py-2"><?= esc($order['id']) ?></td>
                                <td class="px-4 py-2"><?= esc($order['customer_name']) ?></td>
                                <td class="px-4 py-2"><?= esc($order['product_name']) ?></td>
                                <td class="px-4 py-2"><?= esc($order['quantity']) ?></td>
                                <td class="px-4 py-2">
                                    <span class="inline-block px-2 py-1 rounded text-xs font-semibold
                                        <?= $order['status'] === 'pending' ? 'bg-[#F8BBD0] text-white' : 'bg-green-100 text-green-800' ?>">
                                        <?= esc(ucfirst($order['status'])) ?>
                                    </span>
                                </td>
                                <td class="px-4 py-2"><?= esc($order['ordered_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="text-center py-8 text-[#F8BBD0] font-semibold">
                                No orders found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>