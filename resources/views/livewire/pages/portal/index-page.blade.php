<main class="flex-1">
    <section class="w-full h-screen md:h-fit flex mb-32 md:mb-16 pt-16">
        <div
            class="content m-auto h-[85%] relative mx-auto flex md:!w-full md:items-center md:h-auto md:py-24 md:justify-center md:text-center md:rounded-none flex-col justify-center rounded-[60px] overflow-hidden px-28 md:p-8 text-white">
            <img src="/fixed/welcome-bg.png" class="absolute w-full h-full object-cover top-0 left-0 z-0" alt="">
            <span class="uppercase relative mb-8 font-medium">Транспортно-логистическая компания</span>
            <h1 class="text-7xl lg:text-5xl md:!text-4xl font-bold relative mb-14">Грузоперевозки по всей<br> России,
                ЯНАО, ХМАО,<br>Республика
                Коми, <br>Дальний Восток</h1>
            <div class="flex gap-4 relative md:flex-col">
                <x-ui.link href="#contacts">Получить консультацию</x-ui.link>
                <x-ui.link href="#how-we-work">Подробнее об услугах</x-ui.link>
            </div>
        </div>
    </section>

    <section class="py-24 md:py-0 bg-cover bg-center mb-32 md:mb-16 relative">
        <img src="/fixed/block-2-bg.png"
             class="absolute top-0 left-0 w-full h-full object-cover object-center z-0 md:hidden" alt="">
        <div class="content flex flex-col justify-center items-center text-center gap-8 relative">
            <p class="text-3xl text-white md:text-black">Надёжная и быстрая<br>
                доставка грузов из Москвы и Санкт-Петербурга в Ямало-Ненецкий<br> автономный округ. Станции Обская,
                Карская и Бованенково.<br> Современный транспорт, индивидуальный подход, контроль доставки<br>
                на каждом этапе пути.</p>
            <x-ui.link class="md:hidden" href="#contacts">Получить консультацию</x-ui.link>
        </div>
    </section>

    <section class="content flex flex-col gap-8 mb-32 md:mb-16">
        <h2>Наши клиенты</h2>
        <div class="flex gap-16 items-center justify-center md:gap-2 md:flex-col">
            @for($i=1; $i<7; $i++)
                <img src="/fixed/partner-logos/{{$i}}.png" class="h-fit" alt="">
            @endfor
        </div>
    </section>

    <section id="about" style="background-image: url('/fixed/about-bg.png')"
             class="py-24 bg-cover bg-center content rounded-[60px] mb-32 md:mb-16 md:w-full md:rounded-none">
        <div class="content flex flex-col justify-center items-center text-center gap-8">
            <h2 class="text-white">О НАС</h2>
            <p class="text-2xl text-white max-w-3xl">
                Более 20 лет наша компания специализируется на организации грузоперевозок из Москвы и Санкт-Петербурга в
                ЯНАО, ХМАО, Республику Коми и Дальний Восток. Наш опыт
                позволяет нам обеспечивать надежную доставку любых видов грузов — от стандартных до негабаритных
                и температурных.
            </p>
            <x-ui.link href="#contacts">Оставить заявку на перевозку</x-ui.link>
        </div>
    </section>

    @php
        $whys = [
            [
                'icon' => '/fixed/why-icon-1.svg',
                'title' => "Опыт <br> и экспертиза",
                'text' => 'компания на протяжении 20 лет является надежным поставщиком в грузоперевозках.'
            ],
            [
                'icon' => '/fixed/why-icon-2.svg',
                'title' => 'География <br> доставки',
                'text' => 'доставляем в самые отдалённые и труднодоступные населённые пункты.'
            ],
            [
                'icon' => '/fixed/why-icon-3.svg',
                'title' => 'Соблюдение <br> сроков',
                'text' => 'гарантируем своевременную доставку вне зависимости от погодных условий.'
            ],
            [
                'icon' => '/fixed/why-icon-4.svg',
                'title' => 'Безопасность <br> и страхование',
                'text' => 'все грузы под надёжной защитой на протяжении всего маршрута.'
            ]
        ];
    @endphp
    <section class="content flex flex-col gap-16 mb-32 md:mb-16">
        <h2>Почему мы?</h2>
        <div class="flex gap-24 items-center justify-center md:flex-col">
            @foreach($whys as $el)
                <div class="flex flex-col gap-2 items-center text-center max-w-64">
                    <img src="{{$el['icon']}}" class="h-16" alt="">
                    <p class="font-bold text-blue-300 text-3xl">{!! $el['title'] !!}</p>
                    <p class="text-gray-300">{{$el['text']}}</p>
                </div>
            @endforeach
        </div>
        <x-ui.link class="hidden md:block mx-auto" href="#contacts">Оставить заявку на перевозку</x-ui.link>
    </section>

    @php
        $cons = [
            [
                'img' => '/fixed/cons-img-1.png',
                'icon' => '/fixed/cons-icon-1.png',
                'title' => "Доставка до точки",
                'text' => 'Выполняем адресную доставку — от склада отправителя до двери получателя, включая сложные подъезды и удалённые населённые пункты.'
            ],
            [
                'img' => '/fixed/cons-img-2.png',
                'icon' => '/fixed/cons-icon-2.png',
                'title' => "Оптимальные маршруты",
                'text' => 'Разрабатываем индивидуальные маршруты с учетом погодных условий, сезонности и состояния дорог. Это позволяет доставлять грузы максимально быстро и безопасно.'
            ],
             [
                'img' => '/fixed/cons-img-3.png',
                'icon' => '/fixed/cons-icon-3.png',
                'title' => "Специализация<br> на северных направлениях",
                'text' => 'Глубокое знание маршрутов из Центрального федерального округа в ЯНАО. Обеспечиваем сохранность и своевременность доставки даже в самые труднодоступные регионы.'
            ],
            [
                'img' => '/fixed/cons-img-4.png',
                'icon' => '/fixed/cons-icon-4.png',
                'title' => "Личный менеджер<br> и поддержка 24/7",
                'text' => 'Каждому клиенту назначается персональный менеджер. Оперативно консультируем и решаем любые вопросы на протяжении всего маршрута.'
            ],
        ];
    @endphp
    <section id="cons" class="content flex flex-col mb-32 md:mb-16 md:bg-blue-300 md:w-full md:py-16">
        <h2 class="uppercase text-center mb-24 md:mb-8 md:text-white">пРЕИМУЩЕСТВА<br> наших перевозок</h2>
        <div class="flex flex-col gap-28 items-center justify-center max-w-6xl mx-auto md:max-w-lg md:w-[90%]">
            @foreach ($cons as $el)
                <div class="flex gap-16 even:flex-row-reverse group md:!flex-col md:flex-initial md:text-white md:justify-center md:text-center">
                    <div class="relative w-1/2 min-w-[50%] md:w-full">
                        <img src="{{ $el['img'] }}" class="w-full" alt="">
                        <div
                            class="absolute -top-4 -left-4 group-even:left-auto group-even:-right-4 rounded-full bg-blue-300 md:bg-blue-200 flex items-center justify-center p-4">
                            <img src="{{ $el['icon'] }}" class="md:w-10" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 text-2xl group-even:text-right md:!text-center">
                        <p class="font-bold uppercase">{!! $el['title'] !!}</p>
                        <p class="font-medium md:font-normal">{{ $el['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

        @php
            $portfolio = [
                [
                    'img' => '/fixed/portfolio-img-1.png',
                    'title' => "Железнодорожные перевозки ",
                    'text' => 'Доставим сборные грузы в вагонах с температурным режимом (от 2 дней), а также сборные грузы в крытых вагонах и рефсекциях (от 5 дней). Подача контейнера под загрузку, закрепление грузов,изготовление перегородок.'
                ],
                [
                    'img' => '/fixed/portfolio-img-2.png',
                    'title' => "Речные перевозки июнь - сентябрь",
                    'text' => 'Во время ожидания открытия навигации, мы храним ваш груз на крытых тёплых, холодных складах и открытой площадке. рекомендуем заранее планировать речные перевозки.'
                ],
                 [
                    'img' => '/fixed/portfolio-img-3.png',
                    'title' => "Перевозка негабаритных грузов",
                    'text' => 'Перевозим по ж/д и дорогам общего пользования, а такжк зимними автодорогами Ямала и водным транспортом.  Доверяя нам перевозку, вы можете быть спокойны за сохранность груза - мы профессионалы своего дела.'
                ],
            ];
        @endphp

        <section class="bg-blue-300 py-16 flex flex-col gap-12 mb-20 md:bg-white">
            <h2 class="text-white uppercase md:text-black text-center">портфолио перевозок</h2>
            <div class="flex gap-8 max-w-6xl w-[90%] mx-auto md:flex-col">
                @foreach($portfolio as $el)
                    <div class="flex flex-col rounded-[50px] bg-white overflow-hidden flex-1 shadow-[3px_3px_12.2px_0px_rgba(0,0,0,0.42)]">
                        <img src="{{$el['img']}}" class="w-full h-56 rounded-[50px] object-cover" alt="">
                        <div class="flex flex-col px-6 pt-4 pb-8 text-center flex-1">
                            <p class="font-bold text-2xl mb-5">{{$el['title']}}</p>
                            <p class="text-lg mb-4">{{$el['text']}}</p>
                            <x-ui.link class="mt-auto uppercase text-lg" href="#contacts">Оставить заявку</x-ui.link>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        @php
            $how = [
                [
                    'icon' => '/fixed/how-icon-1.svg',
                    'title' => "Анализ задачи и консультация",
                    'text' => 'Мы подробно изучаем ваши требования по грузоперевозке, консультируем по маршрутам и оптимальным условиям доставки.'
                ],
                [
                    'icon' => '/fixed/how-icon-2.svg',
                    'title' => "Разработка маршрута и оформление документов",
                    'text' => 'Спланируем маршрут по Центральному федеральному округу и Ямало-Ненецкому АО, подготовим все необходимые сопроводительные документы.'
                ],
                [
                    'icon' => '/fixed/how-icon-3.svg',
                    'title' => "Оперативная перевозка",
                    'text' => 'Выполняем перевозку точно в срок, используя только проверенный автотранспорт и опытных водителей.'
                ],
                [
                    'icon' => '/fixed/how-icon-4.svg',
                    'title' => "Контроль и доставка «до двери»",
                    'text' => 'Контролируем передвижение груза на каждом этапе и обеспечиваем доставку до указанного адреса клиента.'
                ],
            ];
        @endphp

        <section id="how-we-work" class="flex flex-col gap-12 mb-32 content">
            <h2 class="uppercase mr-auto ml-0 md:!mx-auto">КАК МЫ РАБОТАЕМ?</h2>
            <div class="flex flex-col !max-w-6xl mx-auto md:gap-32">
                @foreach($how as $key=>$el)
                    <div class="flex gap-16 odd:ml-auto w-[calc(50%+48px)] md:w-[80%] group">
                        <div class="flex flex-col group-even:order-2 items-center md:hidden">
                            <span
                                class="bg-blue-300 rounded-full p-4 flex items-center justify-center aspect-square w-24 h-24 text-white text-5xl font-black">{{$key + 1}}</span>
                            <span class="group-last:hidden flex-1 w-4 h-full bg-blue-300"></span>
                        </div>
                        <div class="flex gap-4 items-start group-even:text-right pt-8">
                            <img src="{{$el['icon']}}" class="group-even:order-2" alt="">
                            <div class="flex flex-col gap-4 text-2xl">
                                <p class="font-semibold uppercase text-red-300 text-2xl">{{$el['title']}}</p>
                                <p class="">{{$el['text']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section style="background-image: url('/fixed/app-bg.png')"
                 class="bg-cover bg-center content relative mx-auto flex gap-24 rounded-[60px] p-28 md:p-8 overflow-hidden text-white mb-44">
            <div class="flex flex-col gap-8 w-1/2 md:w-full md:text-center">
                <h1 class="text-5xl uppercase font-medium relative">Быстрая заявка<br> на перевозку<br> грузов</h1>
                <p class="text-2xl">Мы специализируемся на организации надёжных и своевременных грузоперевозок по всей
                    России.</p>
                <p class="text-2xl">Заполните форму — и наш специалист свяжется с вами для индивидуального расчёта стоимости
                    и сроков доставки.</p>
            </div>
        </section>

        <section id="contacts" style="background-image: url('/fixed/contacts-bg.png')"
                 class="bg-cover bg-center py-20">
            <div class="content flex gap-24 text-white !max-w-7xl md:flex-col">
                <div class="flex flex-col text-start justify-start w-1/2 md:w-full md:text-center md:justify-center">
                    <h2 class="text-5xl ml-0 mb-8 md:mx-auto">КОНТАКТЫ</h2>
                    <p class="text-2xl mb-20">Мы оперативно ответим на любые вопросы по перевозке грузов, рассчитаем стоимость, дадим консультацию
                        по логистике и документам.</p>
                    <div class="flex flex-col gap-2 md:items-center mb-6">
                        @php
                            $contacts = [
                                ['icon' => '/fixed/contact-icon-1.svg', 'text' => '+7 (926) 707-15-48'],
                                ['icon' => '/fixed/contact-icon-1.svg', 'text' => '+7 (916) 141-00-06'],
                                ['icon' => '/fixed/contact-icon-2.svg', 'text' => 'sobolev-1101@yandex.ru'],
                                ['icon' => '/fixed/contact-icon-3.svg', 'text' => 'Люберцы, ул. Волковская, д.1']
                            ];
                        @endphp
                        @foreach($contacts as $el)
                            <div class="flex gap-2 text-xl">
                                <img src="{{$el['icon']}}" class="w-7 h-auto" alt="">
                                <span class="font-bold">{{$el['text']}}</span>
                            </div>
                        @endforeach
                    </div>
                    <p class="text-xl"><span class="font-semibold">Время работы: </span>Пн–Пт: 09:00–20:00</p>
                </div>
                <div class="w-1/2 md:w-full">
                    <livewire:components.contact-form/>
                </div>

            </div>
        </section>
</main>
