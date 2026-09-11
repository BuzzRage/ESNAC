# To perform a backup:

docker-compose exec database pg_dump hedgedoc -U hedgedoc > hedgedoc-backup-$(date -u +%Y-%m-%d).sql


#docker exec -u hedgedoc hedgedoc_database_1 pg_dump -Cc | xz > hedgedoc-backup-2021-07-15.sql.xz <- doesn't work
