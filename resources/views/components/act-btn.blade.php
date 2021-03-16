@props(['icon', 'label'])

<a {{ $attributes->merge(['class'=>'btn']) }}>
    <i class="fa {{ $icon }}"></i> {{ $label }}
</a>