<?php

/**
 * Group custom configuration by plugin. Create a file for each plugin to keep it clean.
 *
 * Moodle core specific is stored in mdl_config table and should be overridden
 * in moodle.php or local-settings.php.
 *
 * All other config is stored in mdl_config_plugins table and should be overridden
 * in a config file matching the plugin name.
 */

// See mdl_config table for possible overrides
if (file_exists(__DIR__ . '/config/moodle.php')) {
  include __DIR__ . '/config/moodle.php';
}

if (file_exists(__DIR__ . '/config/moodlecourse.php')) {
  include __DIR__ . '/config/moodlecourse.php';
}

// Override anything with local settings.
if (file_exists(__DIR__ . '/local-settings.php')) {
  include __DIR__ . '/local-settings.php';
}
