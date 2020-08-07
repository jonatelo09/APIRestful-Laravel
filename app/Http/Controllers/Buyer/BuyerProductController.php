<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class BuyerProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        // obtenemos una lista de transacciones de buyer, dentro de ella la lista de productos
        $product = $buyer->transactions()->with('product')->get()->pluck('product');

        //dd($product);

        return $this->showAll($product);
    }
}
