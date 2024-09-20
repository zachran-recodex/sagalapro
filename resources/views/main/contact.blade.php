@extends('layouts.main')

@section('content')
    <!-- Contact Section -->
    <section class="py-8 sm:py-12 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-40">
            <!-- Section Title -->
            <div class="text-center mb-8">
                <h3 class="text-xl sm:text-4xl font-semibold mb-6">
                    Contact Us
                </h3>
                <p class="text-lg sm:text-xl md:text-2xl text-[#7A7A7A]">
                    We provide the best aviation solutions for your needs.
                </p>
            </div>

            <!-- Contact Content -->
            <div class="flex flex-wrap lg:flex-nowrap gap-8 items-start">
                <!-- Contact Info -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-[#2A6F97] text-white p-6 mb-4">
                        <h5 class="text-xl font-semibold mb-3">GET IN TOUCH</h5>
                        <p class="mb-4 text-justify">
                            Send us a message or reach us by phone during our regular office hours.
                        </p>
                        <h5 class="text-lg font-semibold mb-2">PHONE / FAX</h5>
                        <p>
                            +62-21-22580029
                            <br>
                            0815-1312-1517
                        </p>
                    </div>
                    <p class="text-justify text-[#7A7A7A]">
                        Our customer service team will follow up on any messages/calls received outside of our regular
                        customer service hours within the next business day.
                    </p>
                </div>

                <!-- Contact Form -->
                <div class="w-full lg:w-1/2">
                    <div class="border border-gray-300 p-6">
                        <h5 class="text-xl font-semibold mb-4">CLIENT SUPPORT</h5>
                        <form>
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                <input type="text" id="name"
                                    class="bg-[#F1F1F1] border-0 text-[#BCBCBC] text-sm focus:ring-[#2A6F97] focus:border-[#2A6F97] block w-full p-2.5"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="mb-5">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                    Number</label>
                                <input type="text" id="phone"
                                    class="bg-[#F1F1F1] border-0 text-[#BCBCBC] text-sm focus:ring-[#2A6F97] focus:border-[#2A6F97] block w-full p-2.5"
                                    placeholder="Your Phone Number" required>
                            </div>
                            <div class="mb-5">
                                <label for="mail" class="block mb-2 text-sm font-medium text-gray-900">E-mail
                                    Address</label>
                                <input type="email" id="mail"
                                    class="bg-[#F1F1F1] border-0 text-[#BCBCBC] text-sm focus:ring-[#2A6F97] focus:border-[#2A6F97] block w-full p-2.5"
                                    placeholder="Your E-mail Address" required>
                            </div>
                            <div class="mb-5">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                                <textarea id="message"
                                    class="bg-[#F1F1F1] border-0 text-[#BCBCBC] text-sm focus:ring-[#2A6F97] focus:border-[#2A6F97] block w-full p-2.5"
                                    placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <button type="submit"
                                class="bg-[#2A6F97] text-white font-bold py-2 px-4 w-full">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
