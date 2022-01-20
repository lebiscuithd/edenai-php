sudo docker run --rm -v ${PWD}:/local swaggerapi/swagger-codegen-cli-v3 generate -i http://192.168.1.61/v1/swagger.json -l php -o /local/sdk/edenai-php/ --config /local/sdk/edenai-php/config.json --invoker-package edenai


