# hbsisapp
teste hbsis app Laravel/react

Para executar o laravel em um apache:
1. criar um banco de dados com o configurar no arquivo .env na raiz:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hbsisapp
DB_USERNAME=root
DB_PASSWORD=

2. abrir o cmd na raiz do projeto

3. Para executar criar as tabelas no banco de dados usamos o migration: $ php artisan migrate

4. Para regenerar corretamente as classes e seus componentes: $ composer dump-autoload

5.  Para popular o banco de dados executamos o seeder: $ php artisan db:seed

6. iniciar o laravel com $ php artisan serve

7. inicializar o react com outro cmd na raiz $ npm run dev

O aplicativo executar em http://127.0.0.1:8000

