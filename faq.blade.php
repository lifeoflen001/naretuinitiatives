@extends('layouts.main')

@section('title', 'FAQs | Naretu Initiatives')

@push('styles')
<style>
    /* Form Alert - Full Width & Centered */


    .form-alert.success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        display: block;
    }

    .form-alert.error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        display: block;
    }
    .form-alert {
    padding: 15px 20px;
    margin-bottom: 25px;
    border-radius: 4px;
    display: none;
    width: 100%;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    /* Match form row margins */
    margin-left: auto;
    margin-right: auto;
}

    /* Toast Notification */
    .toast-notification {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #333;
        color: white;
        padding: 12px 20px;
        border-radius: 6px;
        font-size: 13px;
        z-index: 9999;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }
    
    .toast-notification.show {
        opacity: 1;
        transform: translateY(0);
    }
    
    .toast-notification.success {
        background: #09cc7f;
    }
    
    .toast-notification.error {
        background: #c62828;
    }

    /* Loading State */
    .thm-btn.loading {
        opacity: 0.7;
        pointer-events: none;
    }

    .thm-btn .btn-loader {
        display: none;
    }

    .thm-btn.loading .btn-text {
        display: none;
    }

    .thm-btn.loading .btn-loader {
        display: inline-block;
    }
</style>
@endpush

@section('content')
    {{-- header --}}
    @include('partials.header')   
    
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/resources/pic5.jpg') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>FAQs</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">FAQs</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--FAQs Page Start-->
    <section class="paq-page">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How can I donate to support your causes?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>You can donate securely through our website using credit/debit cards, mobile money, or bank transfers. All donations go directly to our verified causes including education, healthcare, and food security programs. You will receive an instant receipt and regular updates on how your contribution is making an impact.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Where does my donation go?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>100% of your donation goes directly to the cause you choose to support. Our administrative costs are covered by separate corporate partnerships, ensuring that every dollar you give reaches those in need. We provide detailed reports and photos showing exactly how funds are used in communities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I start my own fundraising campaign?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Absolutely! You can create a personal fundraising page for birthdays, weddings, or special events. Simply click "Start Fundraising" and follow the easy steps to set your goal, share your story, and invite friends and family to contribute. Our team provides full support to help you reach your target.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion last-child">
                                <div class="accrodion-title">
                                    <h4>How do you ensure transparency and accountability?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We publish annual financial reports audited by independent firms. Each project has a dedicated page with real-time updates, photos, and beneficiary stories. We also welcome donors to visit project sites and see the impact firsthand. Our 4-star rating from Charity Navigator reflects our commitment to transparency.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Are my donations tax-deductible?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Yes, Naretu Initiatives is a registered 501(c)(3) nonprofit organization. All donations are tax-deductible to the fullest extent allowed by law. You will receive an official donation receipt via email immediately after your contribution, which you can use for tax purposes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I volunteer with your organization?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We offer both local and international volunteer opportunities. You can help with community outreach, event organization, administrative tasks, or skilled volunteering like teaching and healthcare. Visit our "Get Involved" page to fill out a volunteer application and our coordinator will match you with suitable opportunities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What communities do you currently serve?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We currently operate in 12 countries across East Africa, focusing on rural communities with limited access to education and healthcare. Our flagship programs are in Kenya, Uganda, and Tanzania, where we have established partnerships with local schools, clinics, and community leaders to ensure sustainable impact.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accrodion last-child">
                                <div class="accrodion-title">
                                    <h4>How can corporations partner with you?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We offer corporate partnership programs including cause marketing campaigns, employee matching gifts, sponsorship of specific projects, and team-building volunteer trips. Partners receive regular impact reports, branding opportunities, and recognition across our platforms. Contact our partnerships team to discuss customized collaboration opportunities.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQs Page End-->

    <!--Message One Start-->
    <section class="message-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Get In Touch With Us</span>
                <h2 class="section-title__title">Still Have Any Questions?</h2>
            </div>
            <div class="message-one__inner">
                <div id="formAlert" class="form-alert"></div>
                
                <form id="contactForm" action="{{ url('contact.submit') }}" method="POST" class="comment-one__form" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Your Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="email" placeholder="Email Address" name="email" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Phone Number" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="comment-form__input-box">
                                <input type="text" placeholder="Subject" name="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="comment-form__input-box text-message-box">
                                <textarea name="message" placeholder="Write your message..." required></textarea>
                            </div>
                            <div class="message-one__btn-box">
                                <button type="submit" class="thm-btn comment-form__btn" id="submitBtn">
                                    <span class="btn-text">Submit message</span>
                                    <span class="btn-loader"><i class="fa fa-spinner fa-spin"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Message One End-->

    <!-- Toast Notification -->
    <div id="toast" class="toast-notification"></div>

    @include('partials.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formAlert = document.getElementById('formAlert');
    const toast = document.getElementById('toast');

    // Handle form submission
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Clear any existing messages
        hideAlert();
        hideToast();
        
        // Basic validation
        const formData = new FormData(contactForm);
        const name = formData.get('name').trim();
        const email = formData.get('email').trim();
        const subject = formData.get('subject').trim();
        const message = formData.get('message').trim();
        
        if (!name || !email || !subject || !message) {
            showAlert('Please fill in all required fields.', 'error');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showAlert('Please enter a valid email address.', 'error');
            return;
        }
        
        // Show loading state
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        
        try {
            const response = await fetch(contactForm.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: formData
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                showToast('Message sent successfully! We will get back to you soon.', 'success');
                contactForm.reset();
                hideAlert();
            } else {
                throw new Error(data.message || 'Failed to send message. Please try again.');
            }
        } catch (error) {
            showAlert(error.message, 'error');
            showToast(error.message, 'error');
        } finally {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
        }
    });
    
    // Show alert in form area with auto-hide
    function showAlert(message, type) {
        formAlert.className = `form-alert ${type}`;
        formAlert.textContent = message;
        formAlert.style.display = 'block';
        
        // Auto-hide after 3 seconds
        setTimeout(() => {
            hideAlert();
        }, 3000);
    }
    
    // Hide alert
    function hideAlert() {
        formAlert.style.display = 'none';
        formAlert.className = 'form-alert';
        formAlert.textContent = '';
    }
    
    // Show toast notification with auto-hide
    function showToast(message, type = 'success') {
        toast.textContent = message;
        toast.className = `toast-notification ${type} show`;
        
        // Auto-hide after 3 seconds
        setTimeout(() => {
            hideToast();
        }, 3000);
    }
    
    // Hide toast
    function hideToast() {
        toast.classList.remove('show');
    }
});
</script>
@endpush