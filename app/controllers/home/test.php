<?php
  namespace home;

  use models\BaseDao;

  class Test extends Home {
    function index(){
      $db = new BaseDao();
      $data = $db->debug()->select('product', ['name(linkname)', 'money']);
      dd($data);
    }
  }
