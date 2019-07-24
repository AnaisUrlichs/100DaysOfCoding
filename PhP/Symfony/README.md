# Project Setup

Note: Have installed Symfony and Composer

### Create a project called form:
- composer create-project symfony/skeleton form

### Min project setup
- composer require server --dev
- composer require symfony/maker-bundle --dev
- composer require annotations
- composer require form validator orm
- composer require symfony/twig-bundle
- composer require doctrine/doctrine-fixtures-bundle

### To create a controller:
- php bin/console make:controller

### To create a form:
- php bin/console make:form

### To create a database and entities:
- Use XAMPP, Apache and MySQL running
- Have Doctrine installed and configured
- php bin/console doctrine:database:create

### Create and entity for the database and manage migrations:
- php bin/console make:entity
- php bin/console make:migration
- (Check if the migration does the right changes to your database schema)
- php bin/console doctrine:migration:migrate

### Docker-set-up First-steps
- This post https://blog.rafalmuszynski.pl/how-to-configure-docker-for-symfony-4-applications/
- Start: docker-compose up -d
- End: docker-compose down

### Set -up Json API:
- https://codereviewvideos.com/course/beginners-guide-back-end-json-api-front-end-2018/video/setup-symfony-4-fosrestbundle

### RabbitMQ setup (On Windows)
- To make rabbitmq work, you require erland "https://www.erlang.org/downloads" make sure that the version here is compatible with the rabbitmq version you download.
- Follow the normal installation steps; stop, remove, reinstall, start the server (You can find those in the documentation on the rabbitmq site)
- Open the command line in the following folder "C:\Program Files\RabbitMQ Server\rabbitmq_server-3.7.15\sbin", there type "rabbitmq-plugins.bat enable rabbitmq_management"
- Then restart on the sbin command line the server with the command: "rabbitmq-server restart" from here https://stackoverflow.com/questions/44562664/applying-management-plugin-configuration-to-rabbitmq-failed
- To setup your browser, go to http://localhost:15672
- Use the default credentials Username = "guest" with Password = "guest"
- Login and install a new user e.g. "admin" & password "admin" then login with that one
- Logout and login with the new user
- Note that you might have to include a rabbitmy definitions file from your project.
