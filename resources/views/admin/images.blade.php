use Symfony\Component\HttpFoundation\Session\Session; ?>
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
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Search Here" ng-model="keyword">
                </div>
                
            </div>
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
                                        <th scope="col">##</th>
                                        
                                        <th>Key</th>
                                        <th>Page</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="xx in dataitems | filter:keyword | orderBy: sortColumn : sortOrder">
                                        <td>{-{ $index+1 }-}</td>
                                        
                                        

                                        <td>{-{ xx.img_key }-}</td>
                                        <td>{-{ xx.img_page }-}</td>
                                        <td class="imagetd">
                                                <img ng-if="xx.img_path" ng-src="<?php echo url('/'); ?>/{-{ xx.img_path }-}" >
                                                <img ng-if="!xx.img_path" src="<?php echo url('/'); ?>/public/default/no-image.jpg">
                                        </td>
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
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ng-bind-html="modalHeading"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <!-- EXISTING IMAGE -->
                          
                                <div class="col-md-12 text-center">
                                
                                <img ng-if="mainData.existpath"
                                    ng-src="<?php echo url('/'); ?>{-{ mainData.existpath  }-}"
                                    style="width:300px; height:200px">
                                <div class="clearfix"></div>
                                <div class="progress  br-30" ng-show="progress6 >= 0 ">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        role="progressbar" style="width: {-{progress6}-}%"
                                        aria-valuenow="{-{progress6}-}" aria-valuemin="0" aria-valuemax="100"
                                        ng-bind="progress6 +'%'">
                                    </div>
                                </div>
                                
                            </div>
                        </div>   
                            
                            <!-- UPLOAD -->
                        <div class="col-6">
                            <label class="cat-image-input-label" style="cursor: pointer;"
                                    id="img_add_wrap_dep">
                                    <div class="fallback">
                                        <i aria-hidden="true" class="fa fa-cloud-upload"
                                            style="font-size: 80px; color: #249d79;"></i> <br>
                                        <span style="font-size: 12px; margin-top: 10px;">Upload Image</span>
                                    </div>
                                    <input type="file" id="img_path" name="image" accept="image/*"
                                        class="sr-only cat-image-input">
                            </label>
                            
                            <div class="col-md-12 text-center" ng-if="conditionToShowDiv">
                                <img ng-if="mainData.img_path"
                                    ng-src="<?php echo url('/'); ?>{-{ mainData.img_path }-}"
                                    style="width:300px; height:200px">
                                <div class="clearfix"></div>
                                <div class="progress  br-30" ng-show="progress6 >= 0 ">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        role="progressbar" style="width: {-{progress6}-}%"
                                        aria-valuenow="{-{progress6}-}" aria-valuemin="0" aria-valuemax="100"
                                        ng-bind="progress6 +'%'">
                                    </div>
                                </div>
                                <span ng-show="result6" class="alert alert-success py-1">
                                    <i class="fa fa-check" aria-hidden="true"></i> Upload Completed
                                </span>
                                <span class="err" ng-show="errorMsg">{-{errorMsg6}-}</span>
                            </div>
                        </div>       
                    </div>

                    </div> <!--=================End Of Modal Body ==================-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" ng-click="resetModal()"><i class="fas fa-redo-alt"></i> Reset</button>
                        <button type="submit" class="btn btn-primary" ng-bind-html="btnText"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="departImgModal">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CROP IMAGE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 position-relative">
                                <div class="result6"></div>
                                <div class="options6 d-none">
                                    <label> Width</label>
                                    <input type="number" class="img-w1" value="300" min="100" max="1200"
                                        style="width:150px" />
                                </div>
                                <button type="button" class="btn save6 btn-info position-absolute top-50 end-0"><i
                                        class="fas fa-crop" aria-hidden="true"></i> Crop</button>
                            </div>
                            <div class="col-md-6 border-start">
                                <div class="box-2 img-result6 hide">
                                    <!-- result of crop -->
                                    <img class="cropped6" src="" style="max-width: 100%; height:auto">
                                </div>
                                <button type="button" id="save_img_btn6" class="btn d-none btn-success w-100 mt-1"
                                    ng-click="setimageDepart()"><i class="fas fa-check-square"></i> Choose</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</div>
<!-- END #content -->
@endsection