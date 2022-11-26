# Getting-started-with-Laravel-PHP-framework
Install php and composer <br>
`composer create-project laravel/laravel <app_name>` -> create laravel project <br>
`composer require laravel/ui --dev` -> install package ui <br>
`php artisan ui bootstrap --auth` -> create authentication ui with Bootstrap <br>
`npm install && npm run dev` -> build tất cả asset vào các nhóm file trong folder "resource" <br>

`php artisan serve` -> run project lên server <br>
`php artisan config:cache` -> mỗi lần thay đổi file .env cần config lại cache <br>
`php artisan migrate` -> run hàm up migrate database <br>
`php artisan migrate:rollback` -> run hàm down migrate <br>
`php artisan migrate:refresh` -> xóa hết các migrate và chạy lại

`php artisan make:model <model_name>` -> tạo file model trong app/Models <br>
`php artisan make:model <model_name> -m` -> tạo model và cả migrate (eloquent ORM) <br>

`php artisan make:controller <controller_name>` -> tạo file controller trong app/Http/Controllers <br>
`php artisan make:controller <controller_name> --resource` -> tạo controller với nhiều hàm có sẵn, và trong Route chỉ cần gọi hàm resource là dùng đc tất cả hàm của controller <br>

`php artisan make:seeder <seeder_name>` -> tạo seeder để auto create data <br>
`php artisan db:seed` -> run seeder <br>
`php artisan db:seed --class=<class_name>` -> run 1 seed cụ thể <br>

`php artisan make:request <request_name>` -> tạo request <br>

`php artisan make:middleware <middleware_name>` -> tạo middleware, có tác dụng như hàng rào giúp giới hạn các object được truy cập -> ta cần đăng kí middleware trong file App/Http/kernel.php <br>

`php artisan route:list` -> danh sách các route <br>

`composer dump-autoload` -> composer load các package cần thiết đc khai báo
