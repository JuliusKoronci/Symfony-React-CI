.PHONY: up down
up:
	docker-compose up -d
down:
	docker-compose down
build:
	docker-compose build
sf:
	docker-compose exec php php /var/www/app/bin/console $$cmd
test:
	docker-compose exec php php /var/www/app/vendor/bin/phpunit --coverage-html phpunit/report
