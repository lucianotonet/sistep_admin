@props(["disabled" => false])

<input {{ $disabled ? "disabled" : "" }} {!! $attributes->merge([
    "class" => "
    border
    p-2
    w-full
    text-black
    border-black
    dark:border-white
    dark:bg-white
    focus:border-primary-500
    dark:focus:border-primary-600
    focus:ring-primary-500
    dark:focus:ring-primary-600
    rounded
    shadow-inner"
]) !!} />