<?php

function cut($start,$end,$file){
$content=explode($start,$file);
$content=explode($end,$content[1]);
return  $content[0];
}
function getcode($str){
$str=trim(eregi_replace("[^0-9]","",$str));
return $str;
}
function autoCharset($string, $from='gbk', $to='utf-8') {
        $from = strtoupper($from) == 'UTF8' ? 'utf-8' : $from;
        $to = strtoupper($to) == 'UTF8' ? 'utf-8' : $to;
        if (strtoupper($from) === strtoupper($to) || empty($string) || (is_scalar($string) && !is_string($string))) {
            //编码相同或者非字符串标量则转换
            return $string;
        }
        if (is_string($string)) {
            if (function_exists('mb_convert_encoding')) {
                return mb_convert_encoding($string, $to, $from);
            } elseif (function_exists('iconv')) {
                return iconv($from, $to, $string);
            } else {
                return $string;
            }
        }else {
            return $string;
        }
    }
	
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

function trimall($str)//删除空格
{
    $qian=array(" ","　","\t","\n","\r");
    $hou=array("","","","","");
    return str_replace($qian,$hou,$str); 
}


Function ClearHtml($content) {  
   $content = preg_replace("/<a[^>]*>/i", "", $content);  
   $content = preg_replace("/<\/a>/i", "", $content);   
   $content = preg_replace("/<div[^>]*>/i", "", $content);  
   $content = preg_replace("/<\/div>/i", "", $content);      
   $content = preg_replace("/<!--[^>]*-->/i", "", $content);//注释内容  上海SEO顾问
   $content = preg_replace("/style=.+?['|\"]/i",'',$content);//去除样式  
   $content = preg_replace("/class=.+?['|\"]/i",'',$content);//去除样式  
   $content = preg_replace("/id=.+?['|\"]/i",'',$content);//去除样式     
   $content = preg_replace("/lang=.+?['|\"]/i",'',$content);//去除样式      
   $content = preg_replace("/width=.+?['|\"]/i",'',$content);//去除样式   
   $content = preg_replace("/height=.+?['|\"]/i",'',$content);//去除样式   
   $content = preg_replace("/border=.+?['|\"]/i",'',$content);//去除样式   
   $content = preg_replace("/face=.+?['|\"]/i",'',$content);//去除样式   
   $content = preg_replace("/face=.+?['|\"]/",'',$content);//去除样式 只允许小写 正则匹配没有带 i 参数
   return $content;
}



$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, 'http://www.9800.com.tw/lotto6/');
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)'); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
curl_setopt ($ch,CURLOPT_FOLLOWLOCATION, true);
$con = curl_exec($ch);  
$date=date("Y-m-d H:i:s");


$ccpp=str_replace('<TR bgColor=#fff9e7 height=18>', 'hhhhh', $con);  
$flccpp1=explode("hhhhh", $ccpp);
$ccpp=$flccpp1[1];



$ccpp=str_replace('</TD>', '', $ccpp);  
$ccpp=str_replace('align=center>', '></td>kkkkk', $ccpp);  
$ccpp=str_replace('align=center>', '></td>kkkkk', $ccpp);  
$ccpp=str_replace('align=center>', 'kkkkk', $ccpp); 
$ccpp=str_replace(' ', '+', $ccpp); 
$ccpp=str_replace('++', '', $ccpp);
$ccpp=str_replace('++', '', $ccpp);
$ccpp=str_replace('+', ',', $ccpp);
$ccpp=strip_tags($ccpp);
$ccpp=trimall($ccpp);

$flccpp=explode("kkkkk", $ccpp);

$qs=$flccpp[1]; 
$hm=$flccpp[3]; 
$sj=$flccpp[2];


header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';

echo '<xml><row expect="2'.$qs.'" opencode="'.$hm.'" opentime="'.$sj.'"/></xml>';

?>
