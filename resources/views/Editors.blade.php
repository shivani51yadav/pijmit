@extends('layouts.layout')
@push('title')
    <title>Editors</title>
@endpush

@section('content')
        <!-- EDITORS -->
        <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
            <div class="About block md:h-1/3 w-full md:w-2/3">
              <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Editor In Chief</h1>
              <img src="https://pjitm.com/images/sanchayan/drgarima.jpg" alt="Image of Editor In Chief" class="object-contain py-4">
              <div class="Information text-justify ">
                  <div><h3 class="font-bold">Dr. Garima Mathur</h3></div>
                  <div><h3 class="font-bold">Professor (HRM)</h3></div>
                  <div class="flex" ><h3><b class="font-medium">Qualification:</b> UGC-NET, PhD, M.B.A. (HRM), M. A. (Psychology) </h3></div>
                  <div class="flex" ><h3><b class="font-medium">Email:</b> garima.mathur@prestigegwl.org</h3></div>
                  <div class="flex" ><h3> <b class="font-medium">Qualification:</b> +91-0751-4097028</h3></div>

              </div>
              <p class="text-justify pt-8">
                  Dr. Garima Mathur is Professor in Human Resource Management She is Head, HR Department & MBA Program with more than 16 years of research and academic experience. She has been engaged in corporate and academic trainings in variety of industries such as manufacturing, services, education. She has been talking about “Managing Emotions” at various platforms. She has chaired session/delivered keynote speeches in various conferences including overseas conferences as well. She is PhD guide and Seven research scholars under her have already been awarded PhD degree. She is active researcher and in all over ninety national and international refereed publications including Scopus, Web of Sciences and ABDC etc are due to her credit. She is an active Member of AIB, ISTD, (IAA) and GMA. She has also published five edited books. She is editor of ‘Prestige International Journal of IT & Management- Sanchayan’ and member of editorial and review boards of many reputed journals including Academy of Management- Annual Meeting, Inderscience Journals, Sage etc. She can be contacted at garimanmathur@gmail.com.
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
                <div class="p-5 p-5 flex flex-col justify-start">
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
