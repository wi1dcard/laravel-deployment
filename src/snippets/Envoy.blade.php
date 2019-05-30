@servers(['web' => 'deployer@laravel-deployment.wi1dcard.cn'])

@task('update', ['confirm' => true])
    cd /var/www/deployment
    git pull origin master
@endtask
