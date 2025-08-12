#  Documentação do LARAVEL
# # Alexandre Gomes de Lira & Guilherme Naville
# # # Introdução
O LAVAREL é um framework moderno usado para facilitar o desenvolvimento web. Ele possui uma estrutura organizada e fácil de ser entendida para facilitar o progresso do desenvolvedor.


# # # Requisitos Iniciais

Antes de instalar o LARAVEL, é necessário ter: PHP, Composer e um Banco de Dados (De sua escolha, por exemplo: MySQL).

## #  Instalação
Para criar um projeto, use o Composer:
composer create-project laravel/laravel nome-do-projeto

Esse comando baixa e configura o LARAVEL em uma pasta cujo nome foi escolhido anteriormente.

Para rodar o servidor:
php artisan serve

O comando "php artisan serve" inicia o servidor.

## # Diretórios
A estrutura dos diretórios do LARAVEL foi criada para fornecer uma base organizada e eficiente facilitando o desenvolvimento de projetos menores, até os projetos mais complexos.

Alguns dos Diretórios importantes:
- Bootstrap -> Contém o "app.php" que inicializa o framework.
- Config -> Contém todos os aplicativos de arquivos do seu aplicativo.
- Routes -> Diretório que contém todas as definições de rotas para a sua aplicação.
- Resources -> Contém suas visualizações, tanto os ativos, quanto os não compilados.

## # Exemplo de Rota Simples
``` php
// Rota básica que retorna um texto
Route::get('/hello', function () {
           return 'Olá, mundo!';
}};
```

IB: Ana Luiza e Felipe Alexandre, eles me ajudaram com essa parte falando que era importante durante o desenvolvimento da documentação. <3

##  # Conclusão
Laravel se destaca como um dos frameworks PHP mais completos e acessíveis para o desenvolvimento de aplicações web modernas. Sua estrutura clara, recursos poderosos e uma comunidade ativa tornam o processo de desenvolvimento mais ágil, seguro e escalável. Ao seguir boas práticas e aproveitar as ferramentas que o Laravel oferece, desenvolvedores podem criar desde soluções simples até sistemas robustos com alta qualidade e produtividade.

