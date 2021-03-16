my docker run command.

docker run -dit --name yds --rm -p 8010:8080 \
 -v $USERDIR/docker/yds/downloads:/app/downloads \
 -v $USERDIR/docker/yds/db:/app/db \
 -e APPNAME=YDS \
 -e ADMINUSER=admin \
 -e PASSWORD=youtube2 \
 -e TZ=$TZ \
 katznboyz1/youtube-dl-server:latest
