# concert-diary-be
Lumen based REST-API for concert-diary

## Getting started

Requirements

- Docker

Start and setup Docker containers

```shell
docker-compose up -d --build
```

Install dependencies

```shell
docker-compose run --rm composer install
```

Create table and fill with demo data

```shell
docker-compose run --rm artisan migrate
docker-compose run --rm artisan db:seed
```

See list of demo concerts on

[localhost:8080/concerts]()
