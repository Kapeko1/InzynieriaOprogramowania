<div x-data="{ count: 0 }">
    <h1 class="text-2xl font-bold mb-4">Alpine.js Test</h1>
    <button @click="count++" class="px-4 py-2 bg-blue-500 text-white rounded">+</button>
    <span class="text-xl mx-4" x-text="count"></span>
    <button @click="count--" class="px-4 py-2 bg-red-500 text-white rounded">-</button>
</div>

