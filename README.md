# From Fat Controller 2 Hexagonal Architecture

## Hexagonal Architecture AKA Ports & Adapters
[Alistair.Cockburn.us | Hexagonal architecture](http://alistair.cockburn.us/Hexagonal+architecture)

### Setup Environment

```sh
sudo apt-get install php5-sqlite sqlite3 redis-server
sudo yum install php5-sqlite sqlite3 redis-server
```

```sh
composer install
```

```php
$client = new \Predis\Client(array('scheme' => 'tcp', 'host' => '127.0.0.1', 'port' => 6379));
```
