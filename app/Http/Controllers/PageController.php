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
        $slides = Branch::get();
        return view('page.index',compact('clients','reviews','gallery','slides'));
    }

    public function about(){
        $reviews = Review::get();
        $enterprise=Enterprise::first();
        return view('page.about',compact('enterprise','reviews'));
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
