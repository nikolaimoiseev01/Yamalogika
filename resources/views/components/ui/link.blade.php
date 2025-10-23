<a  {{ $attributes->merge(['class' => 'flex justify-center items-center font-semibold bg-red-300 text-white rounded-3xl py-4 px-10 transition hover:bg-blue-300 cursor-pointer']) }}>
    {{$slot}}
</a>
