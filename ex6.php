<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <style>
        .product-container {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }
        .product-image img {
            width: 300px;
            height: auto;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }
        .product-price {
            font-size: 28px;
            font-weight: bold;
            color: #000;
        }
        .original-price {
            font-size: 20px;
            text-decoration: line-through;
            color: #999;
            margin-left: 10px;
        }
        .discount {
            font-size: 20px;
            color: red;
            margin-left: 10px;
        }
        .source {
            margin-top: 20px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

<div class="product-container">
    <div class="product-image">
        <img src="Canon.jpg" alt="Máy Ảnh Sony RX100 IV">
    </div>
    <div class="product-title">Máy Ảnh Sony RX100 IV (Chính Hãng)</div>
    <div class="product-price">19.090.000 ₫ 
        <span class="original-price">22.990.000 ₫</span> 
        <span class="discount">-17%</span>
    </div>
    <div class="source">Source: Product of Sony</div>
</div>

</body>
</html>
