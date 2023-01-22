FROM mysql:8

COPY dbdump ./docker-entrypoint-initdb.d