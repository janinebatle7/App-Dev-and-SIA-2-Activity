<?php

namespace App\Http\Controllers;

use App\Models\LaundryItem;
use Illuminate\Http\Request;

class LaundryItemController extends Controller
{
    public function index()
    {
        $items = LaundryItem::all();
        return view('laundry.index', compact('items'));
    }

    public function create()
    {
        return view('laundry.create');
    }

    public function store(Request $request)
    {
        LaundryItem::create($request->all());
        return redirect()->route('laundry.index')
            ->with('success', 'Laundry added successfully!');
    }

    public function show($id)
    {
        $item = LaundryItem::findOrFail($id);
        return view('laundry.show', compact('item'));
    }

    public function edit($id)
    {
        $item = LaundryItem::findOrFail($id);
        return view('laundry.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = LaundryItem::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('laundry.index')
            ->with('success', 'Laundry updated successfully!');
    }

    public function destroy($id)
    {
        $item = LaundryItem::findOrFail($id);
        $item->delete();

        return redirect()->route('laundry.index')
            ->with('success', 'Laundry deleted successfully!');
    }
}