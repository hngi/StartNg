@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid first">
        <div class="container">
            <h1 class="display-4">Terms of Services</h1>
        </div>
    </div>

    <div class="container my-5 second">
        <h3>Terms and Conditions</h3>
        <div style="display: flex; justify-content: space-between;" class="col-sm-12 col-md-12 col-xs-12">
            <h5 class="secondheader">Last Revised: December 16, 2013
                <h5>
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.3596 0C20.7213 0 26.7189 5.99765 26.7189 13.3594C26.7189 16.5234 25.5799 19.4161 23.7307 21.7097L36.1689 34.1437L34.1439 36.1687L21.7085 23.7305C19.4177 25.5797 16.5236 26.7187 13.3596 26.7187C5.99785 26.7187 0.000198364 20.7211 0.000198364 13.3594C0.000198364 5.99765 5.99785 0 13.3596 0ZM13.3596 2.8125C7.51801 2.8125 2.8127 7.51781 2.8127 13.3594C2.8127 19.2009 7.51801 23.9062 13.3596 23.9062C19.2011 23.9062 23.9064 19.2009 23.9064 13.3594C23.9064 7.51781 19.2011 2.8125 13.3596 2.8125Z"
                            fill="#44CF6C" />
                    </svg>
        </div>
        <div class="container mb-5" style="overflow-y: scroll; height: 650px; width: 91%; margin-left: 0;">
            <p class="paragraph">
                Welcome to www.lorem-ipsum.info. This site is provided as a service to our visitors and may be used for informational purposes only. Because the Terms and Conditions contain legal obligations, please read them carefully. </p>
            <strong>1. YOUR AGREEMENT</strong>
            <p class="paragraph">By using this site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site. </p>

            <p class="paragraph"><strong>PLEASE NOTE:</strong>We reserve the right, at our sole discretion, to change, modify or otherwise alter these Terms and Conditions at any time. Unless otherwise indicated, amendments will become effective immediately. Please review
                these Terms and Conditions periodically. Your continued use of the Site following the posting of changes and/or modifications will constitute your acceptance of the revised Terms and Conditions and the reasonableness of these standards
                for notice of changes. For your information, this page was last updated as of the date at the top of these terms and conditions.
            </p>
            <strong>2. PRIVACY</strong>
            <p class="paragraph">Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices. </p>

            <strong>3. LINKED SITES</strong>
            <p class="paragraph">This Site may contain links to other independent third-party Web sites ("Linked Sites”). These Linked Sites are provided solely as a convenience to our visitors. Such Linked Sites are not under our control, and we are not responsible for and
                does not endorse the content of such Linked Sites, including any information or materials contained on such Linked Sites. You will need to make your own independent judgment regarding your interaction with these Linked Sites. </p>

            <strong>4. FORWARD LOOKING STATEMENTS</strong>
            <p class="paragraph">All materials reproduced on this site speak as of the original date of publication or filing. The fact that a document is available on this site does not mean that the information contained in such document has not been modified or superseded
                by events or by a subsequent document or filing. We have no duty or policy to update any information or statements contained on this site and, therefore, such information or statements </p>
        </div>
        <div id="buttons">
            <button type="button" class="btn btn-lg btn-outline-primary decline-btn">
                DECLINE
            </button>
            <button class="btn btn-lg btn-primary accept-btn">
                ACCEPT THE TERMS
            </button>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid third">
        <div class="container">
            <p class="lead">Didn’t find an answer to your question?</p>
            <p class="sub-lead">Write us a message and describe your problem!</p>
            <a href="contactus.html" class="btn btn-primary pt-2 pb-2 pl-5 pr-5">
                Contact Us
            </a>
        </div>
    </div>

@endsection