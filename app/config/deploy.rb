set :application, "danielle"
set :domain, "#{application}.rithis.com"
set :deploy_to, "/var/www/#{domain}"

set :repository, "git://github.com/rithis/#{application}.git"
set :scm, :git

set :shared_files, ["app/config/parameters.yml", "composer.phar"]
set :shared_children, [app_path + "/logs", web_path + "/uploads", "vendor"]

set :user, "www-data"
set :keep_releases, 5
set :update_vendors, true

role :app, domain
