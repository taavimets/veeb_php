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
$link = $http->getLink(array('controller' => 'main'));
$item->set('link', $link);
$nav->add('items', $item->parse());


$item->set('name', 'Contact');
$link = $http->getLink(array('controller' => 'contact'));
$item->set('link', $link);
$nav->add('items', $item->parse());

$mainContent->set('nav', $nav->parse());
