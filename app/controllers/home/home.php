<?php
  namespace home;

  use controllers\BaseControllers;

  class Home extends BaseControllers {
    //新建Twig对象
    public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader(TEMPDIR.'/app/views/'.TEMPNAME);
      $this->twig = new \Twig\Environment($loader, [

      ]);
    }
  }
