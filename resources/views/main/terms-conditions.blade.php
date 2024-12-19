@section('meta_tag')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Terms and Conditions for Triwalana Sagala Pro, outlining the rules and regulations for using our services.">
    <meta name="keywords" content="Terms and Conditions, Triwalana Sagala Pro, Aerial Support Services, Service Agreement">
    <meta name="author" content="RECODEX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#2A6F97">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>Terms and Conditions | Triwalana Sagala Pro</title>
@endsection

<x-layout.main>
    <!-- Hero Section -->
    <section class="bg-cover bg-center bg-no-repeat h-[50vh]"
        style="background-image: url({{ asset('images/hero-about.jpg') }})">
        <div class="relative bg-sagala-opt-950/50 h-full flex items-center">
            <div class="container-main py-12">
                <div class="text-center lg:text-start">
                    <h2 class="text-4xl sm:text-6xl font-bold text-sagala-opt-50 mt-2">
                        Terms and Conditions
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms and Conditions Content -->
    <section class="py-main">
        <div class="container-main space-y-6">
            <h3 class="text-2xl font-semibold">Introduction</h3>
            <p>Welcome to Triwalana Sagala Pro. By using our services, you agree to be bound by the following terms and
                conditions.</p>

            <h3 class="text-2xl font-semibold">Use of Services</h3>
            <p>Our services are intended to provide aerial support and related services. Any unauthorized use of our
                services is prohibited.</p>

            <h3 class="text-2xl font-semibold">User Responsibilities</h3>
            <p>You are responsible for providing accurate information and maintaining the confidentiality of any account
                information. Unauthorized use of our services may lead to account termination.</p>

            <h3 class="text-2xl font-semibold">Service Limitations</h3>
            <p>Our services may be subject to limitations based on regulatory or technical constraints. We are not liable
                for any disruptions outside our control.</p>

            <h3 class="text-2xl font-semibold">Payment and Fees</h3>
            <p>All payments must be made in full according to the terms agreed upon during service engagement. Late or
                non-payment may result in service suspension.</p>

            <h3 class="text-2xl font-semibold">Intellectual Property</h3>
            <p>All content provided by Triwalana Sagala Pro, including trademarks, is protected under intellectual property
                laws. Unauthorized use is prohibited.</p>

            <h3 class="text-2xl font-semibold">Limitation of Liability</h3>
            <p>We are not liable for any direct or indirect damages resulting from the use of our services, except as
                required by law.</p>

            <h3 class="text-2xl font-semibold">Changes to Terms</h3>
            <p>We may update these terms from time to time. Continued use of our services after changes implies acceptance
                of the new terms.</p>

            <h3 class="text-2xl font-semibold">Contact Us</h3>
            <p>If you have questions about these Terms and Conditions, please contact us at:</p>
            <p>Email: <a href="mailto:info@triwalanasagalapro.com" class="text-sagala-600">info@triwalanasagalapro.com</a>
            </p>
        </div>
    </section>
</x-layout.main>
