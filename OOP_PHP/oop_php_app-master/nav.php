<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 12.03.2019
 * Time: 8:48
 */

$nav = new Template('nav.nav');
$item = new Template('nav.item');

$item->set('name', 'Main Page');
$nav->add('items', $item->parse());

$item->set('name', 'Contact');
$nav->add('items', $item->parse());

$mainContent->set('nav', $nav->parse());