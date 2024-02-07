<div>
    <form wire:submit.prevent="sendEmail">
        @csrf
        <input type="hidden" name="url"  value="{{ isset($images[$random]['url']) }}"/>
        <div class="frame sm:flex justify-between">
            @livewire('click',['images' => $images])
            <div class="sm:flex items-end p-2">
                <div class="py-1 md:py-12">
                    <label class="label mb-4">
                        Send me to a friend!
                    </label>
                    <input type="email" name="email" class="input" placeholder="user@domain.com" wire:model.live="email">
                    @error("email")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <div class="flex flex-grow flex-row-reverse ">
                        <button type="submit" class="btn h-[43px] w-[142px] lg:h-[36.91px] lg:w-[142px]">send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
