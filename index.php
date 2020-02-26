<?php
/**
 * User: oscar
 * Date: 25-02-20
 * Time: 10:46
 */

use P4NL_DATABASE_INTERFACE\ApiConnector;

$conn = new ApiConnector(true);
var_dump($conn->debug());
