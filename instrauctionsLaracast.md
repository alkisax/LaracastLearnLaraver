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

