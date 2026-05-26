<!DOCTYPE html>
<html>
<head>
    <title>Add Laundry</title>
    <style>
        body { font-family: Arial; background:#f5f5f5; padding:20px; }
        input, select {
            width:100%;
            padding:8px;
            margin:5px 0;
        }
        button {
            background:#4CAF50;
            color:white;
            padding:8px;
            border:none;
        }
    </style>
</head>
<body>

<h2>Add Laundry Preference</h2>

<form action="{{ route('laundry.store') }}" method="POST">
@csrf

<label>Name:</label>
<input type="text" name="customer_name" required>

<label>Clothes Type:</label>
<input type="text" name="clothes_type">

<label>Detergent Type:</label>
<select name="detergent_type">
    <option>Powder</option>
    <option>Liquid</option>
    <option>Eco-Friendly</option>
</select>

<label>Wash Type:</label>
<select name="wash_type">
    <option>Hand Wash</option>
    <option>Machine Wash</option>
</select>

<label>Drying Method:</label>
<select name="drying_method">
    <option>Air Dry</option>
    <option>Machine Dry</option>
</select>

<br><br>
<button type="submit">Save</button>

</form>

<br>
<a href="{{ route('laundry.index') }}">← Back</a>

</body>
</html>