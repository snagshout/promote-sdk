clean:
	rm -rf src/SellerLabs/Promote/Model
	rm -rf src/SellerLabs/Promote/Normalizer
	rm -rf src/SellerLabs/Promote/Resource

all:
	curl -o swagger.json http://localhost:8000/swagger.json
	php ../vendor/bin/jane-openapi generate
	rm swagger.json

docs:
	apigen generate -s src -d ../docs/php
