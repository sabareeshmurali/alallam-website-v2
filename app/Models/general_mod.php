<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use DB;
class general_mod extends Model
{
    static function insert_with_idreturn($tablename, $data=array(), $refcolumn=null)
    {
        try {
            $resp = DB::table($tablename)->insertGetId($data,'in_userid');
            return $resp;
        }catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
    static function insert_general($tablename, $data=array())
    {
        try {
            $resp = DB::table($tablename)->insert([$data]);
            return $resp;
        }catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
    static function update_general($tablename, $refdata, $updatedata)
    {
        try {
            $affected = DB::table($tablename)->where($refdata)->update($updatedata);
            return $affected;
        }catch(Exception $e)
        {
            return $e->getMessage();
        }
    }
    static function delete_general($tablename, $refdata)
    {
        return DB::table($tablename)->where($refdata)->delete();
    }
    static function count_general($tablename, $where=array(), $raw=null)
    {
        $result = DB::table($tablename)->where($where);
        if(isset($raw))
        {
            $result=$result->whereRaw($raw);
        }
        return $result->count();
    }
    static function result_general($tablename, $where=array(), $raw=null)
    {
        $result =DB::table($tablename)->where($where);
        if(isset($raw))
        {
            $result=$result->whereRaw($raw);
        }
        return $result->get();
    }
    static function row_general($tablename, $where=array(), $raw=null)
    {
        $result = DB::table($tablename)->where($where);
        if(isset($raw))
        {
            $result=$result->whereRaw($raw);
        }
        return $result->first();
    }
    static function master_result_data($tablename, $join = array(), $select=array(), $where=array(), $whereraw=null, $orderby=array(), $limit=array())
    {
        $result = DB::table($tablename);
        foreach($join as $jo)
        {
            $type = $jo['type'];
            $result=$result->$type($jo['jointable'], $jo['leftcolumn'], '=', $jo['rightcolumn'] );
        }
        $result = $result->select($select);
        $result = $result->where($where);
        if(isset($whereraw))
        {
            $result = $result->whereRaw($whereraw);
        }
        foreach($orderby as $key=>$value)
        {
            $result = $result->orderBy($key, $value);
        }
        foreach($limit as $key1=>$value1)
        {
            $result = $result->offset($key1)->limit($value1);
        }
        $result = $result->get();
        return $result;
    }

    public function send_whatsappmsg($instance,$Token,$customer_no,$msg )
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/".$instance."/messages/chat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "token=".$Token."&to=".$customer_no."&body=".$msg."&referenceId=",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
        ));
        $response = json_decode(curl_exec($curl), true);
        return $response;
    }
    public function sendImagewithText($instance,$Token, $customer_no, $msg, $visitorImg)
    {
        $params=array(
        'token' => $Token,
        'to' => $customer_no,
        'image' => $visitorImg,
        'caption' => $msg,
        'priority' => '',
        'referenceId' => '',
        'nocache' => '',
        'msgId' => '',
        'mentions' => ''
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/".$instance."/messages/image",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }

    //Updated By Pooja 0n 20-08-2024
    public function send_whatsapp_notification($mobile_rec,$msg )
    {
        
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://whatapi.azinovaict.com/api/chat/text',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'phoneno' => $mobile_rec,
                    'text' =>  $msg,
                    'sessionId' => 'default'
                ),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBuYW1lIjoic2FiX2FwcF92MSJ9.LkIx93Tfq4y8OPbxG8uG_LQtpWGMw3LKnbPvbX13KvA'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
        
        return $response;
    }

}
