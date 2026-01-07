@props(['name', 'description', 'image'])

<div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-100">
    <div class="h-48 bg-gray-200">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-bold text-gray-800">{{ $name }}</h3>
        <p class="text-gray-600 text-sm mb-4">{{ $description }}</p>
        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            Lihat Detail
        </a>
    </div>
</div>