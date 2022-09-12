#!/bin/bash

script_dir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
php  -c $script_dir/coverage.ini  -d memory_limit=-1 ./vendor/bin/phpunit --migrate-configuration
php  -c $script_dir/coverage.ini  -d memory_limit=-1 ./vendor/bin/phpunit --coverage-html ./test_doc/coverage --testdox-html ./test_doc/index.html  --group unit,database
echo "open test_doc/coverage/index.html to check the coverages"
