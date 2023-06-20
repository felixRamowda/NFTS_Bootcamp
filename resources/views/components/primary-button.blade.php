<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-[#FFFFFF] rounded-[56px] font-semibold text-base text-white justify-center   transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
