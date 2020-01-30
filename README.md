# teste Desafio Bureau Consumidor app Laravel/react

## Tecnologias adotadas
- Para o **Backend**, utilizei o framework de ORM, **Laravel**, na versão mais atual(6.2). O framework em *PHP* é preparado para separação de **Frontend**, com suporte nativo para Vue.JS, possui estrutura *MVC* e para versionamento de *Banco de Dados* tem os **Migrations** que criam e atualizam o banco dedados pelo terminal, e os **Seeders** que populam o banco com valores "defaults". Também suporta varias conexões de bancos de dados diferentes no mesmo *controller* e *model*.
- Já no **Frontend** utilizei o React.JS pela sua praticidade e agilidade. No laravel defino o uso do React com o comando ``` $ php artisan preset react ```
- Para a base de dados A, que precisa de mais segurança, entre as tecnologias de Banco de dados citadas, proponho o uso do Postpostgress, pois tem mais segurança, e tem fácil uso e curva de aprendizado.
- Para a Base B, proponho o uso de MySql pela segurança e rapidez, que se mostra mais rapido em testes realizados. para melhor segurança pode ser implementado *stored procedures* que aumentam a segurança do banco de dados.
- Para a Base C, proponho o MongoBD, um bd NoSQL que possui muita rapidez por oferecer alta disponibilidade, usando conjuntos replicados.
- Todas as tecnologias listadas acima podem ser executadas em apache local ou servidor cloud/hospedagem.

## Arquitetura utilizada
A arquitetura do App é MVC, sendo que os bancos de dados estão na 3º forma normalizada para a base A na qual implementei o consumo do app.

![mvc-processos](https://user-images.githubusercontent.com/7758489/73460905-0a776000-4358-11ea-8bb7-286f8e334647.png)
> *Imagem modificada, retirada da internet:* https://www.javatpoint.com/laravel-interview-questions *acesso: 29/01/2020*

A modelo de Banco de dados formalizado:

![Base A](https://user-images.githubusercontent.com/7758489/73460809-d9972b00-4357-11ea-94c9-bd6a3bdc1cf8.png)
> *Imagem criada no MySql Workbench CE*

## Dados armazenados

### Na base A:
- CPF
- Nome
- Endereço
- Lista de dívidas
- Empresas

### Na base B:
- Idade
- Lista de bens
- Endereço
- Fonte de renda
- Profissão

### Na base C:
- Última consulta do CPF em um Bureau de crédito.
- Movimentação
Dados relacionados a última compra com cartao de crédito vinculado ao CPF:
- Empresa
- Número de parcelas
- Tipo de pagamento
- Divida em atrazo

## Para executar o laravel em um apache:
1. criar um banco de dados com o configurar no arquivo .env na raiz:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=boreauapp
DB_USERNAME=postgres
DB_PASSWORD=YOURPASS
```

2. abrir o cmd na raiz do projeto

3. Para executar criar as tabelas no banco de dados usamos o migration:
``` $ php artisan migrate ``` 

4. Para regenerar corretamente as classes e seus componentes:
``` $ composer dump-autoload ``` 

5.  Para popular o banco de dados executamos o seeder:
``` $ php artisan db:seed ```

6. iniciar o laravel com:
``` $ php artisan serve ```

7. inicializar o react com outro cmd na raiz
``` $ npm run dev ```

O aplicativo(local) irá executar em http://127.0.0.1:8000
