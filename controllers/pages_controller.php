<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 29-03-2016
 * Time: 19:30
 */
  class PagesController {
      public function home() {
          $first_name = 'Jon';
          $last_name  = 'Snow';
          require_once('views/pages/home.php');
      }

      public function error() {
          require_once('views/layout/error.php');
      }
  }
?>