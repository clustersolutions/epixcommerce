To test...you need to have composer installed.

1. Get V3 installed and verify that it's working. https://github.com/clustersolutions/oscommerce/tree/hpdl

2. Clone laravel-oscommerce, "git clone -b model_migration git@github.com:clustersolutions/laravel-oscommerce.git".

3. cd into the dir laravel-oscommerce, "cd laravel-oscommerce".

4. Execute "composer install".

5. Create your env, "cp .env.example .env", and edit your .env to connect to MySQL.

6. Copy the V3 settings.ini file that was create during its install, for example, "cp /home/oscommerce/osCommerce/OM/Config/settings.ini laravel-oscommerce/config/settings.ini"

7. Generate encryption key, in your laravel-oscommerce dir, execute "php artisan key:generate".

8. Start a Laravel http server, "php artisan serve".

9. That's it, goto http://127.0.0.1:8000 to see the laravel-oscommerce install.