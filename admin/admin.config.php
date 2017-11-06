<?php
require_once('blast_sqlin.php');
$conf['debug']['level']=5;

$conf['db']['dsn']='mysql:host=127.0.0.1;dbname=0xc';
$conf['db']['user']='root';
$conf['db']['password']='root';
$conf['db']['charset']='utf8';
$conf['db']['prename']='blast_';

$conf['safepass']='882288';

$conf['cache']['expire']=0;
$conf['cache']['dir']='_blast_buffer/';
$conf['url_modal']=2;
$conf['action']['template']='blast_Front/admin/';
$conf['action']['modals']='blast_back/admin/';
$conf['member']['sessionTime']=15*60;
$conf['node']['access']='http://localhost:65531';

error_reporting(E_ERROR & ~E_NOTICE);
ini_set('date.timezone', 'asia/shanghai');
ini_set('display_errors', 'Off');

?>