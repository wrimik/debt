<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Lorem Ipsum</title>
    <!--  AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>

    <!--  BOOTSTRAP 3  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--  CUSTOM ASSETS -->
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/loan.css">
    <script src="/js/loan.js"></script>
</head>
<body>
<!--FORM-->
<div ng-controller="indexController" id="jumbo-image" style="background-image: url('/images/1.jpg');">
    <div class="container">
        <nav class="navbar ">
            <div class="container">
                <div class="navbar-header">
                    <img src="http://placekitten.com/g/250/75" alt="">
                </div>
            </div>
        </nav>
        <section id="form">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" ng-style="{ width: (ui.step / 8)*100+'%' } ">
                            <span class="sr-only">{! (ui.step / 8)*100 !}% Complete</span>
                        </div>
                    </div>
                    <?php
                        include 'steps/1-loan-amount.php';
                        include 'steps/2-purpose.php';
                        include 'steps/3-credit-rating.php';
                        include 'steps/4-income-type.php';
                        include 'steps/5-cc-debt-amount.php';
                        include 'steps/6-monthly-income.php';
                        include 'steps/7-name.php';
                        include 'steps/8-contact-info.php';
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<!--END FORM-->

<!--DISCLAIMER-->
<section>
    <div class="container">
        <div class="col-xs-12">
            <article>
                <p><i>Copyright © 2016 3YearLoans.com</i></p>
                <p>
                    THE OPERATOR OF THIS WEBSITE IS NOT A LENDER, does not make credit decisions, and does not charge
                    Consumers
                    any fees. This Website does not constitute an offer or solicitation to lend. This Website provides a
                    service
                    wherein we submit the information you provide to one or more lenders and attempt to search for a
                    lender to
                    meet your needs. This service is not available in all states, and the states serviced by this
                    Website may
                    change from time to time and without notice. Providing your information on this Website does not
                    guarantee
                    that we will be able to locate a lender to meet your needs or that you will be approved for a loan.
                    The
                    lender may perform a credit check or otherwise verify the information you provide. Not all lending
                    partners
                    offer loans up to the advertised amount and not all lenders can provide you with the loan amount you
                    requested. Loan amounts are determined by the lender based on individual creditworthiness. All
                    financial
                    terms of the loan, including annual percentage rate ("APR"), fees, charges, and repayment period
                    will be
                    provided to you by the lender and may vary by lender, state, and your individual creditworthiness.
                    You are
                    NOT required to accept the terms of the loan that a lender offers you. If you don't agree with or
                    don't like
                    the terms of the loan offered by the lender, do not electronically sign the loan documents.
                </p>
                <p>
                    For details, questions, or concerns regarding your loan please contact your lender directly. In some
                    situations, faxing or emailing of documents may be required. Cash transfer times may vary between
                    lenders
                    and may depend on your individual financial institution. Loan repayment periods vary by lender and
                    state.
                    Not all Consumers will meet the lending criteria to qualify for a loan and many consumers may only
                    qualify
                    for short-term lending options. THIS SERVICE IS NOT AVAILABLE TO NEW YORK RESIDENTS DUE TO
                    REQUIREMENTS OF
                    NEW YORK LAW.
                </p>
                <p>
                    Borrow Responsibly – A short-term loan is an expensive form of credit intended for short-term
                    financial
                    needs only, not as a long-term financial solution. Late or missed loan payments may result in
                    additional
                    finance charges and fees, your account falling into collections, and may negatively impact your
                    credit
                    history. Lenders may use collection services for nonpayment of loans. Consumers experiencing credit
                    difficulties should seek credit counseling or meet with a nonprofit financial counseling service in
                    their
                    community.
                </p>
                <p>
                    Consumer Advisory: Our lender partners will never ask for an advance payment. NEVER pay a lender in
                    advance
                    for a loan. Do not wire or transfer money. Do not send pre-paid cards. Do not provide personal
                    information
                    to anyone asking for an advance payment in order to receive a loan.
                </p>
                <p>
                    Under Section 326 of the USA PATRIOT ACT, in order to help the government fight identity theft, the
                    funding
                    of terrorism and money laundering activities, and to help attempt to verify a customer's identity,
                    lenders
                    may obtain, verify, and record information identifying the customer. Lenders may ask for additional
                    identifying information (i.e. driver's license documentation), in conjunction with running credit
                    reports.
                </p>
                <p>
                    The domain name 3yearloans.com does not mean you will have three years to repay a loan if offered.
                </p>
            </article>
        </div>
    </div>
</section>
<!--ENDDISCLAIMER-->
</body>
</html>
