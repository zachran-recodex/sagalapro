@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Privacy Policy for Triwalana Sagala Pro, outlining our commitment to user privacy and data protection.">
    <meta name="keywords"
        content="Privacy Policy, Triwalana Sagala Pro, Data Protection, User Privacy, Aerial Support Services">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#2A6F97">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Privacy Policy | Triwalana Sagala Pro</title>
@endsection

<x-layout.main>
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh]"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="relative bg-sagala-opt-950/50 h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        Privacy Policy
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="py-main">
        <div class="container-main space-y-6">
            <h3 class="text-2xl font-semibold">Introduction</h3>
            <p>Triwalana Sagala Pro is committed to protecting your privacy. This privacy policy outlines how we collect,
                use, and safeguard your personal information.</p>

            <h3 class="text-2xl font-semibold">Information Collection</h3>
            <p>We collect information you provide directly to us, including your name, contact details, and any other
                information you choose to provide.</p>

            <h3 class="text-2xl font-semibold">Use of Information</h3>
            <p>Your information helps us to better respond to your service requests and improve our services. We may also
                use it for internal purposes such as data analysis and research.</p>

            <h3 class="text-2xl font-semibold">Information Sharing</h3>
            <p>We do not share your personal information with third parties except when required by law or to protect our
                rights, property, or safety.</p>

            <h3 class="text-2xl font-semibold">Data Security</h3>
            <p>We implement various security measures to protect your personal information from unauthorized access, use, or
                disclosure.</p>

            <h3 class="text-2xl font-semibold">Your Rights</h3>
            <p>You have the right to access, modify, or delete your personal information. To make a request, please contact
                us at our official email address.</p>

            <h3 class="text-2xl font-semibold">Updates to This Policy</h3>
            <p>We may update our privacy policy from time to time. Any changes will be posted on this page with an updated
                revision date.</p>

            <h3 class="text-2xl font-semibold">Contact Us</h3>
            <p>If you have any questions or concerns about this privacy policy, please contact us at:</p>
            <p>Email: <a href="mailto:info@triwalanasagalapro.com" class="text-sagala-600">info@triwalanasagalapro.com</a>
            </p>
        </div>
    </section>
</x-layout.main>
