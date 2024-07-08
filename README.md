# **API PHP (Laravel) - Lista de Pokémons**

Api simples para listagem de pokémons com as seguintes funcionalidades:

- Listagem de pokémons
  - Listagem de todos os pokémons (recebe o parâmetro página)
  - Filtro da listagem (receber o parâmetro para a listagem)
    - Busca por **Nome**
    - Busca por **Tipo**
    - Busca por **Habilidades**
- Informações do Pokémon
  - ID
  - Foto (caminho da imagem hospedado)
  - Nome
  - Tipo
  - Habilidades
  - Tamanho e peso
## Requisitos:
- PHP 5.6.40 ou superior
- Laravel 5.4.* ou superior
- Apache 

## Run:
- Clonar o repositório

- Criar um BD MySQL:
  - Configurações do BD
    - Engine: InnoDB
    - Cherset: utf8
    - Collate: utf8_unicode_ci
    - Nome do bd: pokedex
    - Nome de usuário: root
    - Senha: (vazia)

- Instalar dependências
```bash
composer install -o --no-dev
```

- Gerar arquivo .env
```bash
cp .env.example .env
```

- Gerar app_key
```bash
php artisan key:generate
```

- Migração da tabela pokemons para o db
```bash
php artisan migrate
```

- Importar dados para tabela pokemons do banco de dados por meio do arquivo **pokemons.sql** localizado na pasta raiz.

- Rodar servidor
```bash
php artisan serve
```
## Usage:
- Listar todos os Pokémons
```
 'http://localhost:8000/?page=' + número da pagina (sem as áspas)
```
---
- Filtrar por nome
```
 'http://localhost:8000/find?name=' + nome do Pokémon (sem as áspas)
```
---
- Filtrar por tipo
```
 'http://localhost:8000/find?type=' + tipo do Pokémon (sem as áspas)
```
---
- Filtrar por habilidade
```
 'http://localhost:8000/find?skill=' + habilidade do Pokémon (sem as áspas)
```
