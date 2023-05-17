## Carrinho de Compras 🛒

**Projeto simples de Carrinho de Compras para implementação futura em um projeto de e-commerce**

Primeiro, faça o clone do projeto em seu ambiente:

```bash
https://github.com/marciodeveloper/shopping-cart.git
```

Crie o arquivo .env a partir do arquivo de exemplo:

```bash
cd shopping-cart
```

```bash
cp .env-example .env
```

Logo após, configure o seu banco de dados no arquivo `.env`

Execute o composer, para instalar as dependências:

```bash
composer install
```

Crie a chave do Laravel:

```bash
php artisan key:generate	
```

Rode as migrations, e execute o seeder no projeto:

```bash
php artisan migrate
php artisan db:seed
```

Após os procedimentos acima, execute o projeto em seu servidor:

```bash
php artisan serve	
```

Pronto! Seu projeto deverá estar rodando, conforme link abaixo:

http://localhost:8000
