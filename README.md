# Automotivated.engine()
Automotivated.engine( ) is an search api for automotive inventory. It's build with [Symfony](http://symfony.com/) and connects to [Elasticsearch](https://www.elastic.co/) with a MySQL database for datastorage.


## Vroom
This API is build for [Automotivated.vroom( )](https://github.com/Automotivated/vroom) and is out of the box compatible with eachother. How sweet!

## Before we begin
Put on some nice [Electro Swing](https://www.youtube.com/watch?v=aUn2HvekSZY) and make sure you got the following applications installed:

- [PHP 7.1.0+](http://http://www.php.net/)

> **&lt;code like a pro&gt;**<br>
 Here is a little list off applications I use for development. Not required to run the application, but are always nice to have and will definitely make your life a little less frustrating
 - [PHPStorm](https://www.jetbrains.com/phpstorm/)
 - [BeardedSpice](https://beardedspice.github.io/) *don't worry, nobody will hear the electro swing except you!*
 - [Spectacle](https://www.spectacleapp.com/) *shortcuts to get the windows where you want them!*

> **&lt;/code like a pro&gt;**<br>

## [Hey Ho, Let's Go!](https://www.youtube.com/watch?v=ZDXdBx6UaLI) (installation)
Open your favorite ([fish](https://fishshell.com/) || [zsh](http://www.zsh.org/)) flavoured ([oh-my-fish](https://github.com/oh-my-fish/oh-my-fish) || [oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh)) terminal ([iterm](https://www.iterm2.com/)) and go to your projects folder and clone this repo!

> **&lt;code like a pro&gt;**<br>
 I'm using fish with oh-my-fish and my own [feest](https://github.com/FKobus/theme-feest) theme. Install is super easy and can be done with one command: `omf install https://github.com/FKobus/theme-feest`<br>
 **&lt;/code like a pro&gt;**<br>

Start with cloning the project to your own development machine

```sh
git clone https://github.com/Automotivated/engine.git
```
Go to the root of your clone and install all dependencies
```sh
composer install
```

We assume you got Elasticsearch, MySQL, Apache2/Nginx installed. If not.. Please do before continuing.

### Troubleshooting on a Mac
Seems that on a mac somethings won't get setup correctly within the cache folder of Symfony. I'm working locally, if you're using Vagrant, this might not apply to you.
Because of access to files the following situations can happen with updating with composer:

```php
// Clearing the cache for the dev environment with debug
// true

[Symfony\Component\Filesystem\Exception\IOException]
Failed to remove file "/Users/itsame/Projects/Automotivated/engine/var/cache/de~/profiler/de/56/aa56de": .
```
We need to setup the file permissions [Symfony help](http://symfony.com/doc/current/setup/file_permissions.html).
Go to your root and cleanup any existing cache files.

```
rm -rf var/cache/*
rm -rf var/logs/*
```
Next we need to determine the user of your webserver:
```sh
ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1
# OUTPUT:
_www             /usr/sbin/httpd
# _www is the user
```
Followed by determing who you are.. isn't that the real question in life?
```
whoami
```
Now do the following twice (once for your webserver and once for yourself)
```
sudo chmod -R +a "<USER> allow delete,write,append,file_inherit,directory_inherit" var
```
Something like this:
```
sudo chmod -R +a "_www allow delete,write,append,file_inherit,directory_inherit" var
sudo chmod -R +a "itsame allow delete,write,append,file_inherit,directory_inherit" var
```

## Core concepts
- The API will follow the rules of [json:api](http://jsonapi.org/)
- It should return data under 50ms?? (let's try)

## TODO:
- [ ] Database [fixtures](http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html) 
- [ ] Database [Enums](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/cookbook/mysql-enums.html)
- [ ] [Migrations](http://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html)

### Research
http://obtao.com/blog/2014/02/indexing-and-simple-search-with-elasticsearch-and-symfony/