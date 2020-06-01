<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'datadirectory' => '/data',
  'instanceid' => '<id>',
  'passwordsalt' => '<blah>',
  'secret' => '<blah>',
  'trusted_proxies' =>
  array (
    0 => '172.19.x.x/16',
  ),
  'trusted_domains' => 
  array (
    0 => 'nextcloud.<domain>.com',
  ),
  'dbtype' => 'mysql',
  'version' => '18.0.4.2',
  'overwrite.cli.url' => 'https://nextcloud.<domain>.com',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '<dbpass>',
  'installed' => true,
);
