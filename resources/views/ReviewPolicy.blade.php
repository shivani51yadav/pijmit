<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="/dist/output.css"> -->
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PIJMIT</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
    </style>
  </head>
  <body>
    <div class="navbar fixed top-0 w-full">
      <div class="navbar">
        <nav
          class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700"
        >
          <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
          >
            <a href="" class="flex items-center">
              <img
                src="https://tse4.explicit.bing.net/th?id=OIP.GHvjvzSUaoMzAku2uqDcjgHaHa&pid=Api&P=0&h=180"
                class="h-8 mr-3"
                alt="PIJMIT Logo"
              />
              <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >PIJMIT</span
              >
            </a>
            <button
              data-collapse-toggle="navbar-dropdown"
              type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="navbar-dropdown"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 17 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15"
                />
              </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
              <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
              >
                <li>
                  <a
                    href="./index.html"
                    class="block py-2 pl-3 pr-4 text-gray-900  bg-emerland-200 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-emerland-200 md:dark:bg-transparent"
                    aria-current="page"
                    >About PIMG</a
                  >
                </li>
  
                <li>
                  <a
                    href="./ReviewPolicy.html"
                    class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                    >Review Policy</a
                  >
                </li>
                <li>
                  <a
                    href="./GuidelinesForAuthor.html"
                    class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                    >Guidelines for Author</a
                  >
                </li>
  
                <!-- Editorial Board -->
                <li>
                  <button
                    id="dropdownNavbarLink"
                    data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                  >
                    Editorial Board
                    <svg
                      class="w-2.5 h-2.5 ml-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      />
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div
                    id="dropdownNavbar"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                  >
                    <ul
                      class="py-2 text-sm text-gray-700 dark:text-gray-400"
                      aria-labelledby="dropdownLargeButton"
                    >
                      <li>
                        <a
                          href="./InternationalAdvisoryCommittee.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >
                          International Advisory Committee</a
                        >
                      </li>
                      <li>
                        <a
                          href="./EditorInChief.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Editor in Chief</a
                        >
                      </li>
                      <li>
                        <a
                          href="./Editors.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Editors</a
                        >
                      </li>
                      <li>
                        <a
                          href="./AssociateEditors.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Associate Editors</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
  
                <!-- Issue drop -->
                <li>
                  <button
                    id="dropdownNavbarLink"
                    data-dropdown-toggle="issueDropDown"
                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                  >
                    Issues
                    <svg
                      class="w-2.5 h-2.5 ml-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      />
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div
                    id="issueDropDown"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                  >
                    <ul
                      class="py-2 text-sm text-gray-700 dark:text-gray-400"
                      aria-labelledby="dropdownLargeButton"
                    >
                      <li>
                        <a
                          href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        >
                          Old Issue
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Current Issue</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
  
                <!-- More drop -->
                <!-- Editorial Board -->
                <li>
                  <button
                    id="dropdownNavbarLink"
                    data-dropdown-toggle="editorialBoardDropDown"
                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"
                  >
                    More
                    <svg
                      class="w-2.5 h-2.5 ml-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      />
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div
                    id="editorialBoardDropDown"
                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                  >
                    <ul
                      class="py-2 text-sm text-gray-700 dark:text-gray-400"
                      aria-labelledby="dropdownLargeButton"
                    >
                      <li>
                        <a
                          href="./CallForReviewers.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Call for Reviewers</a
                        >
                      </li>
                      <li>
                        <a
                          href="./Subscription.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Subscription
                        </a>
                      </li>
                      <li>
                        <a
                          href="./PublicationEthics.html"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Publication Ethics</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Review Policy -->

    <div class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
      <div class="About block md:h-1/3 w-full md:w-2/3">
        <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500" style="color: red;">Peer Review Policy</h1>
        <p class="text-justify pt-14">
            The journal aims at publishing quality research to ensure publication of scientific ideas. Peer review process is taken care of at different levels.
        </p>
        <p class="text-justify pt-8">
            The Peer Review process followed by the journal is given below:
        </p>
        <p class="text-justify pt-8">
            Stage I. Editor Desk: The editors evaluate all manuscripts to check their viability for publication. The manuscript that are either not in line with the journal’s aims and scope or are poorly written manuscripts in terms of structure or language, improper scientific tools etc. are rejected at this stage. The manuscript is then sent for peer review to at least two out of three experts.
        </p>
        <p class="text-justify pt-8">
            Stage II. Selection of Reviewers: The reviewers are then selected on the basis of their expertise in the area of manuscript.
        </p>
        <p class="text-justify pt-8">
            Stage III. Double Blind Review: The manuscript shortlisted at editor desk is sent to the reviewers without revealing their identity to authors; similarly, reviewers are also unaware of names of contributors.
        </p>
        <p class="text-justify pt-8">
            Stage IV. Reviewer Report: Reviewers are asked to evaluate and send their reports on the Relevance, adequacy, objectives and appropriateness of methodology, significance of findings, addition to practice and theory.
        </p>
        <p class="text-justify pt-8">
            Stage V. Informing Authors: The reviewer’s reports are communicated to the authors both in case of rejection or revisions required.
        </p>
        <p class="text-justify pt-8">
            Stage VI. Final Decision: After initial revision manuscript can be sent for further review, based upon initial reviewer’s recommendation. The decision of editors will be final.
        </p>
        <p class="text-justify pt-8">
            Time Taken for Review: The review process takes 2 to 6 weeks to evaluate the manuscript. In case of delay by reviewer or if the reports contradict among reviewers, third expert will be contacted to evaluate the manuscript.
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
    
    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900 pt-10 lg:pr-1">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
              <img
                src="https://tse4.explicit.bing.net/th?id=OIP.GHvjvzSUaoMzAku2uqDcjgHaHa&pid=Api&P=0&h=180"
                class="h-8 mr-3"
                alt="PIJMIT Logo"
              />
              <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >PIJMIT</span
              >
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Resources
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline"
                    >About</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline"
                    >Editorial Board</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Legal
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a
                    href="./ReviewPolicy.html"
                    class="hover:underline"
                    >Review Policy</a
                  >
                </li>
                <li>
                  <a
                    href="./GuidelinesForAuthor.html"
                    class="hover:underline"
                    >Guidelines for Author</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Contact Us
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a
                    href="mailto:prestigejournal@gmail.com"
                    class="hover:underline break-words"
                    >prestige.journal@gmail.com</a
                  >
                </li>
                <li>
                  <a href="#" class="hover:underline break-words"
                    >sanchayan.journal@prestigegwl.org</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 dark:text-gray-400"
            >© 2021
            <a href="#" class="hover:underline"
              >Sanchayan</a
            >
            <br />
            <span class="break-normal"
              >Prestige International Journal of Management and IT - 2021</span
            >
          </span>
          <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
            <a
              href="https://www.facebook.com/"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 8 19"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a
              href="https://www.instagram.com/"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-4 h-4"
                fill="grey"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"
                ></path>
              </svg>
              <span class="sr-only">Instagram</span>
            </a>
            <a
              href="https://twitter.com/?lang=en-in"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 17"
              >
                <path
                  fill-rule="evenodd"
                  d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a
              href="https://github.com/"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
  </body>
</html>
