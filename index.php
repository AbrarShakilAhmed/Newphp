<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
</head>
<body>
<div class="flex justify-between px-10 items-center
bg-slate-50  shadow-md 2xl:px-80 md:px-10 xl:px-20 ">
  <div class="text-4xl font-bold my-4">Abrar</div>
  <nav>
    <ul id="navigation" class="hidden md:flex md:static absolute right-7 top-22  bg-blue-400 md:bg-transparent rounded text-white  md:text-black text-center ">
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Blog</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Address</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Portfolio</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Home</a></li>
    </ul>
  </nav>
  <button class="hidden md:block bg-blue-500 text-white px-5 py-2 rounded-sm text-md hover:bg-blue-600">Contact</button>
  <button id="ToggleMenu"  class=" md:hidden bg-blue-500 text-white px-5 py-2 rounded-sm text-md hover:bg-blue-600">Menu</button>

  <script src="app.js"></script>
</div>
</body>
</html>