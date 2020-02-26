### Projeto de teste Droga Raia.

1 - Para executar o projeto basta rodar o comando abaixo:

	docker-compose up


## Comandos úteis

Gerando projeto do Lumen utilizando conteiner do composer.

	docker run --rm --interactive --tty -v $PWD/lumen:/app composer create-project --prefer-dist laravel/lumen ./
