init: docker-down docker-pull \
	docker-build copy-config \
	wait-db docker-up

up: docker-up
down: docker-down
restart: down up

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

copy-config:
	cp docker/php/config/wp-config.php src/wp-config.php

wait-db:
	docker-compose run --rm php wait-for-it db:3306 -t 30

run-db:
	docker-compose exec db bash
