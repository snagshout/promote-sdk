clean:
	rm -rf src/Snagshout/Promote/Model
	rm -rf src/Snagshout/Promote/Normalizer
	rm -rf src/Snagshout/Promote/Resource

all:
	curl -o swagger.json http://localhost:8001/documentation
	php ../vendor/bin/jane-openapi generate -vvv
	rm swagger.json
	phpstd style:clean -vvv
	phpcbf --standard=PSR2 src
	php-cs-fixer fix --rules=@PSR2 src
docs:
	apigen generate -s src -d ../docs/php
