<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: auto;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0069d9;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Edit Laundry Request</h2>

<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Customer Name:</label>
    <input type="text" name="customer_name" value="{{ $item->customer_name }}" required>

    <label>Preferred Scent:</label>
    <input type="text" name="preferred_scent" value="{{ $item->preferred_scent }}" required>

    <label>Service Type:</label>
    <input type="text" name="service_type" value="{{ $item->service_type }}" required>

    <button type="submit">Update</button>
</form>

</div>

</body>
</html>