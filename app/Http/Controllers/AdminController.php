<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\News;
use App\Models\Page;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Layanan;
use App\Models\Barcodes;
use App\Models\Messages;
use App\Http\Middleware\CheckRole;

class AdminController extends Controller
{
    public function index()
{
    // Ambil semua data
    $members = Member::all();
    $layanan = Layanan::all();
    $news = News::all();
    $messages = Messages::all();
    $faqs = Faq::all();

    // Hitung total data
    $totalMembers = $members->count();
    $totalLayanan = $layanan->count();
    $totalNews = $news->count();
    $totalMessages = $messages->count();
    $totalFaq = $faqs->count();

    // Kirimkan data ke view
    return view('admin.index', compact(
        'messages',
        'news',
        'layanan',
        'members',
        'totalMembers',
        'totalLayanan',
        'totalNews',
        'totalMessages',
        'totalFaq',
    ));
}


    public function indexFaq()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    // public function __construct()
    // {
    //     $this->middleware('role:super_admin,admin');
    // }
}
