<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #2980b9;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #555;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Edit Product</h2>

    <form method="POST" action="/products/update/{{ $product->id }}">
        @csrf
       

        <!-- NAME -->
        <input type="text" name="name" value="{{ $product->name }}" required>

        <!-- PRICE -->
        <input type="text" name="price" value="{{ $product->price }}" required>

        <!-- STOCK -->
        <input type="number" name="stock" value="{{ $product->stock }}" required>

        <!-- DESCRIPTION -->
        <textarea name="description" rows="4">{{ $product->description }}</textarea>

        <!-- SUBMIT -->
        <button type="submit">Update Product</button>
    </form>

    <a href="/" class="back">← Back to Products</a>

</div>

</body>
</html>