<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-52-70-186-184.compute-1.amazonaws.com';
$CFG->dbname    = 'd3hg1b60shlj9m';
$CFG->dbuser    = 'fzemllrgwdehuh';
$CFG->dbpass    = '474f465875cd57b4a5b4ed40bd80d56a20f72cc479f219ac9972311309fc601f';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://moodletheme.herokuapp.com/';
$CFG->dataroot  = 'try /tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
