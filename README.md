git clone https://github.com/BackDev4/ToDo-Api

cd ToDo-Api

composer i

cp .env.example .env

php artisan key:generate

setup env for Db

php artisan migrate

if you want to do some records do:

php artisan db:seed

php artisan serve

Api routes:
Get    /api/todo get all
Get    /api/todo?status||?date filtred by field
Post   /api/todo create new 
Get    /api/todo/{id}  show one 
Post   /api/todo/{id}  update one
Delete   /api/todo/{id}  Delete one