<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                            </div>
                            <div class="number dashtext-1">27</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-contract"></i></div><strong>New Sals</strong>
                            </div>
                            <div class="number dashtext-2">375</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                            </div>
                            <div class="number dashtext-3">140</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Sals</strong>
                            </div>
                            <div class="number dashtext-4">415</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bar-chart block no-margin-bottom">
                        <canvas id="barChartExample1"></canvas>
                    </div>
                    <div class="bar-chart block">
                        <canvas id="barChartExample2"></canvas>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="line-cahrt block">
                        <canvas id="lineCahrt"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="margin-bottom-sm">
        <div class="container-fluid">
            <div class="row d-flex align-items-stretch">
                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block">
                        <div class="title"> <strong class="d-block">Sales Difference</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="row d-flex align-items-end justify-content-between">
                            <div class="col-5">
                                <div class="text"><strong class="d-block dashtext-3">$740</strong><span class="d-block">May 2017</span><small class="d-block">320 Sales</small></div>
                            </div>
                            <div class="col-7">
                                <div class="bar-chart chart">
                                    <canvas id="salesBarChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block">
                        <div class="title"> <strong class="d-block">Visit Statistics</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="row d-flex align-items-end justify-content-between">
                            <div class="col-4">
                                <div class="text"><strong class="d-block dashtext-1">$457</strong><span class="d-block">May 2017</span><small class="d-block">210 Sales</small></div>
                            </div>
                            <div class="col-8">
                                <div class="bar-chart chart">
                                    <canvas id="visitPieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="stats-with-chart-1 block">
                        <div class="title"> <strong class="d-block">Sales Activities</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="row d-flex align-items-end justify-content-between">
                            <div class="col-5">
                                <div class="text"><strong class="d-block dashtext-2">80%</strong><span class="d-block">May 2017</span><small class="d-block">+35 Sales</small></div>
                            </div>
                            <div class="col-7">
                                <div class="bar-chart chart">
                                    <canvas id="salesBarChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stats-with-chart-2 block">
                        <div class="title"><strong class="d-block">Credit Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="piechart chart">
                            <canvas id="pieChartHome1"></canvas>
                            <div class="text"><strong class="d-block">$2.145</strong><span class="d-block">Sales</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="stats-with-chart-2 block">
                        <div class="title"><strong class="d-block">Channel Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="piechart chart">
                            <canvas id="pieChartHome2"></canvas>
                            <div class="text"><strong class="d-block">$7.784</strong><span class="d-block">Sales</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="stats-with-chart-2 block">
                        <div class="title"><strong class="d-block">Direct Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                        <div class="piechart chart">
                            <canvas id="pieChartHome3"></canvas>
                            <div class="text"><strong class="d-block">$4.957</strong><span class="d-block">Sales</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
