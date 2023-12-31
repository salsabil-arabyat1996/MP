
{{-- @extends('layouts.layout')
{{-- <style>

    /* Category End */
    </style> --}}
{{-- @section('content') --}}


 <style>
    /* .product-card {
        background-color: #fff;
        border: 1px solid #ccc;
        margin-bottom: 24px;
    }

    .product-card a {
        text-decoration: none;
    }

    .product-card .stock {
        position: absolute;
        color: #fff;
        border-radius: 4px;
        padding: 2px 12px;
        margin: 8px;
        font-size: 12px;
    }

    .product-card .product-card-img {
        max-height: 260px;
        overflow: hidden;
        border-bottom: 1px solid #ccc;
    }

    .product-card .product-card-img img {
        width: 100%;
    }

    .product-card .product-card-body {
        padding: 10px 10px;
    }

    .product-card .product-card-body .product-brand {
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 4px;
        color: #937979;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .product-card .product-card-body .product-name {
        font-size: 20px;
        font-weight: 600;
        color: #000;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .product-card .product-card-body .selling-price {
        font-size: 22px;
        color: #000;
        font-weight: 600;
        margin-right: 8px;
    }

    .product-card .product-card-body .original-price {
        font-size: 18px;
        color: #937979;
        font-weight: 400;
        text-decoration: line-through;
    }

    .product-card .product-card-body .btn1 {
        border: 1px solid;
        margin-right: 3px;
        border-radius: 0px;
        font-size: 12px;
        margin-top: 10px;
    } */
</style>
@extends('layouts.app')

@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Products</h4>
            </div>

            <livewire:frontend.product.index :products="$products" :category="$category"/>


        </div>
    </div>
</div>
{{-- @endsection  --}}
@endsection
