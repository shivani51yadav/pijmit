
@extends('layouts.layout')
@push('title')
    <title>Call For Reviewers</title>
@endpush

@section('content')
            <!-- Call for Reviews -->

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
          <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Call for Reviewers</h1>
          <p class="text-justify pt-14">
              Reviewers are invited from all over the world to review papers in their interested areas. Reviewers may download ‘Reviewer’s Application Form’ and send duly filled in form to the editor within twelve weeks in hard copy. The same can also be submitted electronically. Reviewers are requested to go through the guidelines given below:
          </p>
          <h1 class=" text-2xl font-bold underline decoration-wavy decoration-sky-500 text-justify pt-8">Review Guidelines</h1>
          <p class="text-justify pt-8">
              • Reviewers should try to fill in all the parts of reviewers report to make a fair judgment regarding the quality of the paper.
          </p>
          <p class="text-justify pt-8">
              • Reviewers should respond within stipulated time frame of two week for the journal.
          </p>
          <p class="text-justify pt-8">
              • Every reviewer is supposed to be fair in reviewing and no manuscript should be reviewed which is authored, co-authored or authored by some known person/s, in order to avoid biasness.
          </p>
          <p class="text-justify pt-8">
              • Any reviewer who feels him/herself as unqualified, or not having judgment idea or deficit of time should inform editor promptly, so that the paper can be forwarded elsewhere.
          </p>
          <p class="text-justify pt-8">
              • As review is essential step towards publication process, the review should be objective one, and personal feelings, judgments or biasness should not affect the review and its outcomes.
          </p>
          <p class="text-justify pt-8">
              • A manuscript sent for review is a confidential document, so it should be treated fairly and secretly and should not be disclosed.
          </p>
          <p class="text-justify pt-8">
              • Each point should be commented clearly to make decision process of acceptance/rejection easy.
          </p>
          <p class="text-justify pt-8">
              • The changes/ corrections required should also be clearly stated.
          </p>
          <p class="text-justify pt-8">
              • If reviewer notices any similarity with any other paper published in any other journal, containing same contents etc. should be informed immediately to editor.
          </p>
          <p class="text-justify pt-8">
              • At the time of review the reviewer must focus on Originality, Contribution to field of technical quality of research, Clarity of issues presented in the paper and depth of research.
          </p>
          <p class="text-justify pt-8">
              • The reviewer can download ‘Review Form’. Click Here
          </p>
          <p class="text-justify pt-8">
              • To download the 'Reviewer Information Form’. Click Here
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



