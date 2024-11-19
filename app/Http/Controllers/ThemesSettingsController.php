<?php

namespace App\Http\Controllers;
use App\Models\general_mod;
use Illuminate\Http\Request;
use DB;
use App\Models\Content;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class ThemesSettingsController extends Controller
{

    public function showAboutUs()
    {
     
      $model = new general_mod();
    
      $contents = Content::whereIn('content_page', ['about-us','header','footer'])->get()->keyBy('content_key');
    
      $images = Images::whereIn('img_page', ['about-us', 'default'])->get()->keyBy('img_key');
        
        return view('theme.about-us', compact('contents','images'));
    }

 public function showContact()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['contact','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['contact', 'default'])->get()->keyBy('img_key');

  return view('theme.contact', compact('contents','images'));
}

public function showHome()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['home','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['home', 'default'])->get()->keyBy('img_key');

  return view('theme.home', compact('contents','images'));
}

public function showFaq()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['faq','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['faq', 'default'])->get()->keyBy('img_key');

  return view('theme.faq', compact('contents','images'));
}

public function showPricing()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['pricing','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['pricing', 'default'])->get()->keyBy('img_key');

  return view('theme.pricing', compact('contents','images'));
}


// ================== RTL THEMES ====================

public function showRTLHome()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['home','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['home', 'default'])->get()->keyBy('img_key');

  return view('themertl.home', compact('contents','images'));
}


public function showRTLAboutUs()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['about-us','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['about-us', 'default'])->get()->keyBy('img_key');
    
    return view('themertl.about-us', compact('contents','images'));
}

public function showRTLContact()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['contact','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['contact', 'default'])->get()->keyBy('img_key');

  return view('themertl.contact', compact('contents','images'));
}

}