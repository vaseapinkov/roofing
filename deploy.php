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

// Custom Tasks

// Task to build JavaScript assets locally

// Task to build JavaScript assets locally
// Task to package the built assets
task('package:assets', function () {
    runLocally('npm install');
    runLocally('npm run build');
    runLocally('chmod -R 777 public');
    runLocally('tar -czf build.tar.gz public');
    upload('build.tar.gz', '{{release_path}}/build.tar.gz');
    run('cd {{release_path}} && tar -xzf build.tar.gz && rm build.tar.gz');
    runLocally('rm build.tar.gz');
});

// Hooks

before('deploy:symlink', 'artisan:migrate');
before('deploy:symlink', 'package:assets');

after('deploy:failed', 'deploy:unlock');
