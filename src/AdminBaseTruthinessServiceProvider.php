<?php

namespace TallModSassy\AdminBaseTruthiness;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

require_once(__DIR__."/../routes/web.php"); // MaybeToDo

class AdminBaseTruthinessServiceProvider extends ServiceProvider
{
    public static string $blade_prefix = "tassy"; #tassy is a template term

    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tassy');
    }
}
