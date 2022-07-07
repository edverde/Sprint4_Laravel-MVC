@extends('layouts.plantilla')

@section('title','Futbol vaca unas risas...')

@section('content')

    <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
        <h1  class="text-teal-800  text-center uppercase text-3xl font-bold">Futbol vaca unas risas...</h1>
        <p class="my-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400 max-w-5xl m-auto py-4">
            Benvingut a <strong>Futbol vaca unas risas...</strong> la lliga més esbojarrada del planeta. En aquesta lliga hi trobaràs el clàssic esport del futbol, però amb un hàndicap bastant curiós, dins del camp hi haurà vaques que molestaran la teva estreteja de joc, seràs capaç de ser l'equip guanyador de la lliga?
        </p>
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
            <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
                <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
                    Per tenir un control total de la teva lliga preferida de <strong>futbol vaca</strong> en el nostre web t'oferim el servei per gestionar les teves <em>entitats, equips i partits.</em><br>
                    Per crear <em>partits</em> hauràs de crear <em>equips</em>, i per crear <em>equips</em> hauràs de crear com a mínim una <em>entitat</em>, així que sense més dilacions crea o elegeix una entitat ja existent.
                </p>
                <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">Crea entitats, equips i partits</h1>
            </div>
            <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                <img src="{{URL::asset('fv.jpg')}}" alt="vacas" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">                
            </div>          
            <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">                
                <a class="px-4 py-2 rounded-md bg-teal-500 text-sky-100 hover:bg-teal-800" href="{{route('entitats.index')}}">Començar</a><br>
            </div>          
        </div>
    </main>

@endsection

