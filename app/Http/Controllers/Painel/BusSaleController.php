<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\BusSaleRequest;
use App\Models\BusImage;
use App\Repositories\BusSaleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class BusSaleController extends Controller
{
    private $repository;

    public function __construct(BusSaleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view-bus_sales'))
            return redirect('/');

        $busSales = $this->repository->paginate();

        return view('painel.bus_sales.index', compact('busSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-bus_sales'))
            return redirect('/');

        return view('painel.bus_sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusSaleRequest $request)
    {
        if(Gate::denies('create-bus_sales'))
            return redirect('/');

        $data = $request->all();

        $imgs = $data['images'];
        $images = array();

        $bus = $this->repository->create($data);

        foreach ($imgs as $img) {
            $imageModel = new BusImage($img);

            $imageModel->bus()->associate($bus);

            $images[] = $imageModel;
        }

        $bus->images()->saveMany($images);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['Ônibus salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect('/bus_sales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('update-bus_sales'))
            return redirect('/');

        $busSale = $this->repository->find($id);

        return view('painel.bus_sales.edit', compact('busSale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusSaleRequest $request, $id)
    {
        if(Gate::denies('update-bus_sales'))
            return redirect('/');

        $data = $request->all();

        $imgs = $data['images'];
        $images = array();

        $bus = $this->repository->update($data, $id);

        $bus->images()->delete();

        foreach ($imgs as $img) {
            $imageModel = new BusImage($img);

            $imageModel->bus()->associate($bus);

            $images[] = $imageModel;
        }

        $bus->images()->saveMany($images);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['Ônibus alterado com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect()->route('bus_sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-bus_sales'))
            return redirect('/');

        $this->repository->delete($id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('bus_sales.index');
    }
}
