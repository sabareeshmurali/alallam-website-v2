<?php

namespace App\Http\Controllers;
use App\Models\general_mod;
use Illuminate\Http\Request;
use DB;
use App\Models\Content;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{

// Method to show Contents - Test 
  public function contentsShow()
  {
      $info = json_decode(file_get_contents('php://input'))->Search;
      $model = new general_mod();
      
      $result = $model->result_general('in_contents');
      
      echo json_encode($result);
  }


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

  public function contentsInsert()
  {
      $model = new general_mod();
      $info = json_decode(file_get_contents('php://input'))->mainData;
      if ($info->btnName == 'Insert') {
          $insData = json_decode(json_encode($info), true);
          $insData = array_diff_key($insData, array_flip(["btnName"]));
          $resp = $model->insert_with_idreturn('in_contents', $insData);
          print_r($resp); exit();
          echo ($resp > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Contents added Successfully')) : json_encode(array('statuscode' => 500, 'message' => 'Contents adding Failed'));
      } else {
          $upData = json_decode(json_encode($info), true);
          $upData = array_diff_key($upData, array_flip(["btnName", "content_id"]));
          $refData = array('content_id' => $info->content_id);
          echo ($model->update_general('in_contents', $refData, $upData) > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Contents Edit Success')) : json_encode(array('statuscode' => 500, 'message' => 'Contents Edit Failed'));
      }
  }



public function loadHomePage()
{
    
    $contents = InContent::where('in_contents', 'index')->get();


    return view('index', compact('contents'));
}

public function uploadImage()
{
    $model = new general_mod();
    $info = json_decode(file_get_contents('php://input'))->mainData;
    if ($info->btnName == 'Insert') {
        $insData = json_decode(json_encode($info), true);
        $insData = array_diff_key($insData, array_flip(["btnName"]));
        //print_r($insData);
        $resp = $model->insert_with_idreturn('file_upload', $insData);
        echo ($resp > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Image Upload Success')) : json_encode(array('statuscode' => 500, 'message' => 'Image Upload Failed'));
    } else {
        $upData = json_decode(json_encode($info), true);
        $upData = array_diff_key($upData, array_flip(["btnName", "file_id"]));
        $refData = array('file_id' => $info->file_id);
        echo ($model->update_general('file_upload', $refData, $upData) > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Image Edit Success')) : json_encode(array('statuscode' => 500, 'message' => 'Image Edit Failed'));
    }
}


public function generalImageUpload(Request $request)
{
    $img = $request->file_details;

    $fileName = time().".".$img->extension();

    if($request->file_details->move(public_path('assets/uploads'), $fileName))
    {
        $data=array('path' => '/public/assets/uploads/'.$fileName, 'resp'=>'success');
    }
    else{
        $data=array('resp'=>'failed');
    }
    
    echo json_encode($data);
}


public function imagesInsert()
{
    $model = new general_mod();
    $info = json_decode(file_get_contents('php://input'))->mainData;
 
    if ($info->btnName == 'Insert') {
        $insData = json_decode(json_encode($info), true);
        $insData = array_diff_key($insData, array_flip(["btnName"]));
        $resp = $model->insert_with_idreturn('in_images', $insData);
    
        echo ($resp > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Images added Successfully')) : json_encode(array('statuscode' => 500, 'message' => 'Images adding Failed'));
    } else {

        $upData = json_decode(json_encode($info), true);
        $upData = array_diff_key($upData, array_flip(["btnName", "img_id", "existpath"]));
        $refData = array('img_id' => $info->img_id);
     
        echo ($model->update_general('in_images', $refData, $upData) > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Images change Success')) : json_encode(array('statuscode' => 500, 'message' => 'Images Edit Failed'));
    }
}





// public function imagesInsert()
// {
//     // $model = new general_mod();
//     // $info = json_decode(file_get_contents('php://input'))->mainData;
//     // if ($info->btnName == 'Insert') {
//     //     $insData = json_decode(json_encode($info), true);
//     //     $insData = array_diff_key($insData, array_flip(["btnName"]));
//     //     $resp = $model->insert_with_idreturn('in_images', $insData);
//     //     echo ($resp > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Images added Success')) : json_encode(array('statuscode' => 500, 'message' => 'Images added Failed'));
//     // } else {
//     //     $upData = json_decode(json_encode($info), true);
//     //     $upData = array_diff_key($upData, array_flip(["btnName", "img_id"]));
//     //     print_r($upData);
//     //     $refData = array('img_id' => $info->img_id);
//     //     echo ($model->update_general('in_images', $refData, $upData) > 0) ? json_encode(array('statuscode' => 200, 'message' => 'Images Change Success')) : json_encode(array('statuscode' => 500, 'message' => 'Image change Failed'));
//     // }
// }

public function imagesShow()
{
    $info = json_decode(file_get_contents('php://input'))->Search;
    $model = new general_mod();
    $result = $model->result_general('in_images');
    // print_r($result);
    echo json_encode($result);
}



}


