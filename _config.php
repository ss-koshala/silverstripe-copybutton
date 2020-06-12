<?php
use SilverStripe\Core\Config\Config;

Config::inst()->update(
    'LeftAndMain',
    'extra_requirements_css',
    array(basename(dirname(__FILE__)) . '/css/GridFieldCopyButton.css')
);
