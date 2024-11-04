<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Contact;
use App\Models\Page;
use App\Models\News;
use App\Models\Service;
use App\Models\Member;
use App\Models\Barcodes;

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
}
