<!DOCTYPE html>
<html>
<head>
    <title>Edit Laundry</title>
    <style>
        body { font-family: Arial; background:#f5f5f5; padding:20px; }
        input, select {
            width:100%;
            padding:8px;
            margin:5px 0;
        }
        button {
            background: red;
            color:white;
            padding:8px;
            border:none;
        }
    </style>
</head>
<body>

<h2>Edit Laundry Preference</h2>

<form action="{{ route('laundry.update', $item->id) }}" method="POST">
@csrf
@method('PUT')

<label>Name:</label>
<input type="text" name="customer_name" value="{{ $item->customer_name }}" required>

<label>Clothes Type:</label>
<input type="text" name="clothes_type" value="{{ $item->clothes_type }}">

<label>Detergent Type:</label>
<select name="detergent_type">
    <option {{ $item->detergent_type=='Powder'?'selected':'' }}>Powder</option>
    <option {{ $item->detergent_type=='Liquid'?'selected':'' }}>Liquid</option>
    <option {{ $item->detergent_type=='Eco-Friendly'?'selected':'' }}>Eco-Friendly</option>
</select>

<label>Wash Type:</label>
<select name="wash_type">
    <option {{ $item->wash_type=='Hand Wash'?'selected':'' }}>Hand Wash</option>
    <option {{ $item->wash_type=='Machine Wash'?'selected':'' }}>Machine Wash</option>
</select>

<label>Drying Method:</label>
<select name="drying_method">
    <option {{ $item->drying_method=='Air Dry'?'selected':'' }}>Air Dry</option>
    <option {{ $item->drying_method=='Machine Dry'?'selected':'' }}>Machine Dry</option>
</select>

<br><br>
<button type="submit">Update</button>

</form>

<br>
<a href="{{ route('laundry.index') }}">← Back</a>

</body>
</html>