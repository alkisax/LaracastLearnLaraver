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

# 3 simple-three-page-layout
`php artisan serve` 


#### web.php
```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
```

- home.blade.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
</head>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav>
  <h1>hello from home page</h1>
</body>
</html>
```


- about.blade.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About page</title>
</head>
<body>
    <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav>
  <h1>Hello from the about page</h1>
</body>
</html>
```
- contact.blade.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact page</title>
</head>
<body>
    <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav>
  <h1>Hello from the contact page</h1>
  <h2>contact alkisax@gmail.com</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ut aut adipisci ipsam sequi doloribus libero non rerum, voluptatibus facere ad optio nulla mollitia eius provident, laudantium, autem similique? Doloremque.
  </p>
</body>
</html>
```

δεν είναι ωράιο που καναμε copy paste τα <nav>
## $slot και <x-layout>
- δημιουργω φάκελο views/Components  

#### Compnents/layout.blade.php
- {{ $slot }}
- <x-layout>
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
</head>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav>

  <!-- <?php echo $slot ?> -->
  <!-- this is a blade helper -->
  {{ $slot }}
  
</body>
</html>
```

#### home.blade.php
```php
<x-layout>
  <h1>hello from home page</h1>
</x-layout>
```
- about.blade.php
```php
<x-layout>
  <h1>hello from about page</h1>
</x-layout>
```
- contact.blade.php
```php
<x-layout>
  <h1>hello from contact page</h1>
</x-layout>
```

### Hausaufgaben
create a nav-link component με $slot
#### Layout.blade.php
```php
  <!-- <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav> -->
  <nav>
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/about">About</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
  </nav>
```
#### Components/nav-link.blade.php
```php
    <a href="{{ $href }}"> {{ $slot }}</a>
```

# 4 css-tailwind
## Hauseaufgaben losung
- layout.blade.php
```php
    <x-nav-link href="/">Home</x-nav-link>
    <x-nav-link href="/about">About</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>
```
- nav-link.blade.php
```php
<a {{ $attributes }}> {{ $slot }}</a>
```