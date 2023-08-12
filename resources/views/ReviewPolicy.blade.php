<!-- Review Policy -->

@extends('layouts.layout')
@section('title')
    Review Policy
@endsection

@section('content')

<div
class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
<div class="About block md:h-1/3 w-full md:w-2/3">
        <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500" style="color: red;">Peer Review Policy
        </h1>
        <p class="text-justify pt-14">
            The journal aims at publishing quality research to ensure publication of scientific ideas. Peer review
            process is taken care of at different levels.
        </p>
        <p class="text-justify pt-8">
            The Peer Review process followed by the journal is given below:
        </p>
        <p class="text-justify pt-8">
            Stage I. Editor Desk: The editors evaluate all manuscripts to check their viability for publication. The
            manuscript that are either not in line with the journal’s aims and scope or are poorly written manuscripts
            in terms of structure or language, improper scientific tools etc. are rejected at this stage. The manuscript
            is then sent for peer review to at least two out of three experts.
        </p>
        <p class="text-justify pt-8">
            Stage II. Selection of Reviewers: The reviewers are then selected on the basis of their expertise in the
            area of manuscript.
        </p>
        <p class="text-justify pt-8">
            Stage III. Double Blind Review: The manuscript shortlisted at editor desk is sent to the reviewers without
            revealing their identity to authors; similarly, reviewers are also unaware of names of contributors.
        </p>
        <p class="text-justify pt-8">
            Stage IV. Reviewer Report: Reviewers are asked to evaluate and send their reports on the Relevance,
            adequacy, objectives and appropriateness of methodology, significance of findings, addition to practice and
            theory.
        </p>
        <p class="text-justify pt-8">
            Stage V. Informing Authors: The reviewer’s reports are communicated to the authors both in case of rejection
            or revisions required.
        </p>
        <p class="text-justify pt-8">
            Stage VI. Final Decision: After initial revision manuscript can be sent for further review, based upon
            initial reviewer’s recommendation. The decision of editors will be final.
        </p>
        <p class="text-justify pt-8">
            Time Taken for Review: The review process takes 2 to 6 weeks to evaluate the manuscript. In case of delay by
            reviewer or if the reports contradict among reviewers, third expert will be contacted to evaluate the
            manuscript.
        </p>
    </div>

    @component('components.links')
    @endcomponent

</div>


@endsection
