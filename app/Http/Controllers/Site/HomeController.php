<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;
use App\Repositories\PageRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    private $pageRepository;
    private $bannerRepository;

    public function __construct(
                                    PageRepository $pageRepository,
                                    BannerRepository $bannerRepository
                                )
    {
        $this->pageRepository = $pageRepository;
        $this->bannerRepository = $bannerRepository;

        $this->getBanners();
    }

    public function index()
    {
        $banners = Cache::get('banners');

        $quemSomos = $this->pageRepository->findWhere(['title' => 'Quem somos nós'])->first();
        $pages = $this->pageRepository->findWhere([
                                                    ['title', '<>', 'Quem somos nós']
                                                ]);

        return view('site.index', compact('quemSomos', 'pages', 'banners'));
    }

    private function getBanners() 
    {
        $banners = $this->bannerRepository->all();;

        $expiresAt = Carbon::now()->addHour();

        Cache::add('banners', $banners, $expiresAt);
    }
}
