# workshoplabs

```bash
git clone git@github.com:rootxharsh/workshoplabs.git
cd workshoplabs/
```

## Building & Starting SSRF labs

```bash
cd ssrf/
docker build . -t ssrflabs
docker run -it -p 8000:80 ssrflabs
```

Now browse http://localhost:8000 for SSRF labs

## Building & Starting Reverse proxy lab 1 

```bash
cd revproxylab/lab1/
docker build . -t revproxy:lab1
docker run -it -p 8010:80 revproxy:lab1
```

Now browse http://localhost:8010 for reverse proxy lab1

## Building & Starting Reverse proxy lab 2

```bash
cd revproxylab/lab2/
docker build . -t revproxy:lab2
docker run -it -p 8020:80 revproxy:lab2
```

Now browse http://localhost:8020 for reverse proxy lab2


## Building & Starting XXE labs

```bash
cd xxe/
docker build . -t xxelabs
docker run -d -p 8030:8080 xxelabs
```

Now browse http://localhost:8030 for XXE labs
