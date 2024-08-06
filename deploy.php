<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/vaseapinkov/roofing.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('staging.vaseapincov.com')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/staging.vaseapincov.com');

// Hooks
//before('deploy:symlink', 'artisan:migrate');

// Task install npm packages
before('deploy:symlink', function () {
    run('cd {{release_path}} && npm install');
});


after('deploy:failed', 'deploy:unlock');
