# Laravel SEO Slug Demo
This is a simple project I produced to demonstrate how to make
root level URL slug work with asimple service provider and the
Laravel router's defaults method.

You can read about it in my article
 [The Power of Laravel’s Route ‘defaults’ for making 
 root level SEO pages](https://medium.com/@SlyFireFox/the-power-of-laravels-route-defaults-for-making-root-level-seo-pages-ae6da1d9fd51).

## Running it
To run it simply migrate a database and seeding it. Afterwards
you can run ```php artisan route:list``` which shows all the
routes generated. Try loading one or two of them up after
running ```php artisan serve```