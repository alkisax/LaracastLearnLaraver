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
## $slot και `<x-layout>`
- δημιουργω φάκελο views/Components  

#### Compnents/layout.blade.php
- **{{ $slot }}**
- **`<x-layout>`**
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
  /*
  <nav>
    <a href="/">Home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
  </nav>
  */
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
- **{{ $attributes }}**
`php artisan serve` 
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
## tailwind layout
- https://tailwindcss.com/plus -> application ui -> stacked layouts -> copy
- στο Layout.blade.php αφαίρεσα όλο το body και έβαλα αυτο που πείρα απο το tailwind
- στο <head> πρέπει να προσθέσω `  <script src="https://cdn.tailwindcss.com"></script>`
- αλλαξα τα λινκ μου, heading, περιεχόμενο και έσβησα οτι δεν ήθελα (προσοχή δυο φορές γιατι έχει και Mobile version)
- εδω έβαλα το $slot
```html
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
```
- για να αλλαξω το heding θα πρέπει και πάλι να έρθει κάτι απο τα child  αλλα τώρα έχω ήδη χρησιμοποιήσει το $slot. `      <h1>{{ $heading }}</h1>`
- -> τωρα πρέπει να αλλαξω τα child
#### home.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Home Page
  </x-slot:heading>
  <h1>hello from home page</h1>
</x-layout>
```

#### about.blade.php
```xml
<x-layout>
  <x-slot:heading>
    About Page
  </x-slot:heading>
  <h1>hello from About page</h1>
</x-layout>
```

#### contact.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Contact Page
  </x-slot:heading>
  <h1>hello from Contact page</h1>
</x-layout>
```
#### Layout.blade.php
- ακολουθεί απλοποίηση του αρχειου απο gpt
```xml
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
  // προστέθηκε το script του tailwind
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  /*<!--
    This example requires updating your template:
    
    <html class="h-full bg-gray-100">
    <body class="h-full">
    
  -->*/
<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              //<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
              <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
              <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>
  
</body>
</html>
```
- απλοποίηση του αρχείου απο gpt
```xml
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $heading ?? 'Page Title' }}</title>
</head>
<body>

  <nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/contact">Contact</a>
  </nav>

  <header>
    <h1>{{ $heading }}</h1>
  </header>

  <main>
    {{ $slot }}
  </main>

</body>
</html>
```

# 5
## active links

#### layout.blade.php
αλλάζω τα Link μου ωστε να έχουν ένα turnary χρησιμοποιόντας το request() ->is('')  
- request() → Returns the current HTTP request object (same as Illuminate\Http\Request).
- is('contact') → This is a method on the request object that checks whether the path portion of the current URL matches the given string or pattern.
```php
<div class="ml-10 flex items-baseline space-x-4">
  <a href="/" class=" {{ request()-> is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
  <a href="/about"  class=" {{ request()-> is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white">About</a>
  <a href="/contact"  class=" {{ request()-> is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white">Contact</a>
</div>
```

## δημιουργία nav-link 
#### nav-link.blade.html
ουσιαστικά κάνω copy-paste όλο τo `<a>` χωρίς το href  
The aria-current attribute tells assistive technologies (like screen readers) which link or item is the currently active one in a set of options (like navigation links).  

aria-current="page" means: "This is the link to the page the user is currently on."  
aria-current="false" (or not present) means: "This is not the current page."
```php
<!-- <a href="{{ $href }}"> {{ $slot }}</a> -->
<!-- <a {{ $attributes }}> {{ $slot }}</a> -->

<a 
  class=" {{ request()-> is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white" 
  aria-current="{{ request()-> is('/') ? 'page' : 'false' }}"
  {{ $attributes }}
>
  {{ $slot }}
</a>
```

#### Layoute.bade.php
```php
<div class="ml-10 flex items-baseline space-x-4">
  <x-nav-link href="/">Home</x-nav-link>
  <x-nav-link href="/about">About</x-nav-link>
  <x-nav-link href="/contact">Contact</x-nav-link>
</div>
```

## @props $attributes :active
#### nav-link.blade.html
Το $attributes είναι τα διάφορα σαν class= href= κλπ που υπάρχουν μες στο tag μου. Δηλώνωντας μες στο child component μες στο tag {{$attributes}} περνάω αυτόματα όλα τα styling κλπ απο τον πατέρα  

