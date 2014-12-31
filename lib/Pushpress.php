<?php
/*
 * PushPress SDK
 * v1.0.0
 */
 
// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('Pushpress needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Pushpress needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('Pushpress needs the Multibyte String PHP extension.');
}

// Pushpress singleton
require(dirname(__FILE__) . '/Pushpress/Pushpress.php');

// Utilities
require(dirname(__FILE__) . '/Pushpress/Util.php');
require(dirname(__FILE__) . '/Pushpress/Util/Set.php');

// Errors
require(dirname(__FILE__) . '/Pushpress/Error/Error.php');
require(dirname(__FILE__) . '/Pushpress/Error/ApiError.php');
require(dirname(__FILE__) . '/Pushpress/Error/ApiConnectionError.php');
require(dirname(__FILE__) . '/Pushpress/Error/AuthenticationError.php');
require(dirname(__FILE__) . '/Pushpress/Error/InvalidRequestError.php');

// Plumbing
require(dirname(__FILE__) . '/Pushpress/Object.php');
require(dirname(__FILE__) . '/Pushpress/ApiRequestor.php');
require(dirname(__FILE__) . '/Pushpress/ApiResource.php');
require(dirname(__FILE__) . '/Pushpress/SingletonApiResource.php');
require(dirname(__FILE__) . '/Pushpress/AttachedObject.php');
require(dirname(__FILE__) . '/Pushpress/List.php');

// Pushpress API Resources
require(dirname(__FILE__) . '/Pushpress/Billing.php');
require(dirname(__FILE__) . '/Pushpress/Calendar.php');
require(dirname(__FILE__) . '/Pushpress/Customer.php');
require(dirname(__FILE__) . '/Pushpress/Invoice.php');
require(dirname(__FILE__) . '/Pushpress/Message.php');
require(dirname(__FILE__) . '/Pushpress/Order.php');
require(dirname(__FILE__) . '/Pushpress/Plan.php');
require(dirname(__FILE__) . '/Pushpress/Preorder.php');
require(dirname(__FILE__) . '/Pushpress/Product.php');
require(dirname(__FILE__) . '/Pushpress/ProductCategories.php');
require(dirname(__FILE__) . '/Pushpress/User.php');
require(dirname(__FILE__) . '/Pushpress/TaxRates.php');
require(dirname(__FILE__) . '/Pushpress/Waiver.php');
require(dirname(__FILE__) . '/Pushpress/Workout.php');
require(dirname(__FILE__) . '/Pushpress/UserWaiver.php');
