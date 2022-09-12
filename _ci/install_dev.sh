#!/bin/bash
# install and execute the coverage
script_dir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

docker build $script_dir/../_docker/ --tag=swiss-bill
docker run --rm  -v=$(pwd):/application -w=/application  -e "TERM=xterm-256color"  swiss-bill  composer install
