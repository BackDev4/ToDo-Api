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
Get    /api/todo get all <br>
Get    /api/todo?status||?date filtred by field <br>
Post   /api/todo create new <br>
Get    /api/todo/{id}  show one <br>
Post   /api/todo/{id}  update one <br>
Delete   /api/todo/{id}  Delete one