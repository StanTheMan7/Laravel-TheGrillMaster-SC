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

class BackHomeController extends Controller
{
    public function index() {
        $footer = Footer::all();
        $navbar = Navbar::all();
        $about = WarmWelcome::all();
        $steak = LoveSteak::all();
        $book_adresse = BookTable::all();
        $book_heure = Heure::all();
        $chef = Portfolio::all();
        $happy = HappyCustomer::all();
        $titre = Titre::all();
        $role = Role::all();
        $user = User::all();
        return view('backoffice.homeBack.homeB', compact('footer', 'navbar', 'about', 'steak', 'book_adresse', 'book_heure', 'chef', 'happy', 'titre', 'role', 'user'));
    }
}
