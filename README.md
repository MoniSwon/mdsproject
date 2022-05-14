#Note for me :
http://localhost/mdsproject/public/

*protected by csrf attack

*I can use .htaccess to rewrite url

*I can personnalize errors

*In app/Http/Kernel.php :

We have middleware. I'm using web middleware which encrypt cookies, handle session, verify csfr token.

In our forms, we need to add :
>@csrf
Just after this, for example :
><form action="{{ url('users') }}" method="POST">

#Services I'm using :
*SendinBlue
*Stripe
*Filament

#What I need to do

*I need to find something for the shipments

* https://laravel.com/docs/9.x/authentication

* https://laravel.com/docs/9.x/hashing