<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\Service;
use App\Models\LensTechnology;
use App\Models\Catalog;
use App\Models\Ophthalmology;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index(Request $request): void
    {
        $pillars       = Service::getPillars();
        $services      = Service::all();
        $lenses        = LensTechnology::all();
        $catalog       = Catalog::all();
        $categories    = Catalog::getCategories();
        $ophthalmology = Ophthalmology::getInfo();
        $faqs          = Faq::all();

        $this->render('home/index', [
            'pageTitle'     => config('app.name') . ' | ' . config('app.tagline'),
            'pillars'       => $pillars,
            'services'      => $services,
            'lenses'        => $lenses,
            'catalog'       => $catalog,
            'categories'    => $categories,
            'ophthalmology' => $ophthalmology,
            'faqs'          => $faqs,
        ]);
    }

    public function catalogJson(Request $request): void
    {
        $this->json([
            'status'     => 'success',
            'categories' => Catalog::getCategories(),
            'data'       => Catalog::all(),
        ]);
    }

    public function lensesJson(Request $request): void
    {
        $this->json([
            'status' => 'success',
            'data'   => LensTechnology::all(),
        ]);
    }
}
