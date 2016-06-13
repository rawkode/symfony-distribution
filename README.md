# Rawkode's Symfony Distribution
A Symfony distribution with a Linux-like directory structure and XML configuration.

**This distribution is for my own use - but if you find it useful, awesome**

## Quickstart
I'd recommend generating a `docker-compose.yml` using my [http://github.com/rawkode/boilr-docker-compose-php](boilr template)

## Q&A
### How do I use @annotations?
Open `./boot/autoload.php` and add the following snippet before returning the loader.

```
use Doctrine\Common\Annotations\AnnotationRegistry;
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
```

### Where's bootstrap.php.cache?
Not needed for development. In Production, we'll be inside a Docker container with apc.stat=0
