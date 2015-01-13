<?php

class Pushpress_Customer extends Pushpress_ApiResource
{
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id, $apiKey=null)
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
  
  public function CreateWaiver($params, $apiKey) {
        
  }
  
  
  public static function all($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $apiKey);
  }
  
    public function subscriptions($params=null, $apiKey=null) {
              echo '<br>getting sub';
        $requestor = new Pushpress_ApiRequestor($this->_apiKey);
        var_dump($requestor);
        echo '<pre>';
        var_dump($this);
        echo '</pre>';
        $url = $this->instanceUrl() . '/subscriptions';
        echo '<bR>url: ' . $url;
        
        list($response, $apiKey) = $requestor->request('get', $url, $params);
        $this->refreshFrom($response, $apiKey);
        return $this;
  }
      
       
}
