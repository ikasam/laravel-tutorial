Installation
========

```bash
$ cp .env.example .env
$ vim .env # usually, it is not necessary for local develop environment.
$ docker-compose run --rm app composer install
$ docker-compose run --rm app php artisan key:generate
$ docker-compose run --rm app php artisan storage:link
$ docker-compose run --rm app php artisan migrate
```

Launch
========

```bash
$ docker-compose up -d
$ open http://localhost
```
