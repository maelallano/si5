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

migration-run:
	mysql -u root -p < migrations/0-init.sql;
	mysql -u root -p si5 < migrations/1-tables.sql;

migration-commit:
	mysqldump -u root -p -h 127.0.0.1 --no-data si5 > migrations/1-tables.sql;