<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>
</head>
<body>
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

  <!-- <?php echo $slot ?> -->
  <!-- this is a blade helper -->
  {{ $slot }}
  
</body>
</html>