<?php

require_once("../config.php");
require_once("../base/exceptions.php");
require_once("../base/helpers.php");
require_once("../base/codes.php");
require_once("../base/db.php");
require_once("../base/get_controller_name.php");

echo "<h3>Democratize.ca 0.4 (Experimental)</h3>";


static $control_keys = array("ctla","ctlb","ctlc","ctld");


foreach($_GET as $k => $v)
  $_GET[$k] = feels_good_man($v);


var_dump($_GET);

