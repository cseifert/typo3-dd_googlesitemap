<?php

/*********************************************************************
* Extension configuration file for ext "dd_googlesitemap".
*
* Generated by ext 28-09-2016 09:55 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Google sitemap',
  'description' => 'High performance Google sitemap implementation that avoids typical errors by other similar extensions',
  'category' => 'fe',
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'shy' => '',
  'dependencies' => '',
  'conflicts' => '',
  'priority' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => 'typo3temp/dd_googlesitemap',
  'modify_tables' => 'pages',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'author_company' => 'SIA "ACCIO"',
  'version' => '2.1.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-7.6.999',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'suggests' => 
  array (
  ),
  'user' => 'dmitry',
  'comment' => 'Warning! Database update required if you upgrade from versions less than 2.1.0!',
);

?>