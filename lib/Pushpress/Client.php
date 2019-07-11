<?php
class Pushpress_Client extends Pushpress_ApiResource
{
    
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $apiKey);
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
  
  public static function retrieveEmpty($id=null, $apiKey=null)
  {      
    $class = get_class();
    return self::_scopedRetrieveEmpty($class, $id, $apiKey);
  }
  
  public static function settings($type=null) {
        $class = get_class();
        $url = self::classUrl($class);
        $url .= "/settings/$type";
        $requestor = new Pushpress_ApiRequestor();
        list($response, $apiKey) = $requestor->request('get', $url);
        return Pushpress_Util::convertToPushpressObject($response, $apiKey); 
  }

  public static function register() {
        $class = get_class();
        $url = self::classUrl($class);
        $url .= "/register";
        $requestor = new Pushpress_ApiRequestor();
        list($response, $apiKey) = $requestor->request('post', $url);
        return Pushpress_Util::convertToPushpressObject($response, $apiKey); 
  }

  public static function locations() {
    return true;
        $class = get_class();
        $url = self::classUrl($class);
        $url .= "/locations";
        $requestor = new Pushpress_ApiRequestor();
        list($response, $apiKey) = $requestor->request('get', $url);
        return Pushpress_Util::convertToPushpressObject($response, $apiKey); 
  }

  public static function saveSettings($type=null, $settings=array()) {
        $class = get_class();
        $url = self::classUrl($class);
        $url .= "/settings/";
        $requestor = new Pushpress_ApiRequestor();

        if (is_array($type)) { 
          // batch setting to save
          $params = array(
            "batch" => json_encode($type)
          );
        }
        else { 
          $params = array(
            "batch" => array(
              "type" => $type,
              "batch" => json_encode($settings)
            )          
          );  
        } 

        list($response, $apiKey) = $requestor->request('post', $url, $params);
        return Pushpress_Util::convertToPushpressObject($response, $apiKey); 
  }
    
  public static function referralSources() {
    $class = get_class();
    $url = self::classUrl($class);
    $url .= "/referralsources";
    $requestor = new Pushpress_ApiRequestor();
  
    list($response, $apiKey) = $requestor->request('get', $url);
    return self::scopedConstructFrom($class, $response, $apiKey);
  }

  
   
}
