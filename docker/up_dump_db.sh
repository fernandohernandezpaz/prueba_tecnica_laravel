#!/bin/sh

docker cp ../onagsistem_onag.sql lara-db:/

docker exec -it lara-db sh -c "mysql -u laravel -p onag < onagsistem_onag.sql"
