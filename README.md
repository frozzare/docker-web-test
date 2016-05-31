# docker-web-test

```
docker network create test
docker run -d -p 80:80 --net test -v /var/run/docker.sock:/tmp/docker.sock:ro jwilder/nginx-proxy
DOMAIN=docker-web-test.dev docker-compose up
```
