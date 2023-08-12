@extends('layouts.layout')
@push('title')
    <title>Editors</title>
@endpush

@section('content')
    <!-- EDITORS -->
    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Editor In Chief</h1>
            <img src="https://pjitm.com/images/sanchayan/drgarima.jpg" alt="Image of Editor In Chief"
                class="object-contain py-4">
            <div class="Information text-justify ">
                <div>
                    <h3 class="font-bold">Dr. Garima Mathur</h3>
                </div>
                <div>
                    <h3 class="font-bold">Professor (HRM)</h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Qualification:</b> UGC-NET, PhD, M.B.A. (HRM), M. A. (Psychology) </h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Email:</b> garima.mathur@prestigegwl.org</h3>
                </div>
                <div class="flex">
                    <h3> <b class="font-medium">Qualification:</b> +91-0751-4097028</h3>
                </div>

            </div>
            <p class="text-justify pt-8">
                Dr. Garima Mathur is Professor in Human Resource Management She is Head, HR Department & MBA Program with
                more than 16 years of research and academic experience. She has been engaged in corporate and academic
                trainings in variety of industries such as manufacturing, services, education. She has been talking about
                “Managing Emotions” at various platforms. She has chaired session/delivered keynote speeches in various
                conferences including overseas conferences as well. She is PhD guide and Seven research scholars under her
                have already been awarded PhD degree. She is active researcher and in all over ninety national and
                international refereed publications including Scopus, Web of Sciences and ABDC etc are due to her credit.
                She is an active Member of AIB, ISTD, (IAA) and GMA. She has also published five edited books. She is editor
                of ‘Prestige International Journal of IT & Management- Sanchayan’ and member of editorial and review boards
                of many reputed journals including Academy of Management- Annual Meeting, Inderscience Journals, Sage etc.
                She can be contacted at garimanmathur@gmail.com.
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
