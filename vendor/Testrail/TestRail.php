<?php

namespace Testrail;

use Exception;
/**
 * Created by PhpStorm.
 * User: tikolakin
 * Date: 15.02.16
 * Time: 23:35
 */
class TestRail extends TestRailAPIClient
{
    private $url;
    private $user;
    private $pass;

    public function __construct($argv)
    {
        $this->setParams($argv);
        parent::__construct($this->url);
        parent::set_user($this->user);
        parent::set_password($this->pass);
    }

    public function setParams($argv) {
        if (!isset($argv) ||  count($argv) < 4) {
            throw new Exception("Missed arguments. \n Usage: \n script.php test_rail_url username password");
        }
        $this->url = $argv[1];
        $this->user = $argv[2];
        $this->pass = $argv[1];

    }
}