με το @props ονοματίζω ένα απο αυτα τα attribute και μπορών να αποκτήσω μια μεταβλητή απο τον patera που μπορώ να το χρησιμοποιήσω μεσα στην λογική μου.  
εδώ με `@props(['active' => false])` (`=> false` δηλ η default τιμή) αποκτάω την $active που την χρησιμοποιώ στο `aria-current="{{ $active ? 'page' : 'false' }}"` 
```php
@props(['active' => false])

<a 
  class=" {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium text-white" 
  aria-current="{{ $active ? 'page' : 'false' }}"
  {{ $attributes }}
>{{ $slot }}</a>
```

#### Layout.blade.php
η `active=` διαβάζει ως string αυτό που συναντάει. Αλλα αν βάλω μπροστά `:`,  `:active` καταλαβαίνει οτι είναι μια συνάρτηση (boolean στην προκυμένη )
```php
<div class="ml-10 flex items-baseline space-x-4">
  <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
  <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
  <x-nav-link href="/contact" :active="request()->is('contact')" >Contact</x-nav-link>
</div>
```

## h/w
New prop με ονομα type θα λέει αν το navlink θα παρουσιαζετε ως btn ή a. 
<x-nav-link type="a">Home</x-nav-link>
<x-nav-link type="button">Home</x-nav-link>
θα χρειαστώ ένα ιφ

#### nav-link.blade.php
- αλλά το btn μου δεν δουλευει γιατι παίρνει Href που δεν είναι ιδιότητα του btn
```php
@props(['active' => false, 'type' => 'a'])

@if ($type === 'a') 
  <a 
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}rounded-md px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
  >
    {{ $slot }}
  </a>
@else
  <button 
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}rounded-md px-3 py-2 text-sm font-medium text-white" 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
  >
    {{ $slot }}
  </button>
@endif
```

# 6 view data - route wildcards
`php artisan serve` 

#### web.php
μπορώ να περάσω ένα Obj στο web και να έχω προσβαση σε αυτό στην σελίδα
```php
Route::get('/', function () {
    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});
```
#### home.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Home Page
  </x-slot:heading>

  <h1>{{ $greeting }}.  from home page. My name is {{ $name }}</h1>
</x-layout>
```

τα αλάζουμε ξανά
#### web.php
```php
Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'title' => 'director',
        'salary' => '$50,000'
      ],
      [
        'title' => 'programmer',
        'salary' => '$10,000'
      ],
      [
        'title' => 'teacher',
        'salary' => '$40,000'
      ],      
    ]
  ]);
});
```

#### jobs.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Job listings
  </x-slot:heading>
  <h1>hello from job listings page</h1>

  @foreach ($jobs as $job)
    <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year</li>
  @endforeach

</x-layout>
```

## make `<li>` clickable
#### web.php
```php
Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'id' => '1',
        'title' => 'director',
        'salary' => '$50,000'
      ],
      [
        'id' => '2',
        'title' => 'programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => '3',
        'title' => 'teacher',
        'salary' => '$40,000'
      ],      
    ]
  ]);
});

// το {id} χωρις $ ειναι συμαντικο
Route::get('/jobs/{id}', function () {

  return view('contact');
});
```

#### web.php
```php
use Illuminate\Support\Arr;

Route::get('/jobs/{id}', function ($id) {
  $jobs = [
    [
      'id' => 1,
      'title' => 'director',
      'salary' => '$50,000'
    ],
    [
      'id' => 2,
      'title' => 'programmer',
      'salary' => '$10,000'
    ],
    [
      'id' => 3,
      'title' => 'teacher',
      'salary' => '$40,000'
    ],      
  ];

  // Finds the first job with matching ID from the array using a callback.
  $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

  // dd($job);

  return view('job', ['job' => $job]);
});
```

#### job.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Job  
  </x-slot:heading>
  <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

<p>
  this job pays {{ $job['salary'] }} per year
</p>

</x-layout>
```

#### jobs.blade.php
```xml
<x-layout>
  <x-slot:heading>
    Job listings
  </x-slot:heading>
  <h1>hello from job listings page</h1>

  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
          <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year
        </a>
      </li>
    @endforeach
  </ul>

