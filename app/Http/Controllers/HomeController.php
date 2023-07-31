<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drug;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('drugs')
            ->orderBy('drugs_count', 'desc')
            ->take(5)
            ->get();

        $categoryDrugs = [];
        foreach ($categories as $category) {
            $categoryDrugs[] = [
                'category' => $category,
                'drugs' => Drug::where('category_id', $category->id)
                    ->with('category')
                    ->take(8)
                    ->get(),

            ];
        }

        return view('home.index')
            ->with([
                'categoryDrugs' => $categoryDrugs,
            ]);
    }

}
