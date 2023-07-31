<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drug;
use App\Models\Hard_drugs;
use App\Models\Liquid;
use App\Models\Soft_drugs;
use Illuminate\Http\Request;

class DrugsController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
   {
      $request->validate([
           'categories' => 'nullable|array|min:0',
           'categories.*' => 'nullable|integer|min:1',
           'hard_drugs' => 'nullable|array|min:0',
           'hard_drugs.*' => 'nullable|integer|min:1',
           'soft_drugs' => 'nullable|array|min:0',
           'soft_drugs.*' => 'nullable|integer|min:1',
           'liquids' => 'nullable|array|min:0',
           'liquids.*' => 'nullable|integer|min:1',
       ]);

       $f_categories = $request->has('categories') ? $request->categories : [];
       $f_hard_drugs = $request->has('hard_drugs') ? $request->hard_drugs : [];
       $f_soft_drugs = $request->has('soft_drugs') ? $request->soft_drugs : [];
       $f_liquids = $request->has('liquids') ? $request->liquids : [];



       $drugs= Drug::when($f_categories, function ($query) use ($f_categories) {
        $query->whereIn('category_id', $f_categories);
   })
           ->when($f_hard_drugs, function ($query) use ($f_hard_drugs) {
               $query->whereIn('hard_drug_id', $f_hard_drugs);
           })
           ->when($f_soft_drugs, function ($query) use ($f_soft_drugs) {
               $query->whereIn('soft_drug_id', $f_soft_drugs);
           })
           ->when($f_liquids, function ($query) use ($f_liquids) {
               $query->where('liquid_id', $f_liquids);
           })
           ->with('category', 'hard_drug', 'soft_drug', 'liquid');





       $categories = Category::orderBy('name')
           ->get();
       $hard_drugs = Hard_drugs::orderBy('name')
           ->get();
       $soft_drugs = Soft_drugs::orderBy('name')
           ->get();
       $liquid = Liquid::orderBy('name')
           ->get();


       return view('drugs.index')
           ->with([
               'drugs' => $drugs,
               'categories' => $categories,
               'hard_drugs' => $hard_drugs,
               'soft_drugs' => $soft_drugs,
               'liquids' => $liquid,
               'f_categories' => $f_categories,
               'f_hard_drugs' => $f_hard_drugs,
               'f_soft_drugs' => $f_soft_drugs,
               'f_liquids' => $f_liquids,
           ]);

   }

    public function show($id){
        $drug = Drug::find($id);
        return view('drugs.show',['drug' => $drug]);
    }


   /*public function filter(Request $request)
   {

       return $request;

           $drugs = Drug::whereIn('category_id', $request->category)->get();
       return $drugs;
   }*/


}
