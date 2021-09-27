<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Models\Footer;
use App\Models\HappyCustomer;
use App\Models\Heure;
use App\Models\LoveSteak;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Role;
use App\Models\Titre;
use App\Models\User;
use App\Models\WarmWelcome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $footer = Footer::all();
        $navbar = Navbar::all();
        $warmWelcome = WarmWelcome::all();
        $loveSteak = LoveSteak::all();
        $book_adresse = BookTable::all();
        $heure = Heure::all();
        $portfolio = Portfolio::all();
        $happyCustomer = HappyCustomer::all();
        $titre = Titre::all();
        $role = Role::all();
        $user = User::all();
        return view('page.home', compact('footer', 'navbar', 'warmWelcome', 'book_adresse', 'heure', 'portfolio', 'happyCustomer', 'titre', 'loveSteak','role', 'user'));
    }
}
