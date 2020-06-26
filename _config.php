<?php
use SilverStripe\Core\Config\Config;
use SilverStripe\Admin\LeftAndMain;

Config::modify()->set(
    LeftAndMain::class,
    'extra_requirements_css',
    array('/_resources/vendor/unisolutions/silverstripe-copybutton/css/GridFieldCopyButton.css')
);
