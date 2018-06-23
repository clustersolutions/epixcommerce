To test...you need to have composer installed.

1. Get V3 installed and verify that it's working. https://github.com/clustersolutions/oscommerce/tree/hpdl

2. Eloquent requires tables to have primary key. Run these in your MySQL DB.

   "ALTER TABLE osc_counter ADD id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT FIRST;
    ALTER TABLE osc_whos_online ADD id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT FIRST;
    ALTER TABLE osc_sessions MODIFY id CHAR(128);"

3. Clone laravel-oscommerce, "git clone -b model_migration git@github.com:clustersolutions/laravel-oscommerce.git".

4. cd into the dir laravel-oscommerce, "cd laravel-oscommerce".

5. Execute "composer install".

6. Create your env, "cp .env.example .env", and edit your .env to connect to MySQL.

7. Copy the V3 settings.ini file that was create during its install, for example, "cp /home/oscommerce/osCommerce/OM/Config/settings.ini laravel-oscommerce/config/settings.ini"

8. Generate encryption key, in your laravel-oscommerce dir, execute "php artisan key:generate".

9. Start a Laravel http server, "php artisan serve".

10. That's it, goto http://127.0.0.1:8000 to see the laravel-oscommerce install.