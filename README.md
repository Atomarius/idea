# From Fat Controller 2 Hexagonal Architecture

## Hexagonal Architecture AKA Ports & Adapters
[Alistair.Cockburn.us | Hexagonal architecture](http://alistair.cockburn.us/Hexagonal+architecture)

## Setup Environment

### Debian / Ubuntu
`sudo apt-get install php5-sqlite sqlite3 redis-server`

### Redhat / CentOS
`sudo yum install php-pdo sqlite redis`

Then run
`composer install`

### Predis
```php
$client = new \Predis\Client(['scheme' => 'tcp', 'host' => '127.0.0.1', 'port' => 6379]);
```
