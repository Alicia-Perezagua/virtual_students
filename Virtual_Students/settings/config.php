<?php
error_reporting( error_reporting() & ~E_NOTICE );
class Config{
  const SERVERNAME = 'localhost';
  const USERNAME = 'root';
  const PASSWORD = '';
  const DATABASE =  'virtual_students';
  const URL = 'http://localhost/Virtual_Students/public/';
  const PREFIX = 'VSts_';
  const PREFIX_PAGE = 'page_';
  const PATH_ROOT = 'Virtual_Students/public/';
}
?>