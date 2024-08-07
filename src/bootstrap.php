<?php

class Bootstrap {
    private string $status = "stopped";

    public function __construct(string $status = "booted") {
        $this->status = $status;
    }

    public function __destruct() {
        $this->status = "stopped";
    }

    public function echoStatus() {
        echo "<h1 style='text-align: center'>Status: ". $this->status . "</h1>" . PHP_EOL;
        return $this;
    }

    public function getPhpInfo() {
        phpinfo();
        return $this;
    }
}