<?php
use SilverStripe\Core\Config\Config;
use SilverStripe\Admin\LeftAndMain;

Config::modify()->set(
    LeftAndMain::class,
    'extra_requirements_css',
    array(basename(dirname(__FILE__)) . '/css/GridFieldCopyButton.css')
);
