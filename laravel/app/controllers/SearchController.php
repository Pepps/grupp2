<?php

class SearchController extends BaseController {
  //foo.com/search/email_category/foo@foo.com-admin@foo.com_spel+kod-game+code
  public function index($key, $val){
    $keys = explode('_', $key);
    $vals = explode('_', $val);
    $data = [];

    for($i = 0; $i < sizeof($keys); $i++){
      $data[$keys[$i]] = [explode('-', $vals[$i])];
    }

    /*foreach ($keys as $key) {
      //$data[$key] = [];
      foreach ($vals as $item) {
        $data[$key] = explode('-', $item);
      }
    }*/


    /*switch ($key) {
      case "":
      code to be executed if n=label1;
      break;
      case label2:
      code to be executed if n=label2;
      break;
      case label3:
      code to be executed if n=label3;
      default:
      code to be executed if n is different from all labels;
    }*/


    /*foreach ($vals as $item) {
      $sometext = explode('-', $item);
    }*/

    $sometext = explode("-", $vals[0]);

    return var_dump($data["category"]);
    //return sizeof($vals);
  }

}
