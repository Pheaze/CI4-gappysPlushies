<?php
// In real app, $products should come from the controller
$products = $products ?? [
    [
        'id' => 1,
        'name' => 'miku',
        'image' => 'https://preview.redd.it/someone-please-tell-me-the-name-or-brand-of-these-dumb-baby-v0-mdyzk434thyc1.jpeg?width=640&crop=smart&auto=webp&s=ff622154f2ed8a079928df3eb97e7b187996df3b',
        'description' => 'Miku Dayo Miku Dayo Miku Dayo.'
    ],
    [
        'id' => 2,
        'name' => 'kasane teto',
        'image' => 'https://ae01.alicdn.com/kf/Se391c4a6ec514b95aede38073aeacae68.jpg',
        'description' => 'Teto Word of the day.'
    ],
    [
        'id' => 3,
        'name' => 'astolfo',
        'image' => 'https://images.steamusercontent.com/ugc/1009311134773801268/E203DA9938236DBFAC6A286313092C352BA74A2F/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
        'description' => 'Soft, squishy, and maybe a little haunted.'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - Manage Products | Gappy's Plushies</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(90deg, #f8bbd0 0%, #fff 100%);
            color: #a4163a;
        }
        header {
            background: #fff;
            padding: 20px 40px;
            box-shadow: 0 2px 4px rgb(0 0 0 / 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: #a4163a;
        }
        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 24px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgb(248 187 208 / 0.25);
        }
        h1 {
            color: #a4163a;
            margin-bottom: 24px;
            font-size: 2rem;
            text-align: center;
        }
        .actions {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 18px;
        }
        .btn {
            background: #f8bbd0;
            color: #a4163a;
            border: none;
            border-radius: 24px;
            padding: 10px 22px;
            font-weight: 600;
            cursor: pointer;
            margin-left: 10px;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #fff;
            color: #e91e63;
            border: 1px solid #f8bbd0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            padding: 14px 10px;
            text-align: left;
        }
        th {
            background: #f8bbd0;
            color: #a4163a;
            font-weight: 700;
        }
        tr:nth-child(even) {
            background: #fff5fa;
        }
        tr:hover {
            background: #f8bbd0;
        }
        .product-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #f8bbd0;
            background: #fff;
        }
        .product-name {
            font-weight: 600;
            color: #a4163a;
        }
        .product-desc {
            color: #4a4a4a;
            font-size: 0.95rem;
        }
        .table-actions button {
            margin-right: 6px;
        }
        @media (max-width: 700px) {
            main { padding: 8px; }
            table, thead, tbody, th, td, tr { display: block; }
            th { position: absolute; left: -9999px; }
            td { border: none; position: relative; padding-left: 50%; }
            td:before {
                position: absolute;
                left: 10px;
                top: 14px;
                white-space: nowrap;
                font-weight: 700;
                color: #a4163a;
            }
            td:nth-child(1):before { content: "Image"; }
            td:nth-child(2):before { content: "Name"; }
            td:nth-child(3):before { content: "Description"; }
            td:nth-child(4):before { content: "Actions"; }
        }
    </style>
</head>
<body>
   <?=view ('components/adminHeader')?>
    <main>
        <h1>Manage Products</h1>
        <div class="actions">
            <button class="btn" onclick="alert('Show add product form')">+ Add Product</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th style="width:120px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td>
                        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-img" />
                    </td>
                    <td class="product-name"><?= htmlspecialchars($product['name']) ?></td>
                    <td class="product-desc"><?= htmlspecialchars($product['description']) ?></td>
                    <td class="table-actions">
                        <button class="btn" onclick="alert('Edit product ID: <?= $product['id'] ?>')">Edit</button>
                        <button class="btn" style="background:#fff;color:#e91e63;border:1px solid #f8bbd0;" onclick="if(confirm('Delete this product?')){alert('Deleted product ID: <?= $product['id'] ?>')}">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
