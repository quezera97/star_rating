<template>
    <header class="bg-gradient-to-r from-blue-700 via-indigo-700 to-blue-700 w-full py-4">
      <div class="flex items-center justify-between px-4">
        <h1 class="text-white font-bold text-4xl"></h1>
        <div class="menu-item-container">
          <a href="#" class="menu-item">Rating</a>
          <a href="#" class="menu-item">Menu</a>
          <a href="#" class="menu-item">Reserve</a>
        </div>
        <img src="../../images/kinsta-logo3.png" alt="User Image" class="w-10 h-10 rounded-full">
      </div>
    </header>
    <main class="container mx-auto text-center">
        <!-- <slot /> -->
    </main>

    <footer
        class="bg-gradient-to-b from-transparent to-gray-300 w-full text-center mt-5 py-10 mx-auto"
    >
        <h2 class="font-bold text-xl pb-5">Join our Newsletter</h2>

        <input
            class="rounded-xl w-80 h-12 px-3 py-2 shadow-md"
            type="email"
            placeholder="Write your email.."
        />
    </footer>
  </template>

  <style scoped>
  .text-white {
      color: white;
  }
  .font-bold {
      font-weight: bold;
  }
  .text-4xl {
      font-size: 2.5rem;
  }
  .text-2xl {
      font-size: 1.5rem; /* Adjust the size as needed */
  }
  .w-full {
      width: 100%;
  }
  .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
  }
  .flex {
      display: flex;
  }
  .items-center {
      align-items: center;
  }
  .justify-center {
      justify-content: center;
  }
  .px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
  }
  .w-10 {
      width: 2.5rem;
  }
  .h-10 {
      height: 2.5rem;
  }
  .rounded-full {
      border-radius: 50%;
  }
  /* New styles for the menu */
  .menu-item-container {
      display: flex;
      align-items: center;
  }
  .menu-item {
      color: white;
      text-decoration: none;
      margin-left: 1.5rem;
      font-size: 1.5rem; /* Adjust the size as needed */
      position: relative;
      transition: color 0.3s, text-decoration 0.3s;
  }
  .menu-item:hover {
      text-decoration: underline;
  }
  </style>
