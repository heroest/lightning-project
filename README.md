# lightning-project
an async-framework based on reactphp + libevent (optional)

1. create-project
```bash
composer create-project heroest/lightning-project my_project dev-master
```

2. run as web-server
```bash
cd my_project
php web 8080
open browser and go to http://localhost:8080/home/hello-world
```

3. run as command
```bash
cd my_project
php cmd console/output heroest
```

4. create-phar: run as web server (require phar.readonly=0 in php.ini)
```bash
php my_project/pmake my_project web
php web.phar 8080
```

5. create-phar: run as command (require phar.readonly=0 in php.ini)
```bash
php my_project/pmake my_project cmd
php cmd.phar console/output
```


