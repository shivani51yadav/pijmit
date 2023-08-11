@extends('layouts/layout')
@push('title')
    <title>About</title>
@endpush

@section('content')

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
          <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Publishing Ethics</h1>
          <p class="text-justify pt-14">
              Publication Ethics and Publication Malpractice Statement
              The journal follows a predefined ethical procedure for publication of manuscripts. In order to ensure high standards of publication the Prestige International Journal of Management & IT- Sanchayan follows best practices in terms of inviting, selecting and publishing. It is a peer reviewed journal and thus bears the responsibility of following ethical standards from all parties in stake. The journal does not tolerate any malpractices and to ascertain this, the journal outlines the duties and responsibilities of Editors, Associate Editors, Reviewers and Authors.
          </p>
          <p class="text-justify pt-8">
              Duties and Responsibilities of Editors (Editor in Chief, Editor & Associate Editors)
          </p>
          <p class="text-justify pt-2">
              1. Publication decisionthe Editor in Chief holds all the rights & responsibilities to accept, reject, or ask for modifications to the manuscript. The editors should ensure that they follow a fair system for evaluation of manuscripts. They should not evaluate manuscripts on the basis of ethnicity, caste, religion, gender etc. The editors should not reject any manuscript on account of suspicion alone. They should do so only with proper proof.
          </p>
          <p class="text-justify">
              2. Ethical Guidelines: the Editor in Chief holds all the rights & responsibilities to accept, reject, or ask for modifications to the manuscript. The editors should ensure that they follow a fair system for evaluation of manuscripts. They should not evaluate manuscripts on the basis of ethnicity, caste, religion, gender etc. The editors should not reject any manuscript on account of suspicion alone. They should do so only with proper proof
          </p>
          <p class="text-justify">
              3. Review of Manuscripts:The whole editorial team is also responsible for checking manuscripts for originality, Plagiarism and appropriate use of analytical tools. They must ensure that they follow ethical standards during desk review.

          </p>
          <p class="text-justify">
              4. Confidentiality: The editors should not disclose the identities of peer reviewers and authors to each other. The editors will have to make sure that information regarding manuscripts submitted by the authors is kept confidential before sending it for peer review.
          </p>
          <p class="text-justify pt-8">
              Duties of authors
          </p>
          <p class="text-justify">
              1. Reporting Guidelines: Authors must present their original work. The work done should be presented authentically. The underlying data must be represented accurately. All the sources used in development of manuscript should be cited at proper places. No unethical or inaccurate information presented knowingly will be tolerated. Authors must state that all data in the paper are real and authentic.
          </p>
          <p class="text-justify">
              2. Publication guidelines Authors must follow the submission guidelines of the journal. (See submission guideline policies).
          </p>
          <p class="text-justify">
              3. Authorship of the Paper: All authors mentioned in the paper must have significantly contributed to the research. Authors should retain raw data related to their manuscript for a reasonable time after publication for editorial review. Those who have significantly contributed must be considered as co-author/s. Due acknowledgements must be given to those who have helped in different ways for development of paper. The corresponding author should verify that all co-authors have approved the final version of the paper and have agreed to its submission for publication. Authors must notify the Editors of any conflicts of interest before publication.
          </p>
          <p class="text-justify">
              4. Multiple Submissions or concurrent Publication: Authors must certify that the manuscript is not currently being considered for publication elsewhere. Manuscript sent for publication elsewhere or previously published paper should not be submitted for publication. However, in some cases publications may be accepted for re-submission with due permission from the editors and proper citation.
          </p>
          <p>
              5. Plagiarism: The authors should ensure that they have properly cited work of others they have used for their research. There is strict ‘No tolerance’ for Plagiarism in any form. Plagiarism in all its forms constitutes unethical publishing behavior and is unacceptable.
          </p>
          <p>
              6. Peer Review Process: Authors must participate in the peer review process. The process may take few extra days.
          </p>
          <p>
              7. Fundamental Errors: Authors are obliged to provide retractions or corrections of mistakes at any point of time if the author(s) discovers a significant error or inaccuracy in submitted manuscript.
          </p>
          <p class="text-justify pt-8">
              Duties of Reviewers
          </p>
          <p class="text-justify">
              1. Contribution to Editorial Decisions: The reviewers must assist the editors in making decisions regarding publication by providing peer review in time. The reviewer’s feedback should assist in paper improvement. Reviewers should also provide a fair review.
          </p>
          <p class="text-justify">
              2. Confidentiality: Reviewers should keep all information regarding papers confidential and treat them as privileged information. The reviewers should not use unpublished manuscripts for their researches.
          </p>
          <p class="text-justify">
              3. Standards of Objectivity: Reviews should be conducted objectively, with no personal criticism of the author. Reviewers should express their views clearly with supporting arguments.
          </p>
          <p class="text-justify">
              4. Plagiarism, Fraud and Other Ethical Concerns: Reviewers should let the editor know if they suspect/find that a manuscript is a substantial copy of another work or the author’s own work published previously. Reviewers should identify relevant published work that has not been cited by the authors. Reviewers must ensure that authors have acknowledged all sources of data used in the research.
          </p>
          <p class="text-justify">
              5. Conflicts of Interest: Reviewers should not review manuscripts in which they have conflicts of interest resulting from competitive, collaborative, or other relationships or connections with any of the authors, companies, or institutions connected to the paper/s.
          </p>
          <p class="text-justify">
              6. Promptness: In the event that a reviewer feels it is not possible for him/her to complete review of manuscript within stipulated time then this information must be communicated to the editors so that the manuscript could be sent to another reviewer. The reviewer must ensure that they review manuscript in time.
          </p>
          <p class="text-justify pt-8">
              Duties of the Publisher
          </p>
          <p class="text-justify">
              We are committed to ensuring that advertising, reprint or other commercial revenue has no impact or influence on editorial decisions. In addition, we’ill assist in communications with other journals and/or publishers where this is useful to editors. Finally, we are working closely with other publishers and industry associations to set standards for best practices on ethical matters, errors and retractions--and are prepared to provide specialized legal review and counsel if necessary.
          </p>
          <p class="text-justify">
              1. Plagiarism Detection The peer review process is at the heart of the success of scientific publishing. As part of our commitment to the protection and enhancement of the peer review process, we have an obligation to assist the scientific community in all aspects of publishing ethics, especially in cases of (suspected) duplicate submission or plagiarism.
          </p>
          <p class="text-justify">
              2. Conflict of interest All authors are requested to disclose any actual or potential conflict of interest including any financial, personal or other relationships with other people or organizations within three years of beginning the submitted work that could inappropriately influence, or be perceived to influence, their work.
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
            <div class="p-5  flex flex-col justify-start">
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
