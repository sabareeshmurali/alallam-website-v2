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

public function showProjects()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['project','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['project', 'default'])->get()->keyBy('img_key');

  return view('theme.projects', compact('contents','images'));
}

public function showProjectDetails()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['prodetail','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['prodetail', 'default'])->get()->keyBy('img_key');

  return view('theme.project-details', compact('contents','images'));
}

public function showServices()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['service','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['service', 'default'])->get()->keyBy('img_key');

  return view('theme.services', compact('contents','images'));
}

public function showTeam()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['team','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['team', 'default'])->get()->keyBy('img_key');

  return view('theme.team', compact('contents','images'));
}

public function showTeamSingle()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['teamsingle','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['teamsingle', 'default'])->get()->keyBy('img_key');

  return view('theme.team-single', compact('contents','images'));
}

public function showBlogSingle()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['blog','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['blog', 'default'])->get()->keyBy('img_key');

  return view('theme.blog-single', compact('contents','images'));
}

public function showBlogSingleSideBar()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['blogside','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['blogside', 'default'])->get()->keyBy('img_key');

  return view('theme.blog-single-with-sidebar', compact('contents','images'));
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

public function showRTLFaq()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['faq','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['faq', 'default'])->get()->keyBy('img_key');

  return view('themertl.faq', compact('contents','images'));
}

public function showRTLPricing()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['pricing','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['pricing', 'default'])->get()->keyBy('img_key');

  return view('themertl.pricing', compact('contents','images'));
}

public function showRTLProjects()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['project','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['project', 'default'])->get()->keyBy('img_key');

  return view('themertl.projects', compact('contents','images'));
}

public function showRTLProjectDetails()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['prodetail','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['prodetail', 'default'])->get()->keyBy('img_key');

  return view('themertl.project-details', compact('contents','images'));
}

public function showRTLServices()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['service','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['service', 'default'])->get()->keyBy('img_key');

  return view('themertl.services', compact('contents','images'));
}


public function showRTLTeam()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['team','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['team', 'default'])->get()->keyBy('img_key');

  return view('themertl.team', compact('contents','images'));
}

public function showRTLTeamSingle()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['teamsingle','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['teamsingle', 'default'])->get()->keyBy('img_key');

  return view('themertl.team-single', compact('contents','images'));
}

public function showRTLBlogSingle()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['blog','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['blog', 'default'])->get()->keyBy('img_key');

  return view('themertl.blog-single', compact('contents','images'));
}

public function showRTLBlogSingleSideBar()
{
 
  $model = new general_mod();

  $contents = Content::whereIn('content_page', ['blogside','header','footer'])->get()->keyBy('content_key');

  $images = Images::whereIn('img_page', ['blogside', 'default'])->get()->keyBy('img_key');

  return view('themertl.blog-single-with-sidebar', compact('contents','images'));
}


}