<?php use Symfony\Component\HttpFoundation\Session\Session;?>
@extends('admin/template/default')
@section('content')
 <!-- BEGIN #content -->
<div id="content" class="app-content" ng-app="MyApp" ng-controller="MyCntrlr" ng-init="show_data()">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dash') }}">HOME</a></li>
        <li class="breadcrumb-item active">{-{ heading }-}</li>
    </ul>
    <div class="row">
        <div class="col-3">
            <h1 class="page-header">{-{ heading }-}</h1>
        </div>
        <div class="col-9">
            <!-- <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Search Here" ng-model="keyword">
                </div>  
            </div> -->
            <div class="col-md-8" ng-init="loadForms()">
                <select class="form-select right-part" id="formSelect" ng-model="mainData.form_name"  ng-change="onFormSelectChange(mainData.form_name)">
                            <option ng-repeat="form in data_forms" value="+{-{ form.form_name }-}">{-{ form.form_name}-}</option>
                </select>
            </div>
            <!-- <div class="col-md-4">
                    <button class="btn btn-outline-theme float-end" ng-click="openInsert()"><i class="fas fa-plus"></i> {-{ heading }-} </button>
            </div> -->

        </div>
    </div>
    <div class="clear-fix"></div>
    <!-- BEGIN #basicTable -->
    <div id="basicTable" class="mb-5">
        <div class="card">
            <div class="card-body">
                <div class="row mb-n3">
                    <div class="col-xl-12">
                        <div class="table-responsive" id="mainTable">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No</th>
                            
                                        <th scope="col" class="sortable">
                                            Page Name
                                            <i class="fa fa-angle-double-down"
                                                ng-class="{true: 'activeiclass', false: 'not_active'}[ sortColumn == 'content_page' && sortOrder=='reverse']"
                                                ng-click="sortColumn='content_page'; sortOrder='reverse'"
                                                aria-hidden="true"></i>
                                            <i class="fa fa-angle-double-up"
                                                ng-class="{true: 'activeiclass', false: 'not_active'}[ sortColumn == 'content_page' && sortOrder=='']"
                                                ng-click="sortColumn='content_page'; sortOrder=''"
                                                aria-hidden="true"></i>
                                        </th>
                                        <th scope="col" class="sortable">
                                            Key
                                            <i class="fa fa-angle-double-down"
                                                ng-class="{true: 'activeiclass', false: 'not_active'}[ sortColumn == 'content_key' && sortOrder=='reverse']"
                                                ng-click="sortColumn='content_key'; sortOrder='reverse'"
                                                aria-hidden="true"></i>
                                            <i class="fa fa-angle-double-up"
                                                ng-class="{true: 'activeiclass', false: 'not_active'}[ sortColumn == 'user_email' && sortOrder=='']"
                                                ng-click="sortColumn='content_key'; sortOrder=''"
                                                aria-hidden="true"></i>
                                        </th>
                                        <th>Contents English</th>
                                        <th>Contents Arabic</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="xx in dataitems | filter:keyword | orderBy: sortColumn : sortOrder">
                                        <td>{-{ $index+1 }-}</td>
                                        <td>{-{ xx.content_page }-}</td>
                                        <td>{-{ xx.content_key }-}</td>
                                        <td ng-bind-html="xx.content_english"></td>
                                        <td ng-bind-html="xx.content_arabic"></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-sm btn-clean" ng-click="edit(xx)">
                                                    <i class="far fa-edit"></i></button>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <!-- END #basicTable -->
    <!-- Modal 1 Start ---->
    <div class="modal fade" id="modal_default_13">
        <form ng-submit="insertData()">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ng-bind-html="modalHeading"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                          
                            <div class="col-12">
                                <div class="row mb-2 pb-2 border-bottom">
                                    <div class="col-md-3">Contents English</div>
                                    <div class="col-md-9">
                                    <textarea class="form-control" ng-model="mainData.content_english"
                                    placeholder="English Content" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" dir="rtl">
                                <div class="row mb-2 pb-2 border-bottom">
                                    <div class="col-md-3">contents Arabic</div>
                                    <div class="col-md-9">
                                    <textarea class="form-control" ng-model="mainData.content_arabic"
                                    placeholder="English Content" ></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div> <!--=================End Of Modal Body ==================-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning"><i class="fas fa-redo-alt"></i> Reset</button>
                        <button type="submit" class="btn btn-primary" ng-bind-html="btnText"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>




</div>
<!-- END #content -->
@endsection