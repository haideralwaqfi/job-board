<div class="relative">
    @if ($formId)
        <button class="absolute top-0 right-0 flex h-full items-center pr-2"
            onclick="document.getElementById('{{ $name }}').value =''; document.getElementById('{{ $formId }}').submit();"
            type="button">
            <svg class="size-4 text-slate-500" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </button>
    @endif

    <input
        class="pr-8 w-full rounded-md border-0 py-1.5 px-2.5 text-xs ring-1 rind-slate-300 placeholder:text-slate-400 focus:ring-2"
        id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}" type="text"
        value="{{ $value }}" />
</div>
