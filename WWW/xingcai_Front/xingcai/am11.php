<?php
$lastNo=$this->getGameLastNo(67);
//��ȡָ���н�������
$zddata = $this->getGameZdData(67,$lastNo['actionNo']);
$opencode =$zddata?$zddata:randKeys(5);
//�жϵ�ǰadmin�Ƿ��н������ڣ����������ָ�������ֿ���
//add��ʱ���������߼�


header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.$opencode.'" opentime="'.$lastNo['actionTime'].'"/></xml>';

/* ��������� */
function randKeys($len){
    $array=array("01","02","03","04","05","06","07","08","09","10","11");
	$charsLen = count($array) - 1; 
    shuffle($array);
    $output = ""; 
  //  for ($i=0; $i<$len; $i++){ 
		
    $a= $array[mt_rand(0, $charsLen)];
		$b= $array[mt_rand(0, $charsLen)];
		while($a==$b)
		{
     $b= $array[mt_rand(0, $charsLen)];
		}
		$c=$array[mt_rand(0, $charsLen)];
		while($c==$a||$c==$b)
		{
      $c= $array[mt_rand(0, $charsLen)];
		}

		$d= $array[mt_rand(0, $charsLen)];
		while($d==$a||$d==$b||$d==$c)
		{
			$d= $array[mt_rand(0, $charsLen)];
		}
		$e= $array[mt_rand(0, $charsLen)];
		while($e==$a||$e==$b||$e==$c||$e==$d)
		{
			$e= $array[mt_rand(0, $charsLen)];
		}
       //$output .= $array[mt_rand(0, $charsLen)].",";
  //  }  
	 return $outpuet=$a.','.$b.','.$c.','.$d.','.$e;
   // return rtrim($output, ',');
}
?>