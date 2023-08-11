@extends('layouts.layout')
@push('title')
    <title>Guidelines for Authors</title>
@endpush

@section('content')

        <!-- Guidelines for Authors -->

        <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
            <div class="About block md:h-1/3 w-full md:w-2/3">
              <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Guidelines for Authors</h1>
              <p class="text-justify pt-14">
                  1. All submitted manuscripts must be original work that is not
                  under submission at another journal or under consideration for
                  publication in another form, such as a monograph or chapter of
                  a book. Authors of submitted papers are obligated not to submit
                  their paper for publication elsewhere until an editorial decision
                  is rendered on their submission. Further, authors of accepted papers
                  are prohibited from publishing the results in other
                  publications that appear before the paper is published in the
                  Journal unless they receive approval for doing so from the editor.
              </p>
              <p class="text-justify pt-8">
                  2. Manuscript must be in MS Word processor in Times New Roman font 12 pt
                  font size on A-4 size paper with 1” margin from all sides with 1.5 line
                  spacing, and justified.
              </p>
              <p class="text-justify pt-8">
                  3. References appear at the end of the paper. They can be single spaced and not smaller than 10pt font
                  size. References to publications in the text should appear as follows: "Jensen and Meckling (1976)
                  report that..." or "(Jensen and Meckling, 1976)." At the end of the manuscript, the complete list of
                  references should be as follows: For monographs: Fama, Eugene F., and Merton H. Miller (1972). The
                  Theory of Finance (Dryden Press, Hinsdale, IL.). For contributions to collective works: Grossman,
                  Sanford J., and Oliver D. Hart (1982). Corporate financial structure and managerial incentives, in John
                  J. McCall, ed.: The Economics of Information and Uncertainty (University of Chicago Press). For
                  periodicals: Jensen, Michael C., and William H. Meckling (1976). Theory of the firm: Managerial
                  behavior, agency costs and ownership structure. Journal of Financial Economics, 3(2), 305-360. Only
                  those sources that are cited in the text should be mentioned in the reference list. References should be
                  listed as per the standard norms (APA Citation Format- 6th Edition). Kindly Adhere to given reference
                  style
              </p>
              <p class="text-justify pt-8">
                  4. The length of paper should be limited to approximately 15 pages including references (as per the
                  specified layout) excluding tables and figures.
              </p>
              <p class="text-justify pt-8">
                  5. Tables, figures, etc. should be serially numbered and duly acknowledged. Sources of the data need to
                  be given below each table or figure.
              </p>
              <p class="text-justify pt-8">
                  6. All but very short mathematical expressions should be displayed on a separate line and centered.
                  Equations must be numbered consecutively on the right margin, using Arabic numerals in parentheses. Do
                  not use a dot over a variable to denote time derivative; only D operator (partial) notations are
                  acceptable.
              </p>
              <p class="text-justify pt-8">
                  7. Footnotes should appear at the bottom of the page on which they are referenced (that is, they should
                  not be endnotes that appear at the end of the document). They should be single spaced. A smaller font
                  size is acceptable but not required.
              </p>
              <p class="text-justify pt-8">
                  8. Papers should have an abstract of about 200-300 words.
              </p>
              <p class="text-justify pt-8">
                  9. Paper submission must accompany a certificate/ declaration by the author(s) that the paper is his
                  original work and has neither been published nor submitted for publication elsewhere.
              </p>
              <p class="text-justify pt-8">
                  10. The cover page of the paper should contain-Title of the paper, Name of author(s), Professional
                  affiliation of author(s), Address for correspondence with email and telephone numbers.
              </p>
              <h1 class=" text-2xl font-bold underline decoration-wavy decoration-sky-500 text-justify pt-8">Correspondence</h1>
              <p class="text-justify pt-8">
                  • Prospective authors can submit their contributions in APA format after signing up at E-Reviewer Prestige
              </p>
              <p class="text-justify pt-8">
                  • If there is any query, clarification or suggestion please mail us at prestige.journal@gmail.com or visit our website: www.pjitm.com        </p>

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

          </div>    <!-- Guidelines for Authors -->

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
      <div class="About block md:h-1/3 w-full md:w-2/3">
        <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Guidelines for Authors</h1>
        <p class="text-justify pt-14">
            1. All submitted manuscripts must be original work that is not
            under submission at another journal or under consideration for
            publication in another form, such as a monograph or chapter of
            a book. Authors of submitted papers are obligated not to submit
            their paper for publication elsewhere until an editorial decision
            is rendered on their submission. Further, authors of accepted papers
            are prohibited from publishing the results in other
            publications that appear before the paper is published in the
            Journal unless they receive approval for doing so from the editor.
        </p>
        <p class="text-justify pt-8">
            2. Manuscript must be in MS Word processor in Times New Roman font 12 pt
            font size on A-4 size paper with 1” margin from all sides with 1.5 line
            spacing, and justified.
        </p>
        <p class="text-justify pt-8">
            3. References appear at the end of the paper. They can be single spaced and not smaller than 10pt font
            size. References to publications in the text should appear as follows: "Jensen and Meckling (1976)
            report that..." or "(Jensen and Meckling, 1976)." At the end of the manuscript, the complete list of
            references should be as follows: For monographs: Fama, Eugene F., and Merton H. Miller (1972). The
            Theory of Finance (Dryden Press, Hinsdale, IL.). For contributions to collective works: Grossman,
            Sanford J., and Oliver D. Hart (1982). Corporate financial structure and managerial incentives, in John
            J. McCall, ed.: The Economics of Information and Uncertainty (University of Chicago Press). For
            periodicals: Jensen, Michael C., and William H. Meckling (1976). Theory of the firm: Managerial
            behavior, agency costs and ownership structure. Journal of Financial Economics, 3(2), 305-360. Only
            those sources that are cited in the text should be mentioned in the reference list. References should be
            listed as per the standard norms (APA Citation Format- 6th Edition). Kindly Adhere to given reference
            style
        </p>
        <p class="text-justify pt-8">
            4. The length of paper should be limited to approximately 15 pages including references (as per the
            specified layout) excluding tables and figures.
        </p>
        <p class="text-justify pt-8">
            5. Tables, figures, etc. should be serially numbered and duly acknowledged. Sources of the data need to
            be given below each table or figure.
        </p>
        <p class="text-justify pt-8">
            6. All but very short mathematical expressions should be displayed on a separate line and centered.
            Equations must be numbered consecutively on the right margin, using Arabic numerals in parentheses. Do
            not use a dot over a variable to denote time derivative; only D operator (partial) notations are
            acceptable.
        </p>
        <p class="text-justify pt-8">
            7. Footnotes should appear at the bottom of the page on which they are referenced (that is, they should
            not be endnotes that appear at the end of the document). They should be single spaced. A smaller font
            size is acceptable but not required.
        </p>
        <p class="text-justify pt-8">
            8. Papers should have an abstract of about 200-300 words.
        </p>
        <p class="text-justify pt-8">
            9. Paper submission must accompany a certificate/ declaration by the author(s) that the paper is his
            original work and has neither been published nor submitted for publication elsewhere.
        </p>
        <p class="text-justify pt-8">
            10. The cover page of the paper should contain-Title of the paper, Name of author(s), Professional
            affiliation of author(s), Address for correspondence with email and telephone numbers.
        </p>
        <h1 class=" text-2xl font-bold underline decoration-wavy decoration-sky-500 text-justify pt-8">Correspondence</h1>
        <p class="text-justify pt-8">
            • Prospective authors can submit their contributions in APA format after signing up at E-Reviewer Prestige
        </p>
        <p class="text-justify pt-8">
            • If there is any query, clarification or suggestion please mail us at prestige.journal@gmail.com or visit our website: www.pjitm.com        </p>

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
