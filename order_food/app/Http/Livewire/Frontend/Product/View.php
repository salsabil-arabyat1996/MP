<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;

class View extends Component
{
    public $category;
    public $product;
    public $quantityCount;

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
        $this->quantityCount = 1;
    }

    public function incrementQuantity()
    {
        $this->quantityCount++;
    }

    public function decrementQuantity()
    {
        $this->quantityCount = max(1, $this->quantityCount - 1);
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product,
        ]);
    }
}
