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
	docker-compose exec php php /var/www/app/vendor/bin/php-cs-fixer fix src --rules=@Symfony --diff -v
	docker-compose exec php php /var/www/app/bin/console lint:yaml app/config
	docker-compose exec php php /var/www/app/bin/console lint:twig app/Resources
	docker-compose exec php php /var/www/app/bin/console security:check --end-point=http://security.sensiolabs.org/check_lock
	npm run --prefix react-app test
	npm run --prefix react-app lint
	npm run --prefix react-app flow
setup:
	docker-compose down
	docker-compose build
	docker-compose up -d
	docker-compose exec php composer install
	docker-compose exec php php /var/www/app/bin/console doctrine:schema:update --force
	docker-compose exec php php /var/www/app/bin/console doctrine:schema:update --env=test --force
	docker-compose exec php php /var/www/app/bin/console doctrine:fixtures:load --no-interaction
start:
	docker-compose up -d
	npm run --prefix react-app start
