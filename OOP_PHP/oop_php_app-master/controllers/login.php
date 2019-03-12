<?php
/**
 * Created by PhpStorm.
 * User: taavi.mets
 * Date: 12.03.2019
 * Time: 9:43
 */

$login = new Template('login');

$login->set('username', 'User');
$login->set('password', 'Pass');
$login->set('button', 'Log In');

$link = $http->getLink(array('controller' => 'login_do'));
$login->set('link', $link);

$mainContent->set('content', $login->parse());