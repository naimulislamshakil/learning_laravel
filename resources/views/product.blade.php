<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
}

.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
    padding: 30px;
}

/* CARD */
.product-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.product-card:hover {
    transform: translateY(-8px);
}

/* IMAGE */
.product-image {
    height: 200px;
    overflow: hidden;
    background: #f1f1f1;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* INFO */
.product-info {
    padding: 15px;
}

.product-info h2 {
    font-size: 18px;
    margin-bottom: 8px;
}

.desc {
    font-size: 13px;
    color: #666;
    margin-bottom: 10px;
}

/* PRICE + STOCK */
.price-stock {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.price {
    color: #27ae60;
    font-weight: bold;
    font-size: 16px;
}

.stock {
    font-size: 12px;
    color: #888;
}

/* STATUS */
.status {
    display: inline-block;
    padding: 4px 10px;
    font-size: 12px;
    border-radius: 20px;
    margin-bottom: 10px;
}

.status.active {
    background: #eafaf1;
    color: #27ae60;
}

.status.inactive {
    background: #fdecea;
    color: #e74c3c;
}

/* BUTTON */
.btn {
    width: 100%;
    padding: 10px;
    border: none;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    opacity: 0.9;
}
    </style>
</head>
<body>

<h2 style="text-align:center;">Product List</h2>


<div class="container">

    @foreach ($products as $product)
        
            <div class="product-card">

        <div class="product-image">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        <div class="product-info">
            <h2>{{ $product->name }}</h2>

            <p class="desc">
                {{ $product->description }}
            </p>

            <div class="price-stock">
                <span class="price">৳ {{ $product->price }}</span>
                <span class="stock">
                    Stock: {{ $product->stock }}
                </span>
            </div>

            <span class="status {{ $product->status ? 'active' : 'inactive' }}">
                {{ $product->status ? 'Available' : 'Out of Stock' }}
            </span>

            <button class="btn">Buy Now</button>
        </div>

    </div>
        
    @endforeach

</div>



</body>
</html>