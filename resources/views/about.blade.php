@extends('layouts.layout')
@section('title')
    About Page
@endsection

@section('content')
    <!-- ABOUT PIMRG -->
    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white  md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">ABOUT PIMRG</h1>
            <p class="text-justify pt-14">
                Prestige Institute of Management, Gwalior is an Autonomous, NAAC ‘A’
                Accredited, NBA Accredited premier Management institute in Central India
                offering post graduate and under graduate programs in Management,
                Commerce, Law and Computer Applications.
            </p>
            <p class="text-justify pt-8">
                The Institute was set up in the year 1997. The Institute has grown to be
                recognized as a leading Institute for higher learning. The institute has
                Received A+++ among Top B-Schools in India (Business India, December
                2020), Ranked 1st among Top B-Schools in Central Region (Business World,
                October 2020), Ranked 4th among Outstanding B-Schools of Excellence
                (CSR- GHRDC, Issue: November 2020), and Ranked 21st among Top B-Schools
                in India (Academic Insights, Issue: July 2020).
            </p>
            <p class="text-justify pt-8">
                The institute is pioneer in publishing research papers, case studies and
                book reviews nationally and internationally. Approximately hundred such
                publications are published by the faculty members of the institute. To
                further enhance the academic excellence, the institute is publishing
                peer reviewed bi-annual journals in the field of General Management,
                Human Resource Management, Finance, Marketing and Information Technology
                with ISSN Nos.
            </p>
            <p class="text-justify pt-8">
                The Institute has approval of All India Council for Technical Education
                & Bar Council of India and is affiliated to Jiwaji University, Gwalior.
                The Institute offers MBA, BBA, MBA Integrated, BTM, BCA, B.Sc (Computer
                Science) & B. Com (CA & Economics), B.Com Hons, BA (LlB), BBA (LlB),
                B.Com (LlB) programs.
            </p>
            <p class="text-justify pt-8">
                The institute is pioneer in publishing research papers, case studies and
                book reviews nationally and internationally. Approximately hundred such
                publications are published by the faculty members of the institute. To
                further enhance the academic excellence, the institute is publishing
                peer reviewed bi-annual journal “Prestige International Journal of
                Management and IT -Sanchayan” with ISSN No. 2277-1689 (print) 2278-8441
                (online).
            </p>
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
