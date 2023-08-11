@extends('layouts.layout')
@push('title')
    <title>About</title>
@endpush

@section('content')
          <!-- INTERNATIONAL ADVISORY COMMITTEE -->

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
          <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">International Advisory Committee PIMRG</h1>
              <ul class="text-justify pt-14 list-disc  ">
                  <li>Dr. CHAN Man Hin, Eve Technological and Higher Education Institute of Hong Kong (THEi), Hong Kong</li>
                  <li>Dr. Daisy Kee Mui Hung, Universiti Sains Malaysia, Malaysia</li>
                  <li> Dr. Debi S. Saini, MDI, Gurgaon, India</li>
                  <li> Dr. Gan Kia Hui, SENTRAL College, Penang, Malaysia</li>
                  <li>Dr. Indrajit Ghoshal, Jaipur</li>
                  <li>Dr. Justin Paul, University of Washington, Foster School of Business, USA</li>
                  <li>Dr. Liam Gai Sin, AIBPM, Indonesia</li>
                  <li>Dr. Md. Rabiul Basher Rubel, Bangladesh University of Professionals (BUP), Bangladesh</li>
                  <li>Dr. Mohinder Chand, Kurukshetra University, India</li>
                  <li>Dr. Naresh K. Malhotra, Senior Fellow, Georgia Tech CIBER, Regents’ Professor Emeritus, West Peachtree St. NW, Atlanta, USA</li>
                  <li>Dr. Nathan Furr, INSEAD, France</li>
                  <li>Dr. Rajendra Nargundkar, Professor, IIM, Indore (Ex-Director, IMT, Nagpur), India</li>
                  <li>Dr. Ravindran Ramasamy, Professor, University Tun Abdul Razak, Kuala Lampur, Malaysia</li>
                  <li>Dr. Shyam S. Lodha, Southern Connecticut State University, New Haven, Connecticut, USA</li>
                  <li>Dr. Sudhir Rana, Gulf Medical University, UAE</li>
                  <li>Dr. Sumit Narula, Amity University, Madhya Pradesh</li>
                  <li>Dr. Teoh Kok Ban, SENTRAL College Penang, Malaysia</li>
                  <li>Mr. Balachadar Kariaappan, TUM School of Management, Germany</li>
                  <li>Prof. Nageshwar Rao, Pro Vice Chancellor, Indira Gandhi National Open University New Delhi, India</li>
                  <li>Prof. P. K. Singh, MDI, Gurgaon</li>
                  <li>Prof. Raghuveer Singh, Vice Chancellor, Teerthankar Mahaveer University, Moradabad</li>
                  <li>Prof. Ravi Shankar, Dept. of Management Studies, IIT Delhi</li>
                  <li>Prof. Umesh Holani, Jiwaji University, Gwalior, India</li>
              </ul>
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

      </div>    <!-- INTERNATIONAL ADVISORY COMMITTEE -->

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
      <div class="About block md:h-1/3 w-full md:w-2/3">
        <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">International Advisory Committee PIMRG</h1>
            <ul class="text-justify pt-14 list-disc  ">
                <li>Dr. CHAN Man Hin, Eve Technological and Higher Education Institute of Hong Kong (THEi), Hong Kong</li>
                <li>Dr. Daisy Kee Mui Hung, Universiti Sains Malaysia, Malaysia</li>
                <li> Dr. Debi S. Saini, MDI, Gurgaon, India</li>
                <li> Dr. Gan Kia Hui, SENTRAL College, Penang, Malaysia</li>
                <li>Dr. Indrajit Ghoshal, Jaipur</li>
                <li>Dr. Justin Paul, University of Washington, Foster School of Business, USA</li>
                <li>Dr. Liam Gai Sin, AIBPM, Indonesia</li>
                <li>Dr. Md. Rabiul Basher Rubel, Bangladesh University of Professionals (BUP), Bangladesh</li>
                <li>Dr. Mohinder Chand, Kurukshetra University, India</li>
                <li>Dr. Naresh K. Malhotra, Senior Fellow, Georgia Tech CIBER, Regents’ Professor Emeritus, West Peachtree St. NW, Atlanta, USA</li>
                <li>Dr. Nathan Furr, INSEAD, France</li>
                <li>Dr. Rajendra Nargundkar, Professor, IIM, Indore (Ex-Director, IMT, Nagpur), India</li>
                <li>Dr. Ravindran Ramasamy, Professor, University Tun Abdul Razak, Kuala Lampur, Malaysia</li>
                <li>Dr. Shyam S. Lodha, Southern Connecticut State University, New Haven, Connecticut, USA</li>
                <li>Dr. Sudhir Rana, Gulf Medical University, UAE</li>
                <li>Dr. Sumit Narula, Amity University, Madhya Pradesh</li>
                <li>Dr. Teoh Kok Ban, SENTRAL College Penang, Malaysia</li>
                <li>Mr. Balachadar Kariaappan, TUM School of Management, Germany</li>
                <li>Prof. Nageshwar Rao, Pro Vice Chancellor, Indira Gandhi National Open University New Delhi, India</li>
                <li>Prof. P. K. Singh, MDI, Gurgaon</li>
                <li>Prof. Raghuveer Singh, Vice Chancellor, Teerthankar Mahaveer University, Moradabad</li>
                <li>Prof. Ravi Shankar, Dept. of Management Studies, IIT Delhi</li>
                <li>Prof. Umesh Holani, Jiwaji University, Gwalior, India</li>
            </ul>
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
