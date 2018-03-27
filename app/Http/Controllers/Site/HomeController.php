<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index()
    {
        $quemSomos = $this->pageRepository->findWhere(['title' => 'Quem somos nós'])->first();
        $pages = $this->pageRepository->findWhere([
                                                    ['title', '<>', 'Quem somos nós']
                                                ]);

        return view('site.index', compact('quemSomos', 'pages'));
    }
}
