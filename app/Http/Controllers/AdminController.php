<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\News;
use App\Models\Page;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Barcodes;
use App\Models\Messages;
use App\Http\Middleware\CheckRole;

class AdminController extends Controller
{
    public function index()
    {
        $messages = Messages::all();
        $contacts = Contact::all();
        $pages = Page::all();
        $news = News::all();
        $services = Service::all();
        $members = Member::all();
        $barcodes = Barcodes::all();

        return view('admin.index', compact('messages','contacts', 'pages', 'news', 'services', 'members', 'barcodes'
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
