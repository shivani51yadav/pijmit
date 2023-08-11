@extends('layouts.layout')
@section('title')
    About Page
@endsection

@section('content')
        <!-- ABOUT PIMRG -->
        <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
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
            <div dir="rtl" class="flex flex-col justify-items-center gap-2 pt-10 ">
              <div class="other_links">
                <h3 class=" text-lg font-medium text-center md:text-right md:hover:underline md:pb-4 pl-4 pr-4">Other Links</h3>
              </div>
              <div
              class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col md:flex-row shadow-lg shadow-gray-500/50 rounded"
            >
              <a href="#" class="flex justify-center items-center w-full">
                <img
                  class=" rounded-t-lg w-auto h-auto md:w-40 md:h-40 object-contain p-2"
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
                <a href="#" class="flex justify-center items-center w-full">
                  <img
                    class=" rounded-t-lg w-auto h-auto md:w-40 md:h-40 object-contain p-2"
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
                <a href="#" class="flex justify-center items-center w-full">
                  <img
                    class="rounded-t-lg w-auto h-auto md:w-40 md:h-40 object-contain p-2"
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
                <a href="#" class="flex justify-center items-center w-full">
                  <img
                    class="rounded-t-lg w-auto h-auto md:w-40 md:h-40 object-contain p-2"
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


