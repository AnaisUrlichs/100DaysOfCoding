Project Setup

Note: Have installed Symfony and Composer

Create a project called form:
- composer create-project symfony/skeleton form

Min project setup
- composer require server --dev
- composer require symfony/maker-bundle --dev
- composer require annotations
- composer require form validator orm
- composer require symfony/twig-bundle

To create a controller:
- php bin/console make:controller

To create a form:
- php bin/console make:form

To create a database and entities:
- Use XAMPP, Apache and MySQL running
- Have Doctrine installed and configured
- php bin/console doctrine:database:create

Create and entity for the database and manage migrations:
- php bin/console make:entity
- php bin/console make:migration
- (Check if the migration does the right changes to your database schema)
- php bin/console doctrone:migration:migrate
