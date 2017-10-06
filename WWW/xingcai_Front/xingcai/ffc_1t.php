<?php

class get_c_str {  
var $str;  
var $start_str;  
var $end_str;  
var $start_pos;  
var $end_pos;  
var $c_str_l;  
var $contents;  
function get_str($str,$start_str,$end_str){  
   $this->str = $str;  
   $this->start_str = $start_str;  
   $this->end_str = $end_str;  
   $this->start_pos = strpos($this->str,$this->start_str)+strlen($this->start_str);  
     $this->end_pos = strpos($this->str,$this->end_str);  
   $this->c_str_l = $this->end_pos - $this->start_pos;  
   $this->contents = substr($this->str,$this->start_pos,$this->c_str_l);  
   return $this->contents;  
}  
}  


function randKeys()
{
$ch = curl_init();
$u="http://mma.qq.com/cgi-bin/im/online&callback=?"; 
curl_setopt ($ch, CURLOPT_URL, $u);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)'); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
curl_setopt ($ch,CURLOPT_FOLLOWLOCATION, true);
$con = curl_exec($ch);  

$con = str_replace(':',',', $con);  
$flcon=explode(",", $con);
$haoma=$flcon[1];
$haoma=implode(',',str_split( $haoma));
return $haoma; 
}



$lastNo=$this->getGameLastNo(83);
$expect=$lastNo['actionNo'];
$zddata2=$this->getGameZdData(83,$expect);
$opencode =randKeys();

$fx_hm=explode(',',$opencode);

$opencode2_1=$fx_hm[0]+$fx_hm[1]+$fx_hm[2]+$fx_hm[3]+$fx_hm[4]+$fx_hm[5]+$fx_hm[6]+$fx_hm[7]+$fx_hm[8];
$opencode2_1=substr($opencode2_1,-1);

$opencode2=$opencode2_1.','.$fx_hm[5].','.$fx_hm[6].','.$fx_hm[7].','.$fx_hm[8];

$number=explode('-',$expect);
$qihao=$number[1];
$qihao2=$qihao-1;
$qihao_pre=$number[0]."-".$qihao2;
 

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode2.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

?>