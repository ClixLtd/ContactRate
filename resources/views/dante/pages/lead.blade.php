@extends('dante.template')

@section('content')
<div class="page-heading col-sm-12 clearfix alt-bg alt-one">
    <div class="container">
        <div class="heading-text">
            <h1 class="entry-title">Lead Generation</h1>
        </div>
    </div>
</div>

<!-- #page-warp -->
<div id="page-wrap">
    <div class="inner-page-wrap has-no-sidebar no-bottom-spacing no-top-spacing clearfix">
        <div class="page-content clearfix">
            <!--spacing-->
            <div class="container">
                <div class="row">
                    <div class="blank_spacer col-sm-12 " style="height:70px;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>Finding new customers can be a difficult and costly experience for any company. We offer a unique tailored approach to getting you new clients. Each HotKey / Live Transfer campaign comes with your own dedicated campaign manager and team of agents. You will get consumers prequalified meeting your criteria and are ready talk.</p>
                        <p>Our HotKey leads also come via a 3 way transfer where we reconfirm the criteria with you before you accept the lead.</p>
                        <p><strong>Stage 1</strong><br>Discuss your requirements and set out the criteria needed for your campaign. This will give your campaign the best chance of success as you will be speaking to consumers who you want to speak you. Meaning your time is efficiently being used with maximum potential. </p>
                        <p><strong>Stage 2</strong><br>As part of our process we make sure our call centre agents are confident in speaking to your potential clients. If necessary we will hold specific training for your campaign with our agents. This in-depth approach means from the start of your campaign we are maximising the quality of leads.</p>
                        <p><strong>Stage 3</strong><br>Upon a successful test of a transfer the campaign then Goes Live! In the early stages the campaign is closely monitored and tweaks are made if needed to maximise quality HotKeys.</p>
                        <p><strong>Stage 4</strong><br>Quality control is implemented on all our campaigns. We have a dedicated team monitoring all our operations. Feedback is given back to campaign managers and this is used to to improve training and agent quality / productivity.  </p>
                    </div>
                </div>
            </div>
            @include('dante.partials.chevron', ['message' => 'Package Bank Account HotKeys', 'id' => 'pba'])
            <div class="container">
                <div class="col-sm-6">
                    <p>Up to 1 in 5 people have a package bank account many of which have been mis-sold. We have constant supply of consumers who are wanting to know more and believe they have been mis-sold. Below is the criteria, if needed you can add to this.</p>
                    <ul style="list-style: circle">
                        <li>Must have had a packaged bank account</li>
                        <li>Only used maximum 1 of the benefits in the last 12 months</li>
                        <li>Under the age of 75</li>
                        <li>Must have statements for closed accounts</li>
                        <li>Can be an active account</li>
                        <li>Must have been paying fees for more than 1 year</li>
                        <li>Must not be in an IVA, DM Plan or Bankrupt</li>
                        <li>Must not have made a claim or tried to make a claim for mis-selling on the account</li>
                        <li>Must have time to discuss the claim</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <strong>Rates</strong>
                    <table class="table table-striped">
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>0 to 50</td>
                            <td>&pound;15.00 each</td>
                        </tr>
                        <tr>
                            <td>51 to 200</td>
                            <td>&pound;13.50 each</td>
                        </tr>
                        <tr>
                            <td>200+</td>
                            <td>&pound;12.00 each</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--PPI-->
            @include('dante.partials.chevron', ['message' => 'PPI HotKeys', 'id' => 'ppi'])
            <div class="container">
                <div class="col-sm-6">
                    <p>PPI is still big business with the Financial Ombudsman receiving circa to 4000 complaints a week. We can provide quality HotKeys with the below criteria, if needed you can customise to this.</p>
                    <ul style="list-style: circle">
                        <li>Minimum Loan amount must be over £2000</li>
                        <li>Are you in arrears or in DMP / IVA or Bankruptcy? - No Only</li>
                        <li>Do you have a loan agreement / policy number or can you obtain these? Yes Only</li>
                        <li>Have you ever claimed on the PPI because you lost your job, have been sick or had an accident? - No Only</li>
                        <li>Have you previously made a complaint for mis-selling with this account? - No Only</li>
                        <li>Have you tried to claim your money back before or had your claim rejected by any other Law firm or CMC? - No Only</li>
                        <li>Are you happy to be transferred to an advisor now? - Yes Only</li>
                        </li>Maximum Age 75 years old</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <strong>Rates</strong>
                    <table class="table table-striped">
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>0 to 50</td>
                            <td>&pound;30.00 each</td>
                        </tr>
                        <tr>
                            <td>51 to 200</td>
                            <td>&pound;25.00 each</td>
                        </tr>
                        <tr>
                            <td>200+</td>
                            <td>&pound;20.00 each</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- IVA -->
            @include('dante.partials.chevron', ['message' => 'IVA HotKeys', 'id' => 'iva'])
            <div class="container">
                <div class="col-sm-6">
                    <p>IVA’s are still needed by many consumers, and we have many people who fit the below criteria. We can provide quality HotKeys with the below criteria, if needed you can customise to this.</p>
                    <ul style="list-style: circle">
                        <li>How much unsecured debt do you have? - &pound;3k+</li>
                        <li>Are you struggling with your debt? - Yes Only</li>
                        <li>How many creditors do you have? 2+</li>
                        <li>Disposable Income £85+</li>
                        <li>Are you Employed/Self Employed? - Yes Only</li>
                        <li>Are you in an IVA/DM plan or bankrupt? - No Only</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <strong>Rates</strong>
                    <table class="table table-striped">
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>0 to 50</td>
                            <td>&pound;75.00 each</td>
                        </tr>
                        <tr>
                            <td>51 to 200</td>
                            <td>&pound;60.00 each</td>
                        </tr>
                        <tr>
                            <td>200+</td>
                            <td>&pound;50.00 each</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- DM -->
            @include('dante.partials.chevron', ['message' => 'DM HotKeys', 'id' => 'debt'])
            <div class="container">
                <div class="col-sm-6">
                    <p>IVA’s are still needed by many consumers, and we have many people who fit the below criteria. We can provide quality HotKeys with the below criteria, if needed you can customise to this.</p>
                    <ul style="list-style: circle">
                        <li>How much unsecured debt do you have? - &pound;5k+</li>
                        <li>Are you struggling with your debt? - Yes Only</li>
                        <li>How many creditors do you have? 2+</li>
                        <li>Disposable Income £150+</li>
                        <li>Are you Employed/Self Employed? - Yes Only</li>
                        <li>Are you in an IVA/DM plan or bankrupt? - No Only</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <strong>Rates</strong>
                    <table class="table table-striped">
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>0 to 50</td>
                            <td>&pound;75.00 each</td>
                        </tr>
                        <tr>
                            <td>51 to 200</td>
                            <td>&pound;60.00 each</td>
                        </tr>
                        <tr>
                            <td>200+</td>
                            <td>&pound;50.00 each</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- life -->
            @include('dante.partials.chevron', ['message' => 'Life Insurance HotKeys', 'id' => 'life'])
            <div class="container">
                <div class="col-sm-6">
                    <p>Need quality life insurance leads? We can supply a good steady volume with the below criteria. We can provide quality HotKeys with the below criteria, if needed you can customise to this.</p>
                    <ul style="list-style: circle">
                        <li>Do you currently have any Life cover in place? (If yes cost and cover)  </li>
                        <li>What are you looking to take the cover out for?</li>
                        <li>Must not have had or currently be suffering from any critical illnesses</li>
                        <li>Do you have a UK bank account? Yes Only</li>
                        <li>Any reason why life insurance would be declined? No Only</li>
                        <li>Must have time to talk</li>
                        <li>Must be able to afford minimum £10 per month</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <strong>Rates</strong>
                    <table class="table table-striped">
                        <tr>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>0 to 50</td>
                            <td>&pound;15.00 each</td>
                        </tr>
                        <tr>
                            <td>51 to 200</td>
                            <td>&pound;13.50 each</td>
                        </tr>
                        <tr>
                            <td>200+</td>
                            <td>&pound;12.00 each</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--spacing-->
            <div class="container">
                <div class="row">
                    <div class="blank_spacer col-sm-12 " style="height:86px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrap -->
@stop
