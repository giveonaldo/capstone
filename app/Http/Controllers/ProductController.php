<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $petani = Auth::user();
        $product = $petani->products()->paginate(10);
        
        return view('products.index', [
            'petani' => $petani,
            'products' => $product
        ]);
    }

    public function create()
    {
        $petani = Auth::user();
        return view('products.create', compact('petani'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product' => ['required'],
            'quantity' => ['required'],
            'price' => ['required']
        ]);

        Product::create([
            'product' => $validated['product'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'user_id' => Auth::id(),
        ]);

        return redirect('/petani/products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $product->delete();

        return redirect('/petani/products');
    }
}
