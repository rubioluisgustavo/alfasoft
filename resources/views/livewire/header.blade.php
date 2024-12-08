<header class="shadow mb-5 bg-gray-900">
  <nav class="flex items-center justify-between flex-wrap p-6">
    <!-- Logo -->
    <div class="flex items-center flex-no-shrink text-white mr-6">
      <a href="/" class="text-indigo-400 text-3xl font-bold hover:text-indigo-300 transition duration-300">
        contacts
      </a>
    </div>
    <!-- Menu -->
    <div class="block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-indigo-400 mr-4 transition duration-300" wire:navigate>
          Home
        </a>
        <button wire:click="createContact" class="block mt-4 lg:inline-block lg:mt-0 text-gray-300 hover:text-indigo-400 mr-4 transition duration-300">
          New
        </button>
      </div>
      <!-- User Authentication -->
      <div>
        @if ($user)
        <div class="flex items-center space-x-4">
          <x-button type="button" text="Logout" wire:confirm="Are you sure you want to logout?" wire:click="logout" class="text-sm px-4 py-2 rounded-md bg-red-500 text-white hover:bg-red-600 transition duration-300" />
          <p class="text-sm px-4 py-2 rounded-md bg-gray-800 text-gray-300 hover:text-indigo-400 transition duration-300">
            welcome, {{$user}}
          </p>
        </div>
        @else
        <div class="flex space-x-4">
          <a href="/login" class="text-sm px-4 py-2 rounded-md border border-gray-600 text-gray-300 hover:border-indigo-400 hover:text-indigo-400 transition duration-300" wire:navigate>
            Login
          </a>
          <a href="/register" class="text-sm px-4 py-2 rounded-md border border-gray-600 text-gray-300 hover:border-indigo-400 hover:text-indigo-400 transition duration-300" wire:navigate>
            Register
          </a>
        </div>
        @endif
      </div>
    </div>
  </nav>
</header>