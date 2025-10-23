<form wire:submit="save()" class="flex flex-col">
    <h3 class="font-semibold text-xl text-white mb-2">Получить прайс</h3>
    <div class="flex items-center bg-blue-200 rounded-xl">
        <input required type="email" wire:model="email"
               class="bg-blue-200 rounded-xl text-white placeholder:text-gray-50 outline-none border-none focus:outline-none focus:!shadow-none focus:ring-0 focus:ring-transparent"
               placeholder="введите свой e-mail">
        @if(!$sent)
            <button class="pr-4 cursor-pointer">
                <img src="/fixed/send-icon.svg" class="w-4 h-4" alt="">
            </button>
        @endif
    </div>
    @if($sent)
        <p class="text-white">Спасибо! Мы свяжемся с вами в ближайшее время</p>
    @endif
</form>
