<div class="flex h-screen">
    <div class="bg-white w-3/4 sm:w-2/4 md:w-2/4 lg:w-1/4 m-auto pt-10 px-5 border rounded-md shadow-lg">
        <div class=" flex items-center justify-center">
            {{ $logo }}
        </div>
        <div class="text-4xl text-teal-700 font-lora italic font-bold flex items-center justify-center mb-10">
            Ourecipe
        </div>
        <div class="relative pb-5">
            {{ $slot }}
        </div>
    </div>
</div>