<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="index" class="<?php echo url('index.php') ? 'bg-gray-900 text-white' :  'text-gray-300';  ?> rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
              <a href="/draft/about.php" class="<?php echo url('about') ? 'bg-gray-900 text-white' :  'text-gray-300';  ?> rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">About</a>
              <a href="/contact" class="<?php echo url('contact.php') ? 'bg-gray-900 text-white' :  'text-gray-300';  ?> rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Contact</a>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
</nav>