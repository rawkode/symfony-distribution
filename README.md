# Rawkode's Symfony Distribution
A Symfony distribution with a Linux-like directory structure and XML configuration.

**This distribution is for my own use - but if you find it useful, awesome**

## Quickstart
You need Docker and it's friends installed:
- docker
- docker-compose
- docker-machine (OSX & Windows)

### Start your containers
`docker-compose up`

### Access your application
#### Linux
curl -XGET [http://localhost:10000](http://localhost:10000)

#### Windows / OSX
curl -XGET http://<docker-machine ip>:10000

## Why?
This is for me - though if you find it useful - awesome

## Q&A
### How do I use @annotations?
Open `./boot/autoload.php` and add the following snippet before returning the     loader.

```
use Doctrine\Common\Annotations\AnnotationRegistry;
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
```

### Where's bootstrap.php.cache?
Not needed for development. In Production, we'll be inside a Docker container     with apc.stat=0
