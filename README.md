
## O projeto

Projeto desenvolvido utilizando laravel versão 9 com PHP 8, abaixo pacotes adicionados:

- [L5 Repository](https://github.com/andersao/l5-repository).


## O que faria se tivesse mais tempo?

- A api construída, está aberta e não necessita de tokens para ser consumida, desta maneira eu adicionaria, autenticações nas chamadas;

- Faltaram testes unitários, que nesse projeto não foi implementado, com mais tempo era algo que estaria na lista;

- Utilizaria os factories nos seeders, nesse projeto optei por fixar os valores dos seeders;

- Adicionaria logs de erros, por mais que o storage do laravel adicione os logs, um log mais objetivo e especificado, ajuda a identificar os problemas de forma mais ágil;

- Validações no backend;

- Paginações nas chamdas.

## Como executar?

- Com docker instalado em seu computador apenas rodar docker-compose up -d

Obs: se atentar ao arquivo custom-entrypoint.sh se usar sistemas unix utilizar o line CRLF, caso contrário utilizar o LF.

- As rotas podem ser testadas via postman, a collection encontra-se na raiz do projeto.