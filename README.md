# Projeto de teste Droga Raia.

Obs: Para executar este teste você precisa do docker e docker-compose instalado na maquina

1 - Para executar o projeto basta rodar o comando abaixo:

	docker-compose up


2 - Neste projeto estamos utilizando Lumen o Micro-Framework do Laravel

    Este foi escolhido devido a baixa complexidade do projeto, não é preciso de todo o stack de bibliotecas do Laravel.

## Comandos úteis

Gerando projeto do Lumen utilizando conteiner do composer.

	docker run --rm --interactive --tty -v $PWD/lumen:/app composer create-project --prefer-dist laravel/lumen ./


Tempo de desenvolvimento:

  Dia 1: Iniciado das 15h as 16h

  Dia 2: Iniciado 13:30 as 16h

### Dependencias:

    Todas as dependencias podem ser encontradas no arquivo composer.json

### Referências: 

      Para criação das imagens do docker - https://github.com/henriqueweiand/test-send4-lumen-crud