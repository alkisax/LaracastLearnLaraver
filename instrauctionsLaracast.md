git init
git remote add origin git@github.com:alkisax/LaracastLearnLaraver.git
git pull origin main --allow-unrelated-histories
git add .
git commit -m "initial commit"
git push origin main


# 1
δημιουργία νεου προτζεκτ  
`laravel new example`  
Πάω σε browser και example.test  

# 2
`php artisan serve` 

#### /routes/web.php
```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
```

#### resources/views/welcome.blade.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello world!!!!</h1>
</body>
</html>
```
## add about page
#### /routes/web.php
```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
```

##### example\resources\views\about.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About page</title>
</head>
<body>
  <h1>Hello from the about page</h1>
</body>
</html>
```

## Hausaufgaben
#### /routes/web.php
```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
```
#### example\resources\views\contact.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About page</title>
</head>
<body>
  <h1>Hello from the contact page</h1>
  <h2>contact alkisax@gmail.com</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut aut adipisci ipsam sequi doloribus libero non rerum, voluptatibus facere ad optio nulla mollitia eius provident, laudantium, autem similique? Doloremque.
  </p>
</body>
</html>
```