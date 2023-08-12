@extends('layouts.layout')
@push('title')
    <title>Associate Editors</title>
@endpush

@section('content')
    <!-- ASSOCIATE EDITORS -->
    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">
                Associate Editors
            </h1>

            <img src="https://pjitm.com/images/sanchayan/drnavita.jpg" alt="Image of Editor In Chief"
                class="object-contain py-4" />
            <div class="Information text-justify">
                <div>
                    <h3 class="font-bold">Dr. Navita Nathani</h3>
                </div>
                <div>
                    <h3 class="font-bold">Professor (Finance)</h3>
                </div>
                <div class="flex">
                    <h3>
                        <b class="font-medium">Qualification:</b> PhD, M.B.A. (Finance),
                        M.A. (Economics)
                    </h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Email:</b> drnavita@prestigegwl.org</h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Qualification:</b> 0751-4097056</h3>
                </div>
            </div>
            <p class="text-justify pt-8">
                Dr. Navita Nathani is a professor, and Deputy Director, dept of
                management. Dr. Nathani worked in corporate for two years. She has
                been associated with Prestige Institute of Management, Gwalior for
                last fifteen years, with primary teaching in the field of Finance. Her
                research interests are in the area of behavioral finance, Project
                Management, and Entrepreneurship. Currently she is chief coordinator
                of AICTE approved Entrepreneurial Development Cell and MSME approved
                incubation centre at PIMG.
            </p>

            <p class="text-justify pt-8">
                Dr. Nathani writes extensively, and has more than 70 publications
                spanning outlets that include refereed journals, case studies, book
                chapters, and edited books. She is a corporate trainer and has been
                training since last seven years in corporate; few of them are ICAI,
                ICICI Prudential and HDFC bank. Furthermore she is mentoring, guiding
                and consulting projects of smart city incubation centre, Gwalior,
                MPCon and MSME, Indore. She has also excelled in culturally diverse,
                multidisciplinary, fast-paced environment and has studied the
                entrepreneurial growth in this area and conducted more than 20 MDPs
                for the budding and existing entrepreneurs.
            </p>

            <p class="text-justify pt-8">
                Dr. Nathani holds an MBA in Finance & Marketing from Banasthali
                Vidyapith and obtained doctorate in Project Management from Jiwaji
                University. Six candidates are awarded PhD under her guidance and six
                students are pursuing. In addition to this she has already worked on
                two projects sanctioned by AICTE and ICSSR. She is a member, Faculty
                of Management, Barkatullah University, Bhopal and professionally
                associated with Indian Accounting Association, ISTD chapter and Member
                of CII. Dr. Nathani is an active social worker and has a passion to
                promote the well-being of society. She is accessible at
                drnavita@prestigegwl.org or drnavita810@gmail.com.
            </p>

            <img src="https://pjitm.com/images/sanchayan/drtarika.png" alt="Image of Editor In Chief"
                class="object-contain py-4" />
            <div class="Information text-justify">
                <div>
                    <h3 class="font-bold">Dr. Tarika Singh</h3>
                </div>
                <div>
                    <h3 class="font-bold">Professor (Finance)</h3>
                </div>
                <div class="flex">
                    <h3>
                        <b class="font-medium">Qualification:</b>PhD, M.B.A. (Finance &
                        Marketing), B. Sc.
                    </h3>
                </div>
                <div class="flex">
                    <h3>
                        <b class="font-medium">Email:</b> tarika.singh@prestigegwl.org
                    </h3>
                </div>
                <div class="flex">
                    <h3><b class="font-medium">Contact No:</b> 0751-4097025</h3>
                </div>
            </div>
            <p class="text-justify pt-8">
                Dr. Tarika Singh is presently Professor &Deputy Director (IT, Law, and
                Commerce) in Prestige Institute of Management and Research Gwalior.
                She has more than fifteen years of rich experience in academics and
                Research. She is Ph.D. Guide for Management and Commerce at Jiwaji
                University and five students have been awarded Ph.D. under her
                guidance and four are pursuing Ph.D. She has her publication in
                reputed journals including Scopus, ABDC, and Web of Science Journals.
                She has been on the Panel of Reviewers of several journals being
                published from India and abroad. She is an energetic member of the
                Indian Accounting Association and Indian Commerce Association.
            </p>

            <p class="text-justify pt-8">
                She is a well-recognized trainer and has conducted several MDPs on
                Strategic Leadership, Team building, Communication Skills, and areas
                of Finance. She has organized and Coordinated different conferences,
                research methodology workshops and headed and guided different groups
                in different case wring workshops. She has authored/co-authored more
                than seventy publications in various known International and National
                Journals She has also presented her articles in various academic and
                professional conferences. She has been on the Panel of Reviewers of
                several journals being published from India and abroad. She is
                energetic a member of the Indian Accounting Association and Indian
                Commerce Association..
            </p>

            <p class="text-justify pt-8">
                She has core competencies in the areas of Management Development
                Trainings, Curriculum Development, Research, Extra-Curricular
                Initiatives, Lesson Design & Development, Subject Knowledge,
                Leadership & Mentoring and Technical Instruction
            </p>
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent
    </div>
@endsection
