<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{ __('form.subject') }}</h2>
            <h3 class="section-subheading text-muted">{{ __('form.secondsubject') }}</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="{{ __('form.name') }} *" required="required" data-validation-required-message="{{ __('form.namemsg') }}" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="{{ __('form.email') }} *" required="required" data-validation-required-message="{{ __('form.emailmsg') }}" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="{{ __('form.mobile') }} *" required="required" data-validation-required-message="{{ __('form.mobilemsg') }}" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="{{ __('form.message') }} *" required="required" data-validation-required-message="{{ __('form.messagemsg') }}"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">{{ __('form.send') }}</button>
            </div>
        </form>
    </div>
</section>
