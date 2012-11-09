<?php
/**
 * Example script demonstrating how to run a task from the CLI.
 * This script would be executed by drush.
 */

// Set base url.
global $base_url;
$base_url = 'http://mydomain.com/site_basepath';

// Create task node.
$node = new stdClass();
$node->type = 'xtask';
node_object_prepare($node);
$node->title = "My Task";
$node->language = LANGUAGE_NONE;LANGUAGE_NONE;LANGUAGE_NONE;LANGUAGE_NONE;

$config = array(
  "command" => "/some/command/to/run.sh"
);
$node->xtasks_config[LANGUAGE_NONE][0]['value'] = json_encode($config);
node_save($node);

// Run task.
xtasks_run_task($node->nid);
