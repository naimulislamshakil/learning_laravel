<!DOCTYPE html>
<html>
<head>
    <title>product Info</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            display: flex;
            gap: 30px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .image-box img {
            width: 100%;
            border-radius: 12px;
        }

        .image-box {
            flex: 1;
        }

        .info-box {
            flex: 1;
        }

        h1 {
            margin-bottom: 10px;
        }

        .price {
            font-size: 24px;
            color: green;
            margin: 10px 0;
            font-weight: bold;
        }

        .desc {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .active {
            background: #eafaf1;
            color: #27ae60;
        }

        .inactive {
            background: #fdecea;
            color: #e74c3c;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            margin-top: 10px;
        }

        .edit-btn {
            background: #3498db;
        }

        .edit-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

  

<div class="container">

    

    <!-- INFO -->
    <div class="info-box">

        <span class="badge {{ $product->status ? 'active' : 'inactive' }}">
            {{ $product->status ? 'Available' : 'Out of Stock' }}
        </span>

        <h1>{{ $product->name }}</h1>

        <div class="price">
            ${{ $product->price }}
        </div>

        <p class="desc">
            {{ $product->description }}
        </p>

        <p><b>Stock:</b> {{ $product->stock }}</p>

        <!-- EDIT BUTTON -->
        <a href="{{ url('/product/update/' . $product->id) }}" class="btn edit-btn">
            Edit product
        </a>

    </div>

</div>

</body>
</html>