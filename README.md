# Laravel-Webapp-Task
This is a web application build on laravel with php, for 2 user roles where one user can enter in information to a profile and an admin user can manage user profiles.

For this app we have a user profile with 2 role authorities, mutant and xmen where both can upload 2 images (before and after image) and write a description of their powers to be displayed on their profiles. The other role is the admin role where admins can also create profiles and manage users, managing users lets an admin edit their roles, where he admin can assign the role of xmen to a mutant or vice versa and even grant an user the admin role. Admins can also delete users. 

Getting Started:

This project uses laravel version 7.12.0, composer version 1.10.6, php version 7.4.6 and MySQL version 8.0, no local webhost was used. Ensure that php extensions in the php.ini are active, extensions curl, fileinfo,gd2,intl,openssl,mysql, are active in your php directory, the php.ini is also provided int the repository.

Deployment:

To begin, access the xmen folder directory via cmd and run your text editer (In my case i used Atom) once the file is loaded navigate to .env file and change the settings to match the database you are using, i have used mysql with given database name as xmen and set a password. Ensure you execute a database named xmen in your database manager and remove/change the password from the .env file as you please.
Now we must migrate the databases from the laravel project to the database, do this by running 
```
php artisan migrate
```
NOTE: You will get an error saying "Class 'CreateForeignKeysForUserTable' not found" and "PHP Warning:  Unterminated comment starting line 27 in PATH", ignore this as i have commented out the foreign key table because we are using seeders to populate the database and truncate method to build the query, therefore we run into an error when trying to populate the foreign key table when seeding. The purpose of the foreign key table if for database integrity and scalability for future development of the application, for now its not necessary for our demonstration.

Once the databases have been migrated, now its time to populate the database using seeders, i have already created some seeders which are in the project folder, to run this enter in the cmd 
```
php artisan db:seed
```
This will populate the database with 3 user entries, 1 admin, 1 xmen and 1 mutant user, the login information goes as follow:

Admin User,
email:admin@xmen.com,
password:password
  
Xmen User,
email:user@xmen.com,
password:password
   
Mutant User,
email:user@mutant.com,
password:password

Testing:

Now lets test the application by preforming a few basic tasks,
If you sign in as the admin user using the previously mentioned login information you will notice that you gt taken to the user management page and you will be able to see all the current existing users with an edit and delete button next to each row. Clicking edit will take you to an edit page where as the admin you can change the user’s email, password and role ranging from admin, xmen and mutant.

NOTE: The edit feature currently has an error where the database does not accept the role string, this will be fixed in the future.

If you click delete it will remove the user from the database and from the lavaral project but if it’s an user from the seeder file it can be replaced by re-seeding the database.

Now let’s log out as the admin and log in as another user, xmen or mutant by using the previously mentioned login information. You will notice that you are taken to a new home page where you can upload 2 images, a civilian image, a mutant image and a text area where you can write a short description of your powers. However, you cannot access the user management page as its only authorized to admins. 

NOTE: There is an issue with uploading images where only mutant image upload area works but the civilian image does not appear however does get uploaded. 

Now let’s register a new user, log out and navigate to the register button in the home page and sign up as a new user by entering new information.

NOTE: You will run into an error where a role cannot be assigned, this is due to a bug in the code for assigning roles which is currently under investigation and is to be fixed.

However, if you refresh the page you can sign in as the newly registered user and will be able to see the home page.

Additional Notes:
This is all for the application at the moment, but more features will be added once some of the mentioned bugs are fixed.
Current features which i was not able to apply but will be applying are:
1. Admin to be able to navigate the users page and view the content of the user page
2. Users are to be able to send a request to the admin to have a role changed
3. A notification is to be send to the user on the dashboard that the role of the user has been changed
4. Users will be able to upload pictures apron registration if they desire 
5. New tables are to be added to the database so there may be more integrity and scalability for future growth of the application

Acknowledgment:

I would like to thank Fonseka Innovations for giving the opportunity to learn php and laravel and look forward to hearing feedback based on my current task and application of my newly acquired knowledge.

Thank you.






<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
