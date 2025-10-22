<form wire:submit="save()"
      class="flex flex-col p-9 w-full gap-5 text-white backdrop-blur-xl bg-gradient-to-b from-white/40 to-cyan-500/30 rounded-3xl shadow-[1px_5px_14px_3px_rgba(0,0,0,0.5)]">
    <h3 class="text-4xl font-semibold">Напишите нам</h3>
    <p class="text-2xl font-normal">Оставьте заявку — мы перативно перезвоним вам и проконсультируем по любым вопросам,
        связанным с перевозкой грузов.</p>
    <div class="flex flex-col gap-3">
        <input required wire:model="name" type="text"
               class="text-xl rounded-xl bg-blue-100 placeholder:text-[#D1D7E6] text-white  outline-none border-none focus:outline-none focus:!shadow-none focus:ring-0 focus:ring-transparent"
               placeholder="Имя">
        <input required wire:model="contact" type="text"
               class="text-xl rounded-xl bg-blue-100 placeholder:text-[#D1D7E6] text-white outline-none border-none focus:outline-none focus:!shadow-none focus:ring-0 focus:ring-transparent"
               placeholder="Телефон или почта">
        <textarea required wire:model="text"
                  class="text-xl rounded-xl bg-blue-100 placeholder:text-[#D1D7E6] text-white  text-[#D1D7E6] outline-none border-none focus:outline-none focus:!shadow-none focus:ring-0 focus:ring-transparent"
                  placeholder="Ваш вопрос"></textarea>
    </div>
    @if(!$sent)
        <x-ui.button class="uppercase text-lg">Отправить заявку</x-ui.button>
    @else
        <p>Спасибо! Мы свяжемся с вами в ближайшее время.</p>
    @endif
</form>
