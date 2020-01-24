<?php

$sugar_version = null;
include 'sugar_version.php';

$host = 'localhost';
$flav = strtolower($sugar_flavor);
$demoData = true;
$version = $sugar_version;

$versionForDB = substr(str_replace('.', '', $version), 0, 2);

$sugar_config_si = array (
    'setup_db_host_name' => '127.0.0.1',
    'setup_db_database_name' => "sugar_{$versionForDB}_{$flav}",
    'setup_db_drop_tables' => 1,
    'setup_db_create_database' => 1,
    'setup_site_admin_user_name' => 'admin',
    'setup_site_admin_password' => 'asdf',
    'setup_db_create_sugarsales_user' => 0,
    'setup_db_admin_user_name' => 'root',
    'setup_db_admin_password' => 'root',
    'setup_db_type' => 'mysql',
    'setup_license_key' => 'd3ae05df3f1035fbdee311839047f6aa',
    'setup_site_url' => "http://$host/sugar-builds/$version/$flav/sugarcrm",
    'default_currency_iso4217' => 'USD',
    'default_currency_name' => 'US Dollars',
    'default_currency_significant_digits' => '2',
    'default_currency_symbol' => '$',
    'default_date_format' => 'Y/m/d',
    'default_time_format' => 'H:i',
    'default_decimal_seperator' => '.',
    'default_export_charset' => 'ISO-8859-1',
    'default_language' => 'en_us',
    'default_locale_name_format' => 's f l',
    'default_number_grouping_seperator' => ',',
    'export_delimiter' => ';',
    'demoData' => 'yes',
    'developerMode' => true,
    'setup_fts_type' => 'Elastic',
    'setup_fts_host' => 'localhost',
    'setup_fts_port' => '9200',
    'logger' => array (
        'level' => 'warn',
    ),
);
