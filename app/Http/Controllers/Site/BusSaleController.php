<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\BusSaleRepository;
use Illuminate\Http\Request;

class BusSaleController extends Controller
{
    private $repository; 

    public function __construct(BusSaleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $buses = $this->repository
                        ->orderBy('manufacturer')
                        ->orderBy('bodyModel')
                        ->orderBy('seatings')
                        ->orderBy('year')
                        ->findWhere(['active' => true])
                        ->all();

        return view('site.bus-sale.index', compact('buses'));
    }
}
