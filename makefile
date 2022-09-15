install:
	./_ci/install_dev.sh

test:
	./_ci/coverage-docker.sh

cs-fixer: test
	./_ci/cs_fixer_docker.sh
