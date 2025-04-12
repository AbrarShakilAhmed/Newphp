<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

   <link rel="shortcut icon" href="./images.jpeg" type="image/x-icon">
<style>
  .neon-border {
    position: relative;
    border-radius: 9999px;
    padding: 2px;
    background: linear-gradient(45deg, #456943, blue, cyan, blue, #00f);
    background-size: 400% 400%;
    animation: neonAnimation 6s linear infinite;
    box-shadow: 0 0 10px 5px rgba(0, 255, 255, 0.6); /* Base glow */
    filter: blur(0.5px);
  }

  button.neon-border{
    padding: 10px 20px;
    border-radius: 5px;
  }

  .neon-border::before {
    content: '';
    position: absolute;
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
    border-radius: 9999px;
    background: inherit;
    filter: blur(2px); /* This creates the 20px soft spread */
    z-index: -1;
  }

  @keyframes neonAnimation {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }

  .neon-border-inner {
    border-radius: 9999px;
    overflow: hidden;
  }

 .neon-button {
  position: relative;
  /* display: inline-block; */
  padding: 12px 24px;
  color: white;
  background-color: #111;
  font-weight: bold;
  border-radius: 12px;
  overflow: hidden;
  z-index: 1;
  border: none;
  cursor: pointer;
}

.neon-button::before {
  content: "";
  position: absolute;
  inset: 0;
  padding: 2px;
  background: linear-gradient(270deg, cyan, violet, cyan);
  background-size: 300% 300%;
  border-radius: 12px;
  z-index: -1;
  animation: rotateBorder 4s linear infinite;
  -webkit-mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  mask-composite: exclude;
  box-sizing: border-box;
}

@keyframes rotateBorder {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}
</style>


</head>
<body class="bg-black text-white">
<div class="flex justify-between px-10 items-center
bg-slate-950  shadow-md shadow-cyan-700 2xl:px-80 md:px-10 xl:px-20 ">
  <div class="text-4xl font-bold my-4">Abrar</div>
  <nav>
    <ul id="navigation" class="z-10 hidden md:flex md:static absolute right-7 top-22  bg-cyan-950 md:bg-transparent rounded text-white text-center ">
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Blog</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Address</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Portfolio</a></li>
      <li><a href="#"class="mx-5 2xl:mx-10 hover:text-blue-700 my-5 inline-block">Home</a></li>
    </ul>
  </nav>
  <button class="neon-button hidden md:block bg-cyan-700 text-white px-5 py-2 rounded-sm text-md ">Contact</button>
  <button id="ToggleMenu"  class=" neon-border md:hidden bg-cyan-400 text-white px-5 py-2 rounded-sm text-md">Menu</button>
</div>
<div class="hero-area py-20 xl:py-40 flex flex-col items-center md:flex-row justify-center ">
<div class="neon-border w-72 h-72 md:w-96 md:h-96 mb-10 md:mb-0">
    <div class="neon-border-inner h-full w-full ">
      <img src="./images.jpeg" alt="Profile" class="h-full w-full object-cover">
    </div>
    </div>
      <div class="hero-text  px-10 sm:px-20 md:max-w-1/2">
      <h1 class="text-3xl my-4 font-medium">Hey I am Abrar Shakil</h1>
      <p >I’m a full-stack developer with expertise in the MERN stack (MongoDB, Express.js, React, Node.js), C# with ASP.NET, and PHP with Laravel. I build scalable, high-performance web applications across different tech ecosystems. Whether it’s creating dynamic UIs, building robust APIs, or developing enterprise-level backend systems, I enjoy delivering clean, efficient solutions. I'm always exploring new tools and frameworks to stay sharp and deliver modern, user-focused experiences.</p>
<button class="neon-button my-10 px-6 py-3 text-white font-semibold rounded-md relative z-10">
  See More &nbsp; →
</button>


</div>
  </div>



  <script src="app.js"></script>

</body>
</html>