<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MainController extends Controller
{
    protected $menu;

    public function __construct(MenuService $menu)
    {
        $this->menu = $menu;
    }
    public function index()
    {
        return view('home', [
            'titles' => 'MediaMarket',
            'menus' => $this->menu->show(),
        ]);
    }
}
