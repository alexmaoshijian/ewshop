<?php

  if(!function_exists('dd')) {
    //开发的时候用这个来输出错误
    function dd(...$args) {
      http_response_code(500);

      foreach($args as $x) {
        var_dump($x);
      }

      die(1);
    }
  }
