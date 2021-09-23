<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Models\Footer;
use App\Models\HappyCustomer;
use App\Models\Heure;
use App\Models\LoveSteak;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Titre;
use App\Models\WarmWelcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $footer = Footer::all();
        $navbar = Navbar::all();
        $about = WarmWelcome::all();
        $book_adresse = BookTable::all();
        $book_heure = Heure::all();
        $chef = Portfolio::all();
        $happy = HappyCustomer::all();
        $titre = Titre::all();
        $steak = LoveSteak::all();
        return view('page.home', compact('footer', 'navbar', 'about', 'book_adresse', 'book_heure', 'chef', 'happy', 'titre', 'steak'));
    }
}
