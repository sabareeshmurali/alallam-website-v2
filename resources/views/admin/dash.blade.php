<?php use Symfony\Component\HttpFoundation\Session\Session;?>
@extends('admin/template/default')
@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content" ng-app="MyApp" ng-controller="MyCntrlr" ng-init="show_data()">
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-3 -->
        <div class="col-xl-3 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Total Agents</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">
                                <i ng-show="!totalAgents" class="fas fa-spin fa-spinner"></i>
                                <span ng-show="totalAgents">10</span>
                            </h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="30"></div>
                        </div>
                    </div>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">Total Operation Staffs</span>
                        <a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">
                                <i ng-show="!totalOperation" class="fas fa-spin fa-spinner"></i>
                                <span ng-show="totalOperation">2</span>
                            </h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
                        </div>
                    </div>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
        </div>



        <div class="col-xl-12">
            <div id="apexChartBarChart" class="mb-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Tasks</h6>
                        <div id="apexBarChart"></div>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                    <div class="hljs-container">
                        <pre><code class="xml" data-url="{{ asset('public/theme/assets/data/chart-apex/code-4.json')}}"></code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END row -->
</div>
<!-- END #content -->

@endsection