</x-layout>
```

# 7 autoloading namespaces models
`php artisan serve` 

- αυτή τη στιγμή το web.php είναι:
- η λίστα των jobs επαναλαμβάνετε δύο φορές και αυτό είναι πρόβλημα
- `use($jobs)`
```Php
<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

$jobs = [
  [
    'id' => '1',
    'title' => 'director',
    'salary' => '$50,000'
  ],
  [
    'id' => '2',
    'title' => 'programmer',
    'salary' => '$10,000'
  ],
  [
    'id' => '3',
    'title' => 'teacher',
    'salary' => '$40,000'
  ],      
];

Route::get('/jobs', function () use($jobs) {
  return view('jobs', [
    'jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) use($jobs) {
  $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
```

## class
- το ξαναγράφω μόνο που αντι να έχω ένα χύμα arr μέσα στον κωδικα που το καλώ με use($κατι) του φτιάχνω μια κλάση με μια static μέθοδο. 
- Αντικαθηστώ εκεί που τα χρησιμοποιώ τα $jobs με Job::all()
```php
<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

// το `: array` ειναι return type
class Job {
  public static function all(): array {
    return [
      [
        'id' => '1',
        'title' => 'director',
        'salary' => '$50,000'
      ],
      [
        'id' => '2',
        'title' => 'programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => '3',
        'title' => 'teacher',
        'salary' => '$40,000'
      ],      
    ];
  }
}


Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
```

## models folder
- δεν είναι συνηθησμένο να έχουμε μια κλάση μέσα στο web.php για αυτό θα φτιάξουμε ένα νέο αρχείο στον φάκελο app/Models
- προσοχή στο `namespace App\Models;` είναι για να οργανώνει τους φακέλους και τα αρχεία γιατί είναι πιθανό να έχω και άλλη κλάση με αυτό το όνομα (ακόμα και σε κάποιο dependancy)
- αργότερα στο web.php θα αφαιρέσω την κλάση που πήγε στο δικό της αρχείο και θα προσθέσν `use App\Models\Job;` (**χρησιμοποιεί `/`**)
#### app/models/job.php
```php
<?php
namespace App\Models;

class Job {
  public static function all(): array {
    return [
      [
        'id' => '1',
        'title' => 'director',
        'salary' => '$50,000'
      ],
      [
        'id' => '2',
        'title' => 'programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => '3',
        'title' => 'teacher',
        'salary' => '$40,000'
      ],      
    ];
  }
}
```
#### web.php
```php
<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
```

## static method
- `$job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);` Aυτό καλεί όλα τα jobs και επιστρέφει το πρώτο που έχει ίδιο id με αυτο που ψάχνω. Θα μπορούσα να το μεταφέρω στην κλάση ως static function
- άλλαξα το job::all σε static::all που θημίζει λίγο το this. της java και εννοεί οτι χρησιμοποίησε την μέθοδο all της παρούσας κλάσης
```php
<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
  public static function all(): array {
    return [
// etc.      
    ];
  }

  public static function find(int $id): array {
      return Arr::first(static::all(), fn($job) => $job['id'] == $id);
  }
}
```
- και τωρα στο web.php μπορω να αντικαταστήσω το `  $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);` με `$job = Job::find($id);`

```php
Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);
  return view('job', ['job' => $job]);
});
```

## error handling intro
#### Job.php
```php
  public static function find(int $id): array {
      $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);
      if (!$job) {
        abort(404);
      }
      return $job;
  }
