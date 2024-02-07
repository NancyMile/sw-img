<div>
    <p class="title font-bold mb-4">{{ ($random) ? $images[$random]['title'] : 'Image' }}</p>
    <div class=" mb-4">
        <img class="image-container" src="{{ $images[$random]['url'] }}" alt="{{ isset( $images[$random]['tile']) ? isset( $images[$random]['tile']) : 'image' }}">
    </div>
    <div class="flex flex-grow flex-row-reverse ">
        <button type="button" class="btn h-[43px] w-[192px] lg:h-[36px] lg:w-[192px]" wire:click.prevent="clickNewImage({{ $images }})">new image</button>
    </div>
</div>
