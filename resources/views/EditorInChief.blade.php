@extends('layouts.layout')
@push('title')
    <title>Editors in Chief</title>
@endpush

@section('content')
        <!-- Editors in Chief -->
        <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
            <div class="About block md:h-1/3 w-full md:w-2/3">
              <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Editor In Chief</h1>
              <img src="https://pjitm.com/images/sanchayan/drnishant.jpg" alt="Image of Editor In Chief" class=" max-md:w-8 max-md:h-14 object-contain py-4">
              <div class="Information text-justify ">
                  <div><h3 class="font-bold">Dr. Nishant Joshi</h3></div>
                  <div class="flex" ><h3><b class="font-medium">Qualification:</b> Ph.D., M.B.A., M.Com </h3></div>
                  <div class="flex" ><h3><b class="font-medium">Email:</b> nishant.joshi@prestigegwl.org</h3></div>
                  <div class="flex" ><h3> <b class="font-medium">Qualification:</b> 91-0751-4097002, 9826818107</h3></div>

              </div>
              <p class="text-justify pt-8">
                  Dr. Nishant Joshi is currently the Director, of the Prestige Institute of Management and Research, Gwalior an Autonomous Institute with NAAC Grade A and NBA accreditations. He is credited with bringing the Institute into NIRF (National Institutional Ranking Frame Work, Govt. of India) top 125 Management Institutions in India also during his tenure the institution's gross enrolment improved to record high with teaching and learning at the core of its activities.
              </p>
              <p class="text-justify pt-8">
                  As Professor and Director (DoL), at Prestige Institute of Management and Research, Indore an Autonomous Institute with NAAC A++ he was credited with setting a world-class Institute and making it from a mere 120-student institution to a 1000 + student Institute by implementing strategic policies, processes and culture.
              </p>
              <p class="text-justify pt-8">
                  He is also the Professional Director of HF Universal Private Limited an INR.100 Crore turnover Company and the Managing Director of PRO AGRI COM TRADE FZCO, Dubai, UAE. He has extensive experience in marketing and trading Agricultural Commodities for Food and Feed needs. His area of operations is West Asia and North Africa.
              </p>
              <p class="text-justify pt-8">
                  He is a PhD in International Marketing from the coveted 'Banasthali Vidhyapeeth', Rajasthan a NIRF top 50 University Ranked Globally by QSS and Times. He is an author and has been a faculty of International Business with Prestige Institute of Management and Research, Indore one of India's leading B-School.
              </p>
            </div>

            <!-- CARDS -->
            <div dir="rtl" class="flex flex-col justify-items-center gap-2 pt-10 ">
              <div class="other_links">
                <h3 class=" text-lg font-medium text-center md:text-right md:hover:underline md:pb-4 pl-4 pr-4">Other Links</h3>
              </div>
              <div
              class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row shadow-lg shadow-gray-500/50 rounded"
            >
              <a href="#">
                <img
                  class=" rounded-t-lg w-40 h-40 object-contain p-2"
                  src="https://pjitm.com/images/sanchayan/sanchayan.jpg"
                  alt=""
                />
              </a>
              <div class="p-5  flex flex-col justify-start">
                <a href="#">
                  <h5
                    class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center md:text-left"
                  >
                     Scholar
                  </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center md:text-left">
                  Sanchayan
                </p>
                <a
                  href="#"
                  class="items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-center md:text-left "
                >
                  Read more
                </a>
              </div>
            </div>

              <div
                class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row shadow-lg shadow-gray-500/50 rounded"
              >
                <a href="#">
                  <img
                    class=" rounded-t-lg w-40 h-40 object-contain p-2"
                    src="https://pjitm.com/images/sanchayan/proquest_logo.jpg"
                    alt=""
                  />
                </a>
                <div class="p-5  flex flex-col justify-start">
                  <a href="#">
                    <h5
                      class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center md:text-left"
                    >
                      Proquest
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center md:text-left">
                    Information
                  </p>
                  <a
                    href="#"
                    class="items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-center md:text-left "
                  >
                    Read more
                  </a>
                </div>
              </div>

              <div
                class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row shadow-lg shadow-gray-500/50 rounded"
              >
                <a href="#">
                  <img
                    class="rounded-t-lg w-40 h-40 object-contain p-2"
                    src="https://pjitm.com/images/sanchayan/publons.png"
                    alt=""
                  />
                </a>
                <div class="p-5 flex flex-col justify-start">
                  <a href="#">
                    <h5
                      class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center md:text-left"
                    >
                      Publons
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center md:text-left">
                    Information
                  </p>
                  <a
                    href="#"
                    class="items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-center md:text-left "
                  >
                    Read more

                  </a>
                </div>
              </div>

              <div
                class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row shadow-lg shadow-gray-500/50 rounded"
              >
                <a href="#">
                  <img
                    class="rounded-t-lg w-40 h-40 object-contain p-2"
                    src="https://pjitm.com/images/sanchayan/crossref-logo.jpeg"
                    alt=""
                  />
                </a>
                <div class="p-5 flex flex-col justify-start">
                  <a href="#">
                    <h5
                      class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white text-center md:text-left"
                    >
                      Crossref
                    </h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center md:text-left">
                    Information
                  </p>
                  <a
                    href="#"
                    class="items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 text-center md:text-left  "
                  >
                    Read more
                  </a>
                </div>
              </div>
            </div>

          </div>
@endsection
