@extends('layouts.layout')
@push('title')
    <title>Call For Reviewers</title>
@endpush

@section('content')
    <!-- Call for Reviews -->

    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">Call for Reviewers</h1>
            <p class="text-justify pt-14">
                Reviewers are invited from all over the world to review papers in their interested areas. Reviewers may
                download ‘Reviewer’s Application Form’ and send duly filled in form to the editor within twelve weeks in
                hard copy. The same can also be submitted electronically. Reviewers are requested to go through the
                guidelines given below:
            </p>
            <h1 class=" text-2xl font-bold underline decoration-wavy decoration-sky-500 text-justify pt-8">Review Guidelines
            </h1>
            <p class="text-justify pt-8">
                • Reviewers should try to fill in all the parts of reviewers report to make a fair judgment regarding the
                quality of the paper.
            </p>
            <p class="text-justify pt-8">
                • Reviewers should respond within stipulated time frame of two week for the journal.
            </p>
            <p class="text-justify pt-8">
                • Every reviewer is supposed to be fair in reviewing and no manuscript should be reviewed which is authored,
                co-authored or authored by some known person/s, in order to avoid biasness.
            </p>
            <p class="text-justify pt-8">
                • Any reviewer who feels him/herself as unqualified, or not having judgment idea or deficit of time should
                inform editor promptly, so that the paper can be forwarded elsewhere.
            </p>
            <p class="text-justify pt-8">
                • As review is essential step towards publication process, the review should be objective one, and personal
                feelings, judgments or biasness should not affect the review and its outcomes.
            </p>
            <p class="text-justify pt-8">
                • A manuscript sent for review is a confidential document, so it should be treated fairly and secretly and
                should not be disclosed.
            </p>
            <p class="text-justify pt-8">
                • Each point should be commented clearly to make decision process of acceptance/rejection easy.
            </p>
            <p class="text-justify pt-8">
                • The changes/ corrections required should also be clearly stated.
            </p>
            <p class="text-justify pt-8">
                • If reviewer notices any similarity with any other paper published in any other journal, containing same
                contents etc. should be informed immediately to editor.
            </p>
            <p class="text-justify pt-8">
                • At the time of review the reviewer must focus on Originality, Contribution to field of technical quality
                of research, Clarity of issues presented in the paper and depth of research.
            </p>
            <p class="text-justify pt-8">
                • The reviewer can download ‘Review Form’. Click Here
            </p>
            <p class="text-justify pt-8">
                • To download the 'Reviewer Information Form’. Click Here
            </p>
        </div>

        <!-- CARDS -->
        @component('components.links')
        @endcomponent

    </div>
@endsection
