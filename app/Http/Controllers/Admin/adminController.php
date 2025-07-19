<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index() {
        $bus = DB::table('bus')->get();

        return view('pages.bus.index', [
            "bus" => $bus,
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('pages.bus.create', [
            "categories" => $categories,
        ]);
    }


    public function save(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:3",
            "price" => "required",
            "category_id" => "required",
        ]);

        Bus::create($validated);

        return redirect('/bus');
    }

    public function delete($id)
    {
        $bus = Bus::where('id', $id);
        $bus->delete();

        return redirect('/bus');
    }


}

