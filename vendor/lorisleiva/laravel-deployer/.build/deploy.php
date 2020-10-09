<?php

namespace Deployer;

require 'recipe/laravel-deployer.php';

/*
 * Includes
 */

/*
 * Options
 */

set('strategy', 'upload');
set('application', 'Laravel');
set('repository', 'https://github.com/pacski/new-laravel.git');
set('php_fpm_service', 'php7.4-fpm');

/*
 * Hosts and localhost
 */

host('https://laetitcreation-pacski.herokuapp.com')
    ->set('deploy_path', '/var/www/https://laetitcreation-pacski.herokuapp.com')
    ->user('root');

/*
 * Strategies
 */

/*
 * Hooks
 */

after('hook:build', 'npm:install');
after('hook:build', 'npm:production');
after('hook:ready', 'artisan:storage:link');
after('hook:ready', 'artisan:view:clear');
after('hook:ready', 'artisan:config:cache');
after('hook:ready', 'artisan:migrate');
after('hook:ready', 'artisan:horizon:terminate');
after('hook:done', 'fpm:reload');
after('hook:rollback', 'fpm:reload');