<?php

class Pushpress_Report extends Pushpress_ApiResource
{
    
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function generate($report_name, $params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedReport($class, $report_name, $params, $apiKey);
  }

}
