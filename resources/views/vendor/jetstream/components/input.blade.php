@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mx-auto pl-4 py-2 my-2 w-full rounded-md border focus:border-teal-400 focus:outline-none transition ease-out duration-300 font-nunito font-semibold']) !!}>
