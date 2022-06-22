<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2Service{
 use ConsumesExternalService;
 /**
 * The base uri to consume the User1 Service
 * @var string
 */
 public $baseUri;
 public function __construct()
 {
 $this->baseUri = 
config('services.users2.base_uri');
 }
 /**
 * Obtain the full list of Users from User1 Site
 * @return string
 */
 
 public function obtainUsers2()
 {
 return $this->performRequest('GET','/users'); //<— this code will call the GET localhost:8000/users (our site1)//
 }
}