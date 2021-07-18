<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Review;
use App\Models\Gallery;
use App\Models\BranchType;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        $gallery = Gallery::where('category','!=','client')->get();
        $reviews = Review::get();
        $clients = Gallery::where('category','client')->get();
        return view('page.index',compact('clients','reviews','gallery'));
    }

    public function about(){
        $reviews = Review::get();
        $quienesSomos=Enterprise::where('code','quienes_somos')->first()->one;
        $nosotros=Enterprise::where('code','sobre_nosotros')->first()->one;
        $mision=Enterprise::where('code','mision')->first()->one;
        $vision=Enterprise::where('code','vision')->first()->one;
        return view('page.about',compact('mision','vision','quienesSomos','nosotros','reviews'));
    }

    public function branch(String $branch){
        switch ($branch) {
            case 'fabrica-hielo':
                $type = 'hielo';
                break;
            case 'grifo-market':
                $type = 'grifo';
                break;
            case 'pesca-y-transporte':
                $type = 'transporte';
                break;
            case 'agua-de-mesa':
                $type = 'agua';
                break;
            default:
                abort(404);
                break;
        }
        $name = BranchType::getList()[$type]['label'];
        $branch=Branch::where('name',$type)->first();
        $images = Gallery::where('category',$type)->get();
        return view('page.branch', compact('type','branch','name','images'));
    }
}
