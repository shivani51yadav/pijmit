@extends('layouts.layout')
@push('title')
    <title>International Advisory Committee</title>
@endpush

@section('content')
    <!-- INTERNATIONAL ADVISORY COMMITTEE -->

    <div
        class="flex flex-col md:flex-row gap-10 justify-center align-top p-4 md:p-10 shadow-lg bg-white md:max-w-[80%] m-auto mt-20 md:mt-20 mb-10 rounded-xl">
        <div class="About block md:h-1/3 w-full md:w-2/3">
            <h1 class="text-2xl font-bold underline decoration-wavy decoration-sky-500">International Advisory Committee
                PIMRG</h1>
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
                <li>Dr. Naresh K. Malhotra, Senior Fellow, Georgia Tech CIBER, Regents’ Professor Emeritus, West Peachtree
                    St. NW, Atlanta, USA</li>
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
        @component('components.links')
        @endcomponent

    </div>
@endsection
