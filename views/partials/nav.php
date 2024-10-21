<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              
            <a href="/draft/controllers/index.php" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'index.php') !== false ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            <a href="/draft/controllers/about.php" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'about.php') !== false ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">About</a>
            <a href="/draft/controllers/contact.php" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Contact</a>

            </div>
          </div>
        </div>
        
      </div>
    </div>
</nav>