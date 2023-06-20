@props(['value'])

<label {{ $attributes->merge(['class' => 'block w-[690px] h-[48px] font-medium bg-transparent text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
