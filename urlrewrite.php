<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/kabinet-prodavtsa/moi-obyavleniya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/kabinet-prodavtsa/moi-obyavleniya/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/o-servise/vakansii/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-servise/vakansii/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/o-servise/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-servise/news/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/obyavleniya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/obyavleniya/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/products/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
