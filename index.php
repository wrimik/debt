<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Loan Solutions Today</title>
    <!--  AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>

    <!--  BOOTSTRAP 3  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--  FONTAWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  CUSTOM ASSETS -->
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/loan.css">
    <script src="/js/loan.js"></script>
</head>
<body ng-controller="indexController">
<!--FORM-->
<div id="jumbo-image" style="background-image: url('/images/1.jpg');">
    <nav class="navbar ">
        <div class="container">
            <div class="navbar-header">
                <img src="images/LoanSolutionsLogo2.png" alt="" height="50">
            </div>
        </div>
    </nav>
    <div class="container">
        <section id="form">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" ng-style="{ width: (ui.step / 8)*100+'%' } ">
                            <span class="sr-only">{! (ui.step / 8)*100 !}% Complete</span>
                        </div>
                    </div>
                    <form action="{! ui.action  !}" method="post" name="form">
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
                    </form>
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
                <p>
                    THE OPERATOR OF THIS WEBSITE IS NOT A LENDER, does not make credit decisions, and does not charge
                    Consumers any fees. This Website does not constitute an offer or solicitation to lend. This Website
                    provides a service wherein we submit the information you provide to one or more lenders and attempt
                    to search for a lender to meet your needs. This service is not available in all states, and the
                    states serviced by this Website may change from time to time and without notice. Providing your
                    information on this Website does not guarantee that we will be able to locate a lender to meet your
                    needs or that you will be approved for a loan. The lender may perform a credit check or otherwise
                    verify the information you provide. Not all lending partners offer loans up to the advertised amount
                    and not all lenders can provide you with the loan amount you requested. Loan amounts are determined
                    by the lender based on individual creditworthiness. All financial terms of the loan, including
                    annual percentage rate ("APR"), fees, charges, and repayment period will be provided to you by the
                    lender and may vary by lender, state, and your individual creditworthiness. You are NOT required to
                    accept the terms of the loan that a lender offers you. If you don't agree with or don't like the
                    terms of the loan offered by the lender, do not electronically sign the loan documents.
                </p>
                <p>
                    For details, questions, or concerns regarding your loan please contact your lender directly. In some
                    situations, faxing or emailing of documents may be required. Cash transfer times may vary between
                    lenders and may depend on your individual financial institution. Loan repayment periods vary by
                    lender and state. Not all Consumers will meet the lending criteria to qualify for a loan and many
                    consumers may only qualify for short-term lending options. THIS SERVICE IS NOT AVAILABLE TO NEW YORK
                    RESIDENTS DUE TO REQUIREMENTS OF NEW YORK LAW.
                </p>
                <p>
                    Borrow Responsibly – A short-term loan is an expensive form of credit intended for short-term
                    financial needs only, not as a long-term financial solution. Late or missed loan payments may result
                    in additional finance charges and fees, your account falling into collections, and may negatively
                    impact your credit history. Lenders may use collection services for nonpayment of loans. Consumers
                    experiencing credit difficulties should seek credit counseling or meet with a nonprofit financial
                    counseling service in their community.
                </p>
                <p>
                    Consumer Advisory: Our lender partners will never ask for an advance payment. NEVER pay a lender in
                    advance for a loan. Do not wire or transfer money. Do not send pre-paid cards. Do not provide
                    personal information to anyone asking for an advance payment in order to receive a loan.
                </p>
                <p>
                    Under Section 326 of the USA PATRIOT ACT, in order to help the government fight identity theft, the
                    funding of terrorism and money laundering activities, and to help attempt to verify a customer's
                    identity, lenders may obtain, verify, and record information identifying the customer. Lenders may
                    ask for additional identifying information (i.e. driver's license documentation), in conjunction
                    with running credit reports.
                </p>
                <a ng-click="terms()">Terms &amp; Conditions</a>
            </article>

            <article ng-show="ui.terms">
                </p><p>
                    This Agreement (hereinafter, the "Agreement") made and entered into as of this Digitally Stamped
                    between
                    Digital Signature enclosed
                    (hereinafter, "Client") and Priority Consulting Service(hereinafter, “PCS” ,“Company” or “The
                    Company”)(hereinafter, “The Parties”).
                </p>
                <p>
                    1. This communication shall serve as formal/written confirmation that you have appointed and
                    authorized
                    Company to act as a nonexclusive
                    intermediary, encouraged and authorized to identify, source, refer possible financing and/or funding
                    sources for loans, in such
                    amounts and pursuant to such terms and conditions as may be mutually agreed between you and the
                    Financier (as herein defined).
                </p>
                <p>
                    2. Client understands and agrees that PCS is a consulting company. PCS is not a broker, bank or a
                    lender
                    or affiliated with any banks
                    or lenders and does not make any decisions for the banks and or lenders. The Company’s services
                    provide
                    consulting and educating
                    clients on loans/lenders and referring lenders that are applicable to clients requested needs.
                    Client
                    does not hold accountable PCS for
                    referring particular lenders or expectation of particular terms and interest rates as explained
                    earlier
                    PCS is not a lending institution. PCS
                    is only a consulting company in the business of potentially helping clients through the loan process
                    of
                    getting loans by referring lenders.
                </p>
                <p>
                    3. In the event that Client enters into a Transaction with a Financier that PCS refers through their
                    consulting services, then you shall
                    pay PCS a consulting fee (“Fee”).
                    (a) Fee: PCS provides consulting services including education in the field of loans and helping and
                    referring clients to lenders that may
                    help the client in receiving funds they’re seeking. PCS fees are for educating, referring clients to
                    lenders and working with client
                    throughout the process of the client getting the loan(s) they seek. PCS consulting packages are as
                    follows:
                    Copper Package: 2,190.00. This package includes consulting only.
                    Bronze Package: $2,590.00. This package includes consulting, educating and referring client for one
                    approved and accepted loan by
                    client.
                    Silver Package: $3,490.00. This package includes consulting, educating and referring client for two
                    accepted loans by client.
                    Gold Package: $4,390.00. This package includes consulting, educating and referring client for three
                    or
                    more accepted loans by client.
                </p>
                <p>
                    (b) The Fee due to Company shall be paid upon final approval of the loan by lender. PCS offers a 10%
                    discount off of all consulting fees
                    for clients that pay prior to final approval.
                </p>
                <p>
                    (c) You may pay PCS via wire, check by Fed Ex or credit/debit card.
                </p>
                <p>
                    (d) $500 late fee assessed after 48 hours of due date.
                </p>
                <p>
                    4. You acknowledge and agree that our responsibilities shall be limited to identifying, sourcing,
                    referring, and introducing you to
                    potential lending institutions and consulting throughout that process. Specifically, the Company
                    shall
                    not engage in any negotiations
                    whatsoever on your behalf and Company shall have no continuing obligations, duties,
                    responsibilities,
                    role, or part in the negotiations or
                    in the relationship between Financier and you, whatsoever.
                </p>
                <p>
                    5. Refund Policy:
                </p>
                <p>
                    a. If Client has paid fees to PCS prior to final approval and does not receive final approval from
                    applicable lender referred by PCS
                    within 45 days of paying PCS consulting fees OR client gets a denial after paying consulting fees
                    client
                    is eligible to receive a full refund
                    of all consulting fees.
                </p>
                <p>
                    b. If client has not received funds from applicable lender referred by PCS within 90 days of paying
                    consulting fees the client is eligible to
                    receive a full refund.
                </p>
                <p>
                    6. You acknowledge that the Company is in the business of consulting and not a licensed securities
                    broker or dealer and nothing
                    contained in this engagement shall require Company to register as such a broker or dealer. To the
                    extent
                    that any SEC rules are
                    applicable to any contributions to be made by any Financier, you shall be obligated to verify that
                    each
                    such Financier is appropriately
                    qualified e.g. meets the standards as a qualified or accredited investor, as applicable and that you
                    have complied with all applicable
                    registration and/or filing obligations, if any. Company shall not have any obligation to satisfy any
                    such obligations and you hereby
                    release Company from any liability therefore and waive any and all claims against Company with
                    respect
                    thereto.
                </p>
                <p>
                    7. The Company shall pay our own expenses related to this engagement and the services provided in
                    connection herewith, including
                    but not limited to those related to all travel, communication, attorneys, accountants, and other
                    professional advisors, regardless of
                    whether a Consummated Transaction is concluded. The Company specifically acknowledge and agree that
                    you
                    shall not be liable for
                    any reimbursement or payments to Company other than as set forth above. You shall not be obligated
                    to
                    accept any offer of any kind
                    from any Financier and you may refuse to conclude any transaction with or without cause. All
                    decisions
                    with respect to any offers,
                    transactions, and/or Consummated Transactions, if any, shall be determined by you in your sole and
                    absolute discretion.
                </p>
                <p>
                    8. You and Company are independent contractors with respect to each other, and this authorization
                    will
                    not be construed as creating a joint venture, partnership, or agency relationship between you and
                    the
                    Company. Client understands that the Company does not have
                    the right, power, or authority to enter into binding contracts, or to create any obligation or duty,
                    express or implied, on behalf of you or
                    any Project and that Client shall be solely responsible for the payment of all income and other
                    taxes
                    based on the Fee paid to Company
                    hereunder, if any.
                </p>
                <p>
                    9. You hereby represent and warrant as follows
                </p>
                <p>
                    (a) you have the full right and authority to enter into this agreement and to grant the rights
                    herein
                    granted and agreed to be granted;
                </p>
                <p>
                    (b) you have not made and shall not make any grant or agreement which will or might impair, encumber
                    or
                    conflict with any of the rights
                    granted to Company; and
                </p>
                <p>
                    (c) you shall at all times comply with any and all laws, statutes, regulations, codes and ordinances
                    applicable to any financing
                    You shall defend, indemnify and hold harmless the Company, our shareholders, directors, members,
                    managers, officers,
                    representatives, employees, successors, licensees and assigns and each of them from and against any
                    and
                    all claims, demands,
                    losses, damages, actions, liabilities, judgments, penalties, costs and expenses (including, without
                    limitation, attorneys' fees and court
                    costs, whether or not in connection with litigation) arising out of or otherwise relating to your
                    breach
                    of any representation or warranty
                    hereunder and/or related to any claims arising from any negotiations or agreements with any
                    Financier.
            </article>
        </div>
    </div>
</section>
<!--ENDDISCLAIMER-->
</body>
</html>
