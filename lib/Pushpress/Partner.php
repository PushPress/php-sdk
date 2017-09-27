<?php

class Pushpress_Partner extends Pushpress_ApiResource
{
  public static function classUrl($class=null) {
        return "/v1/partners";
  }
    
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id, $params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $apiKey, $params);
  }

  public static function create($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedCreate($class, $params, $apiKey);
  }

  public function delete($params=null)
  {
    $class = get_class();
    return self::_scopedDelete($class, $params);
  }
  
  public function save()
  {
    $class = get_class();
    return self::_scopedSave($class);
  }
  
  public static function all($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $apiKey);
  }


  public static function call($partner="", $action="", $params=array()) {
    $class = get_class();
    // self::_validateCall('all', $params, $apiKey);
    $requestor = new Pushpress_ApiRequestor($apiKey);
    
    $url = self::_scopedLsb($class, 'classUrl', $class);
    $url .= "/$partner";

    if ($params['args']) { 
      $params['args'] = json_encode($params['args']);
    }
    
    $params['action'] = $action;

    list($response, $apiKey) = $requestor->request('post', $url, $params);
    return Pushpress_Util::convertToPushpressObject($response, $apiKey);    
  }
  
   
}
