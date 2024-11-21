<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general_mod;
use Symfony\Component\HttpFoundation\Session\Session;
use Mail;
use App\Mail\MyEmail;
use Exception;
use GuzzleHttp\Client;

class Login extends Controller
{

    public function loginAction()
    {
        $model = new general_mod();
        $info = json_decode(file_get_contents('php://input'))->Log;
        $refData = array('in_email' => $info->username);
        if ($model->count_general('in_users', $refData) == 0) {
            $response = array('statuscode' => 404, 'message' => 'User not found ! Please try again with registered email address');
            echo json_encode($response);
            exit();
        }
        $refData = array_merge($refData, array('in_status' => 'Yes'));
        if ($model->count_general('in_users', $refData) == 0) {
            $response = array('statuscode' => 403, 'message' => 'User Blocked ! Please contact Admin');
            echo json_encode($response);
            exit();
        }
        $refData = array_merge($refData, array('in_password' => md5($info->password)));
        if ($model->count_general('in_users', $refData) == 0) {
            $response = array('statuscode' => 401, 'message' => 'Password Error, Please try again with correct password');
            echo json_encode($response);
            exit();
        }
        $userData = $model->row_general('in_users', $refData);
        $userdata = array(
            'in_userid' =>  $userData->in_userid,
            'in_email'  =>  $userData->in_email,
            'in_usertype' => $userData->in_usertype
        );
        $session = new Session();
        $session->set('userdata', $userdata);
        $response = array(
            'statuscode'    =>  200,
            'message'       =>  'Login Success',
        );
        echo json_encode($response);
    }

    public function load_general()
    {
        $model  = new general_mod();
        $info = json_decode(file_get_contents('php://input'));
        $tablename = isset($info->tablename) ? $info->tablename : '';
        $where = isset($info->where) ? json_decode(json_encode($info->where), true) : array();
        $where_raw = isset($info->where_raw) ? $info->where_raw : null;
        $result = $model->result_general($tablename, $where, $where_raw);
        echo json_encode($result);
    }

}
