<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $repository; 

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository
                        ->orderBy('name')
                        ->findWhere([['quantity', '>', '0']])
                        ->all();

        return view('site.catalog.index', compact('products'));
    }
}
