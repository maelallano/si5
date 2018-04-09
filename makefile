install:
	npm install;
	cp app/db.dist.php app/db.php;

start:
	php -S localhost:8000 -t ./public/;

build:
	./node_modules/.bin/encore dev

watch:
	./node_modules/.bin/encore dev --watch

build-prod:
	./node_modules/.bin/encore production