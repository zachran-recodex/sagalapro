@extends('layouts.main')

@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Contact Triwalana Sagala Pro today for reliable aerial support services in Indonesia. Reach out to us for inquiries on aerial mapping, land surveys, or operational air support.">
    <meta name="keywords"
        content="Aerial Support Indonesia, Aerial Services, Aerial Mapping, Land Surveys, Operational Air Support, Triwalana Sagala Pro, Aerial Support Company, Air Operational Support, Aerial Technology, Reliable Aerial Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2A6F97">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>Contact Triwalana Sagala Pro | Get in Touch for Aerial Support Services</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh]"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="relative bg-sagala-opt-950/50 h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        Contact Us
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-main">
        <div class="container-main">
            <!-- Section Title -->
            <div class="text-center mb-8">
                <h3 class="text-xl sm:text-4xl font-semibold mb-6">
                    Contact Us
                </h3>
                <p class="text-lg sm:text-xl md:text-2xl text-sagala-opt-700">
                    We provide the best aviation solutions for your needs.
                </p>
            </div>

            <!-- Contact Content -->
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <!-- Contact Info -->
                <div class="w-full lg:w-1/2">
                    <iframe class="mb-4 w-full h-[300px]"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.161128965707!2d106.7819304!3d-6.2584243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4a5201f3c8cca305%3A0xff00a2a340bf81be!2sSAGALAPRO!5e0!3m2!1sen!2sid!4v1727987395516!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="bg-sagala-600 text-sagala-opt-50 p-6 mb-4">
                        <h5 class="text-xl font-semibold mb-3">GET IN TOUCH</h5>
                        <p class="mb-4 text-justify">
                            Send us a message or reach us by phone during our regular office hours.
                        </p>
                        <h5 class="text-lg font-semibold mb-2">PHONE</h5>
                        <p>
                            {{ $setting->phone_one }}
                            <br>
                            {{ $setting->phone_two }}
                        </p>
                    </div>
                    <p class="text-justify text-sagala-opt-700">
                        Our customer service team will follow up on any messages/calls received outside of our regular
                        customer service hours within the next business day.
                    </p>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-1/2">
                    <div class="border border-sagala-opt-300 p-6">
                        <h5 class="text-xl font-semibold mb-4">CLIENT SUPPORT</h5>
                        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-sagala-opt-900">Name</label>
                                <input type="text" id="name" name="name"
                                    class="bg-sagala-opt-200 border-0 text-sagala-opt-900 text-sm focus:ring-sagala-600 focus:border-sagala-600 block w-full p-2.5"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="mb-5">
                                <label for="phone" class="block mb-2 text-sm font-medium text-sagala-opt-900">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="bg-sagala-opt-200 border-0 text-sagala-opt-900 text-sm focus:ring-sagala-600 focus:border-sagala-600 block w-full p-2.5"
                                    placeholder="Your Phone Number" required pattern="[0-9]{10,15}">
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-sagala-opt-900">E-mail
                                    Address</label>
                                <input type="email" id="email" name="email"
                                    class="bg-sagala-opt-200 border-0 text-sagala-opt-900 text-sm focus:ring-sagala-600 focus:border-sagala-600 block w-full p-2.5"
                                    placeholder="Your E-mail Address" required>
                            </div>
                            <div class="mb-5">
                                <label for="service" class="block mb-2 text-sm font-medium text-sagala-opt-900">Select
                                    Service</label>
                                <select id="service" name="service"
                                    class="bg-sagala-opt-200 border-0 text-sagala-opt-900 text-sm focus:ring-sagala-600 focus:border-sagala-600 block w-full p-2.5"
                                    required>
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="acquisition">Aircraft & Helicopter Acquisition</option>
                                    <option value="aerial">Aerial Fire-Fighting Consultant & Operation</option>
                                    <option value="cargo">Heavy & Outsized Cargo Service</option>
                                    <option value="charter">Private Jet Charters & Flights</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-sagala-opt-900">Message</label>
                                <textarea id="message" name="message"
                                    class="bg-sagala-opt-200 border-0 text-sagala-opt-900 text-sm focus:ring-sagala-600 focus:border-sagala-600 block w-full p-2.5"
                                    placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <button type="submit"
                                class="bg-sagala-600 text-sagala-opt-50 font-bold py-2 px-4 w-full">SUBMIT</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
