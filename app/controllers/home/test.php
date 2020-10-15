<?php
  namespace home;

  use models\BaseDao;

  class Test extends Home {
    function index(){
      $db = new BaseDao();
      //$data = $db->debug()->select('link', ['name', 'ord'], ['LIMIT'=>[2,3],'id[>]'=>1, 'ORDER'=>['ord'=>'DESC', 'id'=>'ASC']]);
      $data = $db->count('link', '*');
      
      dd($data);
    }
  }
