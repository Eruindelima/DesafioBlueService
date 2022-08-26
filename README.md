# DesafioBlueService

Este projeto consiste em ser uma loja virtual. 

# Funções 

- Categorias 
  - Criar
  - listar
- Características
  - Criar 
  - listar
-Loja
  - Listar Produtos
  - Lista Produtos por categoria 

# Tecnologias envolvidas

- [PHP](https://www.php.net/) 8.1 
- [composer](https://getcomposer.org/) 
- [pstgreess](https://www.postgresql.org/)
- [Symfony](https://symfony.com/)

# Instalação

Assegure-se de ter instalado as tecnologias pontuadas anteriormente Depois de clonar o respositorio, execute os seguintes comandos.
```sh
 [cd]()NomeDoProjeto
 composer install
 php bin/console make:entity  comando para gerar migration
 php bin/console make:migration  comando para executar migration
 php bin/console doctrine:fixtures:load  comando para executar as seeds
 symfony server:start (comando para rodar o server)
```
Verifique a implantação navegando até o endereço do servidor em seu navegador preferido.

```sh
127.0.0.1:8000
```
