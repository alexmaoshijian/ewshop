<?php
  namespace controllers;

  class BaseControllers {

    protected $twig;  //定义变量
    protected $data = [];  //定义数据数组

    //处理数据
    protected function assign($var, $value=null) {
      if(is_array($var)){
        $this->data = array_merge($this->data, $var);
      } else {
        $this->data[$var] = $value;
      }
    }

    //输出数据到模板
    protected function display($template) {
      echo $this->twig->render($template.'.html', $this->data);
    }

    //成功跳转
    protected function success($url, $mess) {
      echo "<script>";
      echo "alert('{$mess}');";
      if(!empty($url)){
        echo "location.href='{$url}'";
      }
      echo "</script>";
    }

    //失败跳转
    protected function error($url, $mess) {
      echo "<script>";
      echo "alert('{$mess}');";
      if(!empty($url)){
        echo "location.href='{$url}'";
      }
      echo "</script>";
    }
  }
