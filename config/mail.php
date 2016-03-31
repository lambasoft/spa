<?php

return array(
  "driver" => "smtp",
  "host" => "mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "9ea0c30677b6cf",
  "password" => "1052bdd22bd293",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);