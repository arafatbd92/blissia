<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Slider;
use App\Models\Backend\PastEvent;
use App\Models\Backend\LatestUpdate;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display the main website homepage
     */
    public function index()
    {
        $sliders = Slider::active()->latest()->get();
        $pastevents = PastEvent::latest()->take(3)->get();
        $latestupdates = LatestUpdate::latest()->take(5)->get();
        $videos = VideoGallery::active()->latest()->take(6)->get();
        return view('frontend.home.index', compact('sliders', 'pastevents', 'latestupdates', 'videos'));
    }
}
