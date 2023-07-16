<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->inRandomOrder()->get();
        return view('auth.pages.index', compact('products'));
    }

    public function introduce()
    {
        return view('auth.pages.introduce');
    }

    public function agentSystem()
    {
        return view('auth.pages.agent-system');
    }

    public function contactUs()
    {
        return view('auth.pages.contact-us');
    }

    public function faq()
    {
        return view('auth.pages.faq.faq');
    }

    public function returnPolicy()
    {
        return view('auth.pages.faq.return-policy');
    }

    public function privacyPolicy()
    {
        return view('auth.pages.faq.privacy-policy');
    }

    public function term()
    {
        return view('auth.pages.faq.term');
    }

    public function whyChooseUs()
    {
        return view('auth.pages.faq.why-choose-us');
    }

    public function orderProcess()
    {
        return view('auth.pages.faq.order-process');
    }

    public function leadingQualityAndPrestigeGarmentCompany()
    {
        return view('auth.pages.faq.leading-quality-and-prestige-garment-company');
    }

    public function manufacturingOnDemandPremiumBagsNationwide()
    {
        return view('auth.pages.faq.manufacturing-on-demand-premium-bags-nationwide');
    }
}
