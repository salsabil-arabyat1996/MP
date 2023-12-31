<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function categories()
    {
        // $categories =Category::where('status','0')->get();
        $categories =Category::all();

        return view('frontend.collections.category.index', compact('categories'));
    }


    public function products($category_name)
    {
        $category = Category::where('name', $category_name)->first();

        if ($category) {
            $products = $category->products()->get();
            return view('frontend.collections.products.index', compact('products', 'category'));
        } else {
            return redirect()->back();
        }
    }

    public function productsview(string $category_name, string $product_name)
    {
        $category = Category::where('name', $category_name)->first();

        if ($category) {
            $product = $category->products()->where('name',$product_name)->where('status','0')->first();
            if($product)
            {
    return view('frontend.collections.products.view', compact('product', 'category'));

      } else {
    return redirect()->back();
       }
       } else {
            return redirect()->back();
        }
    }


}
