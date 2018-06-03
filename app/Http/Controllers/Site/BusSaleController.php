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
                        ->orderBy('model')
                        ->orderBy('bodyModel')
                        ->orderBy('seatings')
                        ->orderBy('year')
                        ->findWhere(['active' => true])
                        ->all();

        return view('site.bus-sale.index', compact('buses'));
    }

    public function images($id)
    {
        $bus = $this->repository->find($id);
        $images = $bus->images()->orderBy('order')->get();

        return view('site.bus-sale.images', compact('images'));
    }
}
