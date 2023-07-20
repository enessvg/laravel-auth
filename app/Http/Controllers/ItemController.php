<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('home')->with('status', 'Silme başarılı.');
    }
    public function ekleForm()
    {
        return view('ekle');
    }

    public function ekle(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->desc = $request->input('desc');
        $item->miktar = $request->input('miktar');
        $item->save();

        return redirect()->route('home')->with('status', 'Yeni ürün başarıyla eklendi.');
    }
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('edit', compact('item'));
    }

    public function update(Request $request, $id)
{
    $item = Item::findOrFail($id);

    // Store the original name before updating
    $originalName = $item->id;

    $item->name = $request->input('name');
    $item->desc = $request->input('desc');
    $item->miktar = $request->input('miktar');
    $item->save();

    return redirect()->route('home')->with('status', $originalName . ' ID numaralı ürün başarılı bir şekilde güncellendi.');
}

}
    