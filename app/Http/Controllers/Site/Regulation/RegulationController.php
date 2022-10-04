<?php

namespace App\Http\Controllers\Site\Regulation;

use App\Http\Controllers\Controller;
use App\Models\Regulation\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        $data = Regulation::getSiteData();
        return view('site.regulation', compact('data'));
    }

    public function downloadDocument(Regulation $regulation)
    {
        $regulation->update(['quantity_downloads' => ($regulation->quantity_downloads + 1)]);
        $document = $regulation->document;
        if ($document != null and strpos($document, url('/')) !== false) {
            $document = str_replace(url('/').'/','',$document);
        }
        if (file_exists($document)) {
            return response()->download($document);
        } else
            return redirect()->back();
    }
}
