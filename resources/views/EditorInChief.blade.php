@extends('layouts.layout')
@push('title')
    <title>Editors in Chief</title>
@endpush

@section('content')
    <!-- Editors in Chief -->
    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Editor In Chief</h1>
            <img src="https://pjitm.com/images/sanchayan/drnishant.jpg" alt="Image of Editor In Chief"
                class="object-contain md:max-h-96   py-4">
            <div class="Information text-justify ">
                <div>
                    <h3 class="font-bold">Dr. Nishant Joshi</h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Qualification:</b> Ph.D., M.B.A., M.Com </h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Email:</b> nishant.joshi@prestigegwl.org</h3>
                </div>
                <div class="flex">
                    <h3> <b class="font-medium">Qualification:</b> 91-0751-4097002, 9826818107</h3>
                </div>

            </div>
            <p class="text-justify pt-8">
                Dr. Nishant Joshi is currently the Director, of the Prestige Institute of Management and Research, Gwalior
                an Autonomous Institute with NAAC Grade A and NBA accreditations. He is credited with bringing the Institute
                into NIRF (National Institutional Ranking Frame Work, Govt. of India) top 125 Management Institutions in
                India also during his tenure the institution's gross enrolment improved to record high with teaching and
                learning at the core of its activities.
            </p>
            <p class="text-justify pt-8">
                As Professor and Director (DoL), at Prestige Institute of Management and Research, Indore an Autonomous
                Institute with NAAC A++ he was credited with setting a world-class Institute and making it from a mere
                120-student institution to a 1000 + student Institute by implementing strategic policies, processes and
                culture.
            </p>
            <p class="text-justify pt-8">
                He is also the Professional Director of HF Universal Private Limited an INR.100 Crore turnover Company and
                the Managing Director of PRO AGRI COM TRADE FZCO, Dubai, UAE. He has extensive experience in marketing and
                trading Agricultural Commodities for Food and Feed needs. His area of operations is West Asia and North
                Africa.
            </p>
            <p class="text-justify pt-8">
                He is a PhD in International Marketing from the coveted 'Banasthali Vidhyapeeth', Rajasthan a NIRF top 50
                University Ranked Globally by QSS and Times. He is an author and has been a faculty of International
                Business with Prestige Institute of Management and Research, Indore one of India's leading B-School.
            </p>
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
