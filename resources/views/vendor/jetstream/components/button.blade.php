<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block text-white font-nunito font-semibold mx-auto py-2 my-1 w-full rounded-md border bg-teal-400 border-teal-400 hover:bg-teal-500 transition ease-in duration-300']) }}>
    {{ $slot }}
</button>
