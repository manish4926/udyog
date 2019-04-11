<?php

function getIpAddress()
{
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function ceiling($number, $significance = 1)
{
    return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
}

function getdiscountvalue($total,$discount)
{
    $newprice = round($total - ($total * ($discount / 100)));
    return $newprice;
}

function timestampToTime($date,$addDays = 0){
    if($addDays != 0)
    {
        $date = strtotime("+".$addDays." days",$date);
    }
    else{
        $date = strtotime($date);
    }
}

function timestampToDate($date,$addDays = 0){
    if($addDays != 0)
    {
        $date = date('d/m/Y',strtotime("+".$addDays." days",$date));
    }
    else{
        $date = date('d/m/Y',strtotime($date));
    }
    return $date;
    //date('d/m/Y',strtotime("+14 days",$order->deliveredon));
}

function dateToTimestamp($date,$addDays = 0){

    if($addDays != 0)
    {
        $date = date('Y-m-d h:i:s',strtotime("+".$addDays." days",$date));
    }
    else{
        
        $date = date('Y-m-d h:i:s',strtotime($date));
    }
    return $date;
}

function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}


function GetCoreInformation() {
    $data = file('/proc/stat');
    $cores = array();
    foreach( $data as $line ) {
        if( preg_match('/^cpu[0-9]/', $line) )
        {
            $info = explode(' ', $line );
            $cores[] = array(
                'user' => $info[1],
                'nice' => $info[2],
                'sys' => $info[3],
                'idle' => $info[4]
            );
        }
    }
    return $cores;
}

function GetCpuInfo()
{
    //Average Load
    $avgload = sys_getloadavg();
    $array = array();
    array_push($array, array("Average Load" => $avgload[0]));

    //Cpu Usage
    /* get core information (snapshot) */
    $stat1 = GetCoreInformation();
    /* sleep on server for one second */
    sleep(1);
    /* take second snapshot */
    $stat2 = GetCoreInformation();
    /* get the cpu percentage based off two snapshots */
    $data = GetCpuPercentages($stat1, $stat2);
    $a = 0;
    $count = count($data);
    foreach ($data as $cpu ) {
        //dd($cpu['user']);
        $a +=  $cpu['user']+$cpu['sys'];

    }
    $b = round($a/$count);
    array_push($array, array("Cpu Usage" => $b));

    //Memory Usage (Not Yet Working Properly)
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    //dd($data);
    array_pop($data);
    foreach ($data as $line) {
        $val = explode(":", $line);
        $ram = trim($val['1']);

        $meminfo['key'] = $ram;
    }
    array_push($array, $meminfo);  
    $newram = get_server_memory_usage();
    array_push($array, $newram);  

    return $array;
}


function GetCpuPercentages($stat1, $stat2) {
    if( count($stat1) !== count($stat2) ) {
        return;
    }
    $cpus = array();
    for( $i = 0, $l = count($stat1); $i < $l; $i++) {
        $dif = array();
        $dif['user'] = $stat2[$i]['user'] - $stat1[$i]['user'];
        $dif['nice'] = $stat2[$i]['nice'] - $stat1[$i]['nice'];
        $dif['sys'] = $stat2[$i]['sys'] - $stat1[$i]['sys'];
        $dif['idle'] = $stat2[$i]['idle'] - $stat1[$i]['idle'];
        $total = array_sum($dif);
        $cpu = array();
        foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
        $cpus['cpu' . $i] = $cpu;
    }
    return $cpus;
}

function GetRamInformation()
{
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    array_pop($data);
    foreach ($data as $line) {
        $val = explode(":", $line);
        $ram = trim($val['1']);

        $meminfo['key'] = $ram;


    }
    return $meminfo;
}

function get_server_memory_usage(){

    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    //$memory_usage = $mem[2]/$mem[1]*100;

    return $free_arr;
}


function fetchSslApi($url) {
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    ); 
    $json = file_get_contents($url, false, stream_context_create($arrContextOptions));
    return $json;
}

function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

function json_clean_decode($json, $assoc = false, $depth = 512, $options = 0) {

    // search and remove comments like /* */ and //
    $json = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $json);
    $json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );
    //$json = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":([a-zA-Z]+[a-zA-Z0-9_]*)/','$1:$2',$json);
    //$json = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$json);

    /*if(version_compare(phpversion(), '5.4.0', '>=')) { 

        return json_decode($json, $assoc, $depth, $options);
    }
    elseif(version_compare(phpversion(), '5.3.0', '>=')) { 
        return json_decode($json, $assoc, $depth);
    }
    else {
        return json_decode($json, $assoc);
    }*/
    return $json;
}


function get7DaysDates($days, $format = 'd/m'){
    $m = date("m"); $de= date("d"); $y= date("Y");
    $dateArray = array();
    for($i=0; $i<=$days-1; $i++){
        $dateArray[] = date($format, mktime(0,0,0,$m,($de-$i),$y)) ; 
    }
    return array_reverse($dateArray);
}

function in_array_r($needle, $haystack, $strict = false) {  //In_array for Multidimention
  foreach ($haystack as $item) {
      if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
          return true;
      }
  }

  return false;
}


function getAllDatesbetweenTwoDates($startdate, $enddate) {
    $start = strtotime($startdate);
    $stop = strtotime($enddate);
    $arr = array();
    for ($i=$start; $i<=$stop; $i+=86400)
    {
        $date = date("Y-m-d", $i);
        array_push($arr, $date);
    }
    return $arr;
}

function perc_calc($newval, $totalval) {
  /*$new_width = ($percentage / 100) * $totalWidth;*/
  if($totalval > 0) {
    $perc    = round2(($newval * 100) / $totalval);  
  } else {
    $perc = 0;
  }
  
  return $perc;
}


function perc_val_calc($perc, $totalval) {
  $newvalue = ($perc  * $totalval) / 100;  
  return $newvalue;
}

function round2($value) {
  return round($value,2);
}

/*Arrays*/

function industry_type() {

    $industry_type = [
      ['category'=> 'Industrial machinery'], ['category'=> 'Industrial supplies'], ['category'=> 'Building and construction'], ['category'=> 'Textile'], ['category'=> 'Food and beverages'], ['category'=> 'Medical  and healthcare'], ['category'=> 'Electronics'], ['category'=> 'Packaging'],
      ['category'=> 'Chemicals'], ['category'=> ' Mechanical parts'], ['category'=> ' Stationary supplies'], ['category'=> 'Furniture'], ['category'=> 'Metals'], ['category'=> 'Agriculture'], ['category'=> 'Automobiles '], ['category'=> 'Houseware'], ['category'=> 'It solutions'], ['category'=> 'Fashion accessories'], ['category'=> 'Sports and toys'], ['category'=> 'Cosmetics'], ['category'=> 'Engineering services'], ['category'=> 'Publishing'], ['category'=> 'Travel and tourism'] 
    ];

    $industry_types = array_pluck($industry_type,'category');
    
    return $industry_types;
}

function business_type() {

    $business_type = [
    ['type' => 'manufacturer'], ['type' => 'wholesaler'], ['type' => 'exporter'], ['type' => 'retailer'], ['type' => 'service provider']
    ];


     $business_types = array_pluck($business_type,'type');
    
    return $business_types;
}


