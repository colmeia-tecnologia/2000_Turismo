<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\UrlController;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $repository;

    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($title)
    {
        $title = UrlController::translateFriendlyUrl($title);

        if($title == 'Venda de Peças')
            return redirect()->route('catalogo');
        if($title == 'Compra/Venda de ônibus')
            return redirect()->route('venda-onibus');

        $page = $this->repository->findWhere(['title' => $title])->first();

        return view('site.page.index', compact('page'));
    }
}
