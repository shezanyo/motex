<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Display all shop items
    public function index()
    {
        $items = Shop::all();
        return view('Shop.shop', compact('items'));
    }

    // Show the form for creating a new item
    public function create()
    {
        return view('Shop.create');
    }

    // Store a newly created item in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
        ]);

        Shop::create($request->all());

        return redirect()->route('shop.index')
            ->with('success', 'Item created successfully.');
    }

    // Show the form for editing the specified item
    public function edit($id)
    {
        $item = Shop::findOrFail($id);
        return view('shop.edit', compact('item'));
    }

    // Update the specified item in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
        ]);

        $item = Shop::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('shop.index')
            ->with('success', 'Item updated successfully.');
    }

    // Remove the specified item from storage
    public function destroy($id)
    {
        $item = Shop::findOrFail($id);
        $item->delete();

        return redirect()->route('shop.index')
            ->with('success', 'Item deleted successfully.');
    }
}