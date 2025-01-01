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
            'image' => 'required|image|mimes:jpg,png|max:2048'
        ]);

        $imagePath = $request->file('image')->store('assets/images/productCar', 'public');

        Shop::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('shop.index')
            ->with('success', 'Item created successfully.');
    }

    // Show the form for editing the specified item
    public function edit($id)
    {
        $item = Shop::findOrFail($id);
        return view('Shop.update', compact('item'));
    }

    // Update the specified item in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'price' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpg,png|max:2048',
        ]);

        $item = Shop::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('assets/images/productCar', 'public');
            $item->image = $imagePath;
        }

        $item->update($request->except('image'));

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
