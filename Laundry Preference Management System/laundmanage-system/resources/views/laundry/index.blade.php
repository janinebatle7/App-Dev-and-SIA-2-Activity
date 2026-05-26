<!DOCTYPE html>
<html>
<head>
    <title>Laundry List</title>
    <style>
        body { font-family: Arial; background:#f5f5f5; padding:20px; }
        table { width:100%; background:white; border-collapse: collapse; }
        th, td { padding:10px; border:1px solid #ddd; }
        a, button {
            padding:5px 10px;
            background:#4CAF50;
            color:white;
            text-decoration:none;
            border:none;
            cursor:pointer;
        }
        .delete-btn { background:red; }
    </style>
</head>
<body>

<h2>Laundry Preference List</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<a href="{{ route('laundry.create') }}">+ Add Laundry</a>

<table>
<tr>
    <th>Name</th>
    <th>Clothes</th>
    <th>Detergent</th>
    <th>Wash</th>
    <th>Drying</th>
    <th>Actions</th>
</tr>

@foreach($items as $item)
<tr>
    <td>{{ $item->customer_name }}</td>
    <td>{{ $item->clothes_type }}</td>
    <td>{{ $item->detergent_type }}</td>
    <td>{{ $item->wash_type }}</td>
    <td>{{ $item->drying_method }}</td>
    <td>
        <a href="{{ route('laundry.show', $item->id) }}">View</a>
        <a href="{{ route('laundry.edit', $item->id) }}">Edit</a>

        <form action="{{ route('laundry.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>