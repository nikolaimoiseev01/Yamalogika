<button type="submit"  {{ $attributes->merge(['class' => 'flex justify-center items-center font-semibold bg-red-300 text-white rounded-3xl py-3 px-8 transition hover:bg-blue-300 cursor-pointer']) }}>
    {{$slot}}
</button>