```
---
- # eloquent - βάσεις δεδομένων
---
# migrations
- στο .env υπάρχει μέσα `DB_CONNECTION=sqlite`
- μπορώ ακομα να το δώ με `php artisan db:show` στο terminal
- οταν δημιουργώ ένα προτζεκτ με `laravel new example` μου φτιάχνει βαση δεδομένων μόνο του. Αλλιώς πρέπει `php artisan migrate`
### οδηγίες για να φτιαξω ένα schema
- `tableplus.com`
**IMPORTANT** δεν μπορούσα να εγκαταστήσω το tableplus και συνεχίζω χρησιμοποιόντας **SQLiteStudio**
- το schema μου βρίσκετε στον φάκελο migrations

στο αρχείο
#### 0001_01_01_000000_create_users_table.php
- αυτά είναι migration files μπορώ να φιτάξω έναν πίνακα απλώς τρέχοντας μια εντολή (όπως και καποιος άλλος. σαν το npm install)
```php
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
```
το αλλάζω σε
```Php
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
```
- αν τρέξω `php artisan` βλέπω την λίστα των εντολών όπου
```
 migrate
  migrate:fresh             Drop all tables and re-run all migrations
  migrate:install           Create the migration repository
  migrate:refresh           Reset and re-run all migrations
  migrate:reset             Rollback all database migrations
  migrate:rollback          Rollback the last database migration
  migrate:status            Show the status of each migration
```
- H εντολή  **fresh είναι ΕΠΙΚΥΝΔΗΝΗ** τα σβήνει όλα και τα φτιαχνει απο την αρχή με βάση το αρχείο migrate
- `php artisan migrate:fresh`
- για να δω τις αλλαγες πρέπει να ανοιγοκλείσω το connection στο sql gui
- `php artisan make:migration` 
- στο όνομα `create_job_listings_table` γιατι υπάρχει ήδη πίνακας jobs
- το βρίσκω στον φάκελο Migrations. έχει μέσα ένα up και ένα down για να κάνω το migration και για να κανω rollback

#### 2025_06_08_154349_create_job_listings_table.php
```php
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('salary');                        
            $table->timestamps();
        });
    }
```
- `php artisan migrate` και τώρα μου προσθέτει μόνο τις αλλαγές και όχι όλα τα αρχεία απο την αρχή

# eloquent
- ORM αντιστοίχηση πίνακα με αντικείμενο στον κώδικα
##
#### Models/job.php
- αρχικά είναι
```php
<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
  public static function all(): array {
    return [
      [
        'id' => '1',
        'title' => 'director',
        'salary' => '$50,000'
      ],
      [
        'id' => '2',
        'title' => 'programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => '3',
        'title' => 'teacher',
        'salary' => '$40,000'
      ],      
    ];
  }

  public static function find(int $id): array {
      $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);
      if (!$job) {
        abort(404);
      }
      return $job;
  }
}
```
Η eloquent έχει δικές τις all() και find() οποτε δεν τις χρειαζόμαστε πια
```php
<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {

}
```
- αλλαζω το `web.php` 
```php
Route::get('/', function () {

  $jobs = Job::all();
  dd($jobs[0]->title);
});
```
- δεν μου γυρνάει κάτι. Υποθέτει οτι εφόσων έχω ένα Model Job θα υπάρχει και ένας πινακας με το ίδιο όνομα. αλλα ο πινακάς μου λέγετε job_listings
#### Job.php
```php
class Job extends Model {
  protected $table = 'job_listings';
}
```
- ξαναγυρνάω τώρα το web στην αρχική του μορφή και all() τρέχει χωρίς να χρειάζετε να κάνω κάποια αλλαγή
```php
Route::get('/', function () {
  // $jobs = Job::all();
  // dd($jobs[0]->title);
    return view('home', [
      'greeting' => 'Hello',
      'name' => 'Alkis'
    ]);
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});
```
 
- `php artisan tinker` Με αυτο μπαίνουμε στο cli της γλωσσας για να κανουμε δοκιμές με το eloquent
- **δεν λειτουργεί** `App\Models\Job::create(['title' => 'Acme Director', 'salary' => '$1,000,000']);`
- δεν επιτρέπει προσθήκες, πρέπει να του πούμε στο Model οτι είναι fillable `protected $fillable = ['title', 'salary'];`
#### Job.php
```php
class Job extends Model {
  protected $table = 'job_listings';

  protected $fillable = ['title', 'salary'];
}
```

- για να αναδημιοργήσουμε τη find() που σβήσαμε
`App\Models\Job::find(4)`
- η elequent τρέχει απο πίσω εντολές SQL αλλά είναι κάπως σαν δικιά της γλώσσα

- Delete
`$job->delete();`

- make:model
`php artisan help make:model`

`php artisan make:model Comment`
`php artisan make:model Post -m`

# Model Factories