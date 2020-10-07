<?php
  namespace admin;

  class Demo extends Admin {

    function index(){
      echo "index.....";
    }

    function add(){
      echo "add.......";
      $this->assign('name', 'Alex');
      $this->assign('title', 'this is a test');
      $this->assign(['aaa', 'bbb', 'ccc']);

      $this->display('index/index');
    }
  }
