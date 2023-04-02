<?php

use Carbon\Carbon;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

require "Repo.php";
require "StringGenerator.php";
require "Wallet.php";


if(!function_exists('routeIsInGroup')){
    function getRouteName(){
        return  ucwords(Route::currentRouteName());
    }
  }
if(!function_exists('routeIsInGroup')){
    function routeIsInGroup($path){
        return Request::is($path . '*');
    }
  }
if(!function_exists('setActive')){
    function setActive($path=[],$return=null){
      $active = Route::currentRouteName();
      // return Request::is($path . '*') ? ' class=active' :  '';
      if(in_array($active,$path)){
        return $return? $return:'active';
      }else{
        return '';
      }
    }
  }
  if(!function_exists('setOpenActive')){
      function setOpenActive($path=[],$class=null){
        $active = Route::currentRouteName();
        // return Request::is($path . '*') ? ' class=active' :  '';
        if(in_array($active,$path)){
          return $class??'open';
        }else{
          return '';
        }
      }
    }

  if(!function_exists('setActiveIcon')){
    function setActiveIcon($activeIcon, $inactiveIcon, $path){
      $active = Route::currentRouteName();
      // return Request::is($path . '*') ? ' class=active' :  '';
       if(in_array($active,$path)){
        return $activeIcon;
      }else{
        return $inactiveIcon;
      }
    }
  }



  if(!function_exists('setSingleActive')){
    function setSingleActive($path,$class=null){
      $active = Route::currentRouteName();
      // return Request::is($path . '*') ? ' class=active' :  '';
      if($active == $path){
        return $class??'active';
      }else{
        return '';
      }
    }
  }

if (!function_exists('formatDateToDMY')) {
    function formatDateToDMY($date)
    {
        return  Carbon::parse($date)->format("d-m-Y");
    }
}
if (!function_exists('simplifyNumber')) {
    function simplifyNumber($value):string
    {
        $regrex = '/^-?\d+(?:\.\d{0,1})?/';
        $format = function($value) use ($regrex){
            preg_match($regrex,$value,$matches,PREG_OFFSET_CAPTURE);
            return str_replace('.0','',$matches[0][0]);
        };
        if($value < 1000){
            return $value;
        }
        if($value < 1000000){
            return $format($value/1000). 'K';
        }
        if($value < 1000000000){
            return $format($value/1000000). 'M';
        }
        return $format($value/1000000000). 'B';
    }
}
    if (!function_exists('replaceSpString')) {
        function replaceSpString($str)
        {
            return  preg_replace('/\W+/', '_', $str);
        }
    }
    if (!function_exists('adminUser')) {
        function adminUser()
        {
            //        dd($firgure);
            return Auth::guard('admin')->user();
        }
    }
    if (!function_exists('logAdminActivity')) {
        function logAdminActivity($model, $msg)
        {
            try {
                $admin = Auth::guard('admin')->user();
                activity()->causedBy($admin)->performedOn($model)->log($msg);
            } catch (\Exception $e) {
            }
        }
    }
    if (!function_exists('makeCurrency')) {
        function makeCurrency($value)
        {
           return 'N'. number_format($value);
        }
    }
if (!function_exists('generateUUID')) {
    function generateUUID()
    {
        // $data = $data ?? random_bytes(16);
        // return $data;
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
}

if (!function_exists('simplifyNumber')) {
    function simplifyNumber($value): string
    {
        $regrex = '/^-?\d+(?:\.\d{0,1})?/';
        $format = function ($value) use ($regrex) {
            preg_match($regrex, $value, $matches, PREG_OFFSET_CAPTURE);
            return str_replace('.0', '', $matches[0][0]);
        };
        if ($value < 1000) {
            return $value;
        }
        if ($value < 1000000) {
            return $format($value / 1000) . 'K';
        }
        if ($value < 1000000000) {
            return $format($value / 1000000) . 'M';
        }
        return $format($value / 1000000000) . 'B';
    }
    if (!function_exists('replaceSpString')) {
        function replaceSpString($str)
        {
            return  preg_replace('/\W+/', '_', $str);
        }
    }
}

