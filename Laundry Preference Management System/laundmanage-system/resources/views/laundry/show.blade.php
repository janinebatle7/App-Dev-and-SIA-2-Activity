<!DOCTYPE html>
<html>
<head>
    <title>Laundry Details</title>
    <style>
body {
    font-family: Arial;
    background: #f5f5f5;
    padding: 20px;
}
h2 {
    color: #333;
}
table {
    width: 100%;
    background: white;
}
button {
    background: #4CAF50;
    color: white;
    border: none;
    padding: 5px;
}
</style>
</head>
<body>

<h2>Laundry Details</h2>

<div class="card">
    <p><strong>Name:</strong> {{ $item->customer_name }}</p>
    <p><strong>Clothes:</strong> {{ $item->clothes_type }}</p>
    <p><strong>Detergent:</strong> {{ $item->detergent_type }}</p>
    <p><strong>Wash Type:</strong> {{ $item->wash_type }}</p>
    <p><strong>Drying:</strong> {{ $item->drying_method }}</p>
</div>

<br>
<a href="{{ route('laundry.index') }}">← Back</a>

</body>
</html>