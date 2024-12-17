<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use App\Http\Controllers\Controller;

class ProductAttributeController extends Controller
{
     // Menampilkan daftar atribut untuk sebuah produk
     public function index(Product $product)
     {
         $attributes = $product->attributes;
         return view('admin.attributes.index', compact('product', 'attributes'));
     }
 
     // Form untuk menambahkan atribut baru
     public function create(Product $product)
     {
         return view('admin.attributes.create', compact('product'));
     }
 
     // Menyimpan atribut baru
     public function store(Request $request, Product $product)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'value' => 'required|string|max:255',
         ]);
 
         $product->attributes()->create($request->only('name', 'value'));
 
         return redirect()->route('admin.attributes.index', $product)->with('success', 'Atribut berhasil ditambahkan.');
     }
 
     // Form untuk mengedit atribut
     public function edit(Product $product, ProductAttribute $attribute)
     {
         return view('admin.attributes.edit', compact('product', 'attribute'));
     }
 
     // Update atribut
     public function update(Request $request, Product $product, ProductAttribute $attribute)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'value' => 'required|string|max:255',
         ]);
 
         $attribute->update($request->only('name', 'value'));
 
         return redirect()->route('admin.attributes.index', $product)->with('success', 'Atribut berhasil diperbarui.');
     }
 
     // Hapus atribut
     public function destroy(Product $product, ProductAttribute $attribute)
     {
         $attribute->delete();
 
         return redirect()->route('admin.attributes.index', $product)->with('success', 'Atribut berhasil dihapus.');
     }
 
}
