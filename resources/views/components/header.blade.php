<header x-data="{mobileMenuOpen: false}" class="flex justify-between items-center py-8 md:py-2 absolute top-0 left-0 w-full z-20">
    <div class="content flex justify-between items-center">
        <x-logo class="lg:w-36"/>
        <img @click="mobileMenuOpen = !mobileMenuOpen" src="/fixed/menu.svg" class="hidden md:block" alt="">
        <div class="flex gap-6 text-lg lg:hidden">
            <a href="#about">О нас</a>
            <a href="#cons">Преимущества</a>
            <a href="#contacts">Контакты</a>
            <p class="font-bold font-[Montserrat]">+7 (916) 141-00-06</p>
            <x-ui.link class="ml-8" href="#contacts">Рассчитать стоимость</x-ui.link>
        </div>
    </div>
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="flex-col gap-4 hidden md:flex fixed h-[calc(100vh-58px)] w-full max-w-3xl top-[58px] bg-white left-0 p-8">
        <a @click="mobileMenuOpen = !mobileMenuOpen" href="#about">О нас</a>
        <a @click="mobileMenuOpen = !mobileMenuOpen" href="#cons">Преимущества</a>
        <a @click="mobileMenuOpen = !mobileMenuOpen" href="#contacts">Контакты</a>
        <p class="font-semibold">+7 (916) 141-00-06</p>
    </div>
</header>
