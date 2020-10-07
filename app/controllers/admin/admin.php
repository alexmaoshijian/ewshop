<?php
  namespace admin;

  use controllers\BaseControllers;

  class Admin extends BaseControllers {
    //新建Twig对象
    public function __construct() {
      $loader = new \Twig\Loader\FilesystemLoader(TEMPDIR.'/app/views/admin');
      $this->twig = new \Twig\Environment($loader, [

      ]);
    }
  }
