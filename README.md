# oa website
## Build on your machine
`git clone https://github.com/orvi2014/oa.git`

#### Copy .env.example to .env and setup your Database information.
---
#### Composer install
`composer install`

#### Laravel init
`php artisan key:generate`

#### If db migration file is present 
`php artisan migrate`

#### serve at localhost:8000
`php artisan serve`
