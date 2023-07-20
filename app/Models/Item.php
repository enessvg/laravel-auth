<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function index()
    {
    $items = Item::all(); // Fetch all items from the "items" table.
    return view('home', compact('items'));
    }
}
