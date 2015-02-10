<?php

class SearchController extends BaseController {
  //foo.com/search/project/email_category/foo@foo.com-admin@foo.com_spel+kod-game+code
  public function index($option, $key, $val){
    $keys = explode('_', $key);
    $vals = explode('_', $val);
    $data = [];

    for($i = 0; $i < sizeof($keys); $i++){
      $data[$keys[$i]] = explode('-', $vals[$i]);
    }

    /*for($i = 0; $i < sizeof($data["status"]); $i++){
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
    }*/
    $json = json_encode($data);
    echo "<pre>" . $option . ": " . $json . "</pre>";
    $query = 'SELECT * FROM ' . $option . ' WHERE';

    foreach($data as $key => $value){
      $query = $query . ' ' . $key . ' LIKE ';
      foreach($value as $string){
        $split = explode('+', $string);
        foreach ($split as $explode){
        $query = $query . " '%" . $explode . "%'";
          if(end($split) !== $explode){
            $query = $query . " AND";
          }
        }
        if(end($value) !== $string) {
          $query = $query . "' OR";
        }
      }
      if(end($data[$key]) !== $key){
        $query = $query . "' AND";
      }
    }

    $query = rtrim($query, " AND");
    $query = rtrim($query, " OR");
    $query = $query . "';";
    echo $query;
  }

}
