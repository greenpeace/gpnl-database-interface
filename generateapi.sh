#!/usr/bin/env bash

if [[ ! -f ".env" ]]; then
	echo "Settings environment variables are missing"
	exit
fi
source .env

CODEGEN=swagger-codegen-cli.jar
if [[ ! -f "$CODEGEN" ]]; then
    wget 'http://central.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.10/swagger-codegen-cli-2.4.10.jar' -O swagger-codegen-cli.jar
    echo -e "\e[31m \e[1m [ERROR] Now copy templates from dev-templates into swagger-codegen-cli.jar/php and run again \e[0m"
    exit;
fi

SCHEMA=schema.json
if [[ ! -f "$SCHEMA" ]]; then
    wget "${gpnl_database_host}/swagger/docs/v1" -O schema.json
    echo -e "\e[31m \e[1m [ERROR] Now remove host + basepath from resulting schema.json and run again to generate client\e[0m"
    exit
fi

DIR=client/
if [[ -d "$DIR" ]]; then
	echo 'Removing client dir'
    rm -rf ${DIR}
fi

java -jar swagger-codegen-cli.jar generate \
	 --config config.json \
	 --input-spec schema.json \
	 --lang php \
	 --remove-operation-id-prefix \
	 -Dmodeltests

# WIP Automatically replacing composer references
# jq -s '.[]' composer.json | jq ''.autoload.psr-4' = jq -s ' composer.json' | sponge composer.json
#jq .autoload composer.json | jq .psr\-4
