<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <label class="mb-1 flex items-center" for="{{ $name }}">
        <input @checked(!request($name)) id="" name="{{ $name }}" type="radio" value="" />
        <span class="ml-2">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
        <label class="mb-1 flex items-center" for="{{ $name }}">
            <input @checked($option === request($name)) id="" name="{{ $name }}" type="radio"
                value="{{ $option }}" />
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
</div>
