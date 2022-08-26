# DesafioBlueService

Este projeto consiste em ser uma loja virtual. 

# Funções 
-Produtos
  - Criar
  - Listar
  - Editar
  - Excluir
- Categorias 
  - Criar
  - Listar
  - Eitar
  - Excluir
- Características
  - Criar 
  - Listar
  - Editar
  - Excluir
- Loja
  - Listar Produtos
  - Lista Produtos por categoria 

# Tecnologias envolvidas

- [PHP](https://www.php.net/) 8.1 
- [Composer](https://getcomposer.org/) 
- [Postgreess](https://www.postgresql.org/)
- [Symfony](https://symfony.com/)

# Instalação

Assegure-se de ter instalado as tecnologias pontuadas anteriormente Depois de clonar o respositorio, execute os seguintes comandos.
```sh
 cd DesafrioBlueService
 composer install
 php bin/console make:entity  (comando para gerar migration)
 php bin/console make:migration  (comando para executar migration)
 php bin/console doctrine:fixtures:load  )comando para executar as seeds)
 symfony server:start (comando para rodar o server)
```
Verifique a implantação navegando até o endereço do servidor em seu navegador preferido.

```sh
127.0.0.1:8000
```
