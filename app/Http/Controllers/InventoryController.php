<?php

namespace App\Http\Controllers;
use DB;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
    	$inventories = Inventory::all();
    	return view('welcome')->with('inventories', $inventories);
    }
    public function store()
    {
        $inventory = new Inventory;
        $inventory->name = request()->name;
        $inventory->quantity = request()->quantity;
        $inventory->category = request()->category;
        $inventory->save();

    	return $inventory;
    }
    public function delete()
    {
        $inventory->delete();
        return "Task was deleted successfully";
    }    
}
