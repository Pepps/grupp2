<?php

class SearchController extends BaseController {
  //foo.com/search/email_category/foo@foo.com-admin@foo.com_spel+kod-game+code
  public function index($key, $val){
    $keys = explode('_', $key);
    $vals = explode('_', $val);
    $data = [];

    for($i = 0; $i < sizeof($keys); $i++){
      $data[$keys[$i]] = explode('-', $vals[$i]);
    }

    for($i = 0; $i < sizeof($data["status"]); $i++){
      $first = substr($data["status"][$i], 0, 1);
      $last = substr($data["status"][$i], sizeof($data["status"][$i])+1, 1);
      //echo sizeof($data["status"][$i]) . "<br>";
      echo "data: " . $data["status"][$i] . "<br>";
      echo "!: " . $last . "<br>";
      if($first == "!"){
        //return "First char is !";
        (int)$nr = substr($data["status"][$i], 1, sizeof($data["status"][$i])+1);
        return $nr;
      }else if($last == "!"){
        (int)$nr = substr($data["status"][$i], 0, sizeof($data["status"][$i])+1);
        return $nr;
      }else{
        return "not a valid formating";
      }
    }

    //echo "<pre>" . json_encode($data) . "</pre>";
  }

}
