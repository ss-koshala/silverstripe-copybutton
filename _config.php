<?php
use SilverStripe\Core\Config\Config;
use SilverStripe\Admin\LeftAndMain;

Config::inst()->merge(
    LeftAndMain::class,
    'extra_requirements_css',
    array(basename(dirname(__FILE__)) . '/css/GridFieldCopyButton.css')
);
