<?php

namespace App\Http\Controllers;

use App\Modules\Home\HomeService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class HomeController extends Controller
{
    public function __construct(
        public readonly HomeService $homeService
    ) {
    }
    public function home(Request $request): View
    {
       $blogList= $this->homeService->home($request);
        return view('home', $blogList);
    }
}
