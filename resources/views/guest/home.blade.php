@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{--<link rel="stylesheet" href="css/pages/blog_magazine.css">--}}
@stop

@section('content')
    <div class="tab-v1">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Panel-Body Search</a></li>
            <li><a data-toggle="tab" href="#profile">Table Search</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane active">
                <!-- Begin Table Search v1 -->
                <div class="table-search-v1 panel panel-grey margin-bottom-50">
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left"><i class="fa fa-globe"></i> Table Search Results</h3>
                        <div class="pull-right">
                            <div class="btn-group navbar-right">
                                <button data-toggle="dropdown" class="btn-u btn-u-default btn-u-split-default dropdown-toggle" type="button">
                                    <i class="fa fa-cog"></i>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-arrows-alt"></i> Fullscreen</a></li>
                                    <li><a href="#"><i class="fa fa-unlink"></i> Some Links</a></li>
                                    <li><a href="#"><i class="fa fa-list"></i> Main Links</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-cloud-download"></i> Download All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="hidden-sm">Product description</th>
                                <th>Headquarters</th>
                                <th>Progress</th>
                                <th>Status</th>
                                <th>Contacts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">HP Enterprise Service</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td class="td-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">USA</a>
                                        <a href="#">Palo Alto,</a>
                                        <a href="#">CA</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-success btn-xs"><i class="icon-graph"></i> High</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Samsung Electronics</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">South Korea</a>
                                        <a href="#">Gyeonggi-do,</a>
                                        <a href="#">Suwon</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-warning btn-xs"><i class="icon-graph"></i> High</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Sony Corporation</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">Japan</a>
                                        <a href="#">Minato,</a>
                                        <a href="#">Tokyo</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-info btn-xs"><i class="icon-graph"></i> Middle</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Lenovo Group</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">Chinese</a>
                                        <a href="#">Beijing</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 77%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-danger btn-xs"><i class="icon-graph"></i> Low</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table Search v1 -->
            </div>
            <div id="profile" class="tab-pane">
                <!-- Begin Table Search v1 -->
                <div class="table-search-v1 margin-bottom-50">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="hidden-sm">Product description</th>
                                <th>Headquarters</th>
                                <th>Progress</th>
                                <th>Status</th>
                                <th>Contacts</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">HP Enterprise Service</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td class="td-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">USA</a>
                                        <a href="#">Palo Alto,</a>
                                        <a href="#">CA</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-success btn-xs"><i class="icon-graph"></i> High</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Samsung Electronics</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">South Korea</a>
                                        <a href="#">Gyeonggi-do,</a>
                                        <a href="#">Suwon</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 76%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="76" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-warning btn-xs"><i class="icon-graph"></i> High</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Sony Corporation</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">Japan</a>
                                        <a href="#">Minato,</a>
                                        <a href="#">Tokyo</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-info btn-xs"><i class="icon-graph"></i> Middle</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Lenovo Group</a>
                                    <ul class="list-inline star-vote">
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star"></i></li>
                                        <li><i class="color-green fa fa-star-half-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                        <li><i class="color-green fa fa-star-o"></i></li>
                                    </ul>
                                </td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu vel fringilla tincidunt.</td>
                                <td>
                                    <div class="m-marker">
                                        <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                                        <a class="display-b" href="#">Chinese</a>
                                        <a href="#">Beijing</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 77%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" role="progressbar" class="progress-bar progress-bar-u">
                                        </div>
                                    </div>
                                </td>
                                <td><button class="btn btn-block btn-danger btn-xs"><i class="icon-graph"></i> Low</button></td>
                                <td>
                                    <span>1(123) 456</span>
                                    <span><a href="#">info@example.com</a></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table Search v1 -->
            </div>
        </div>
    </div>



    <ul class="row grid-block-v2">
        <li class="col-md-4 col-sm-6 md-margin-bottom-30">
            <div class="easy-block-v1">
                <img class="img-responsive" src="assets/img/mockup/img1.jpg" alt="">
                <div class="easy-block-v1-badge rgba-purple">Unify Template</div>
            </div>
            <div class="grid-block-v2-info rounded-bottom">
                <h3><a href="#">One Page Template</a></h3>
                <p>Excepturi sint occaecati cupiditate non provident, at vero eos et accusamus et iusto odio..</p>
                <ul class="list-inline star-vote">
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star-half-o"></i></li>
                </ul>
            </div>
        </li>
        <li class="col-md-4 col-sm-6 md-margin-bottom-30">
            <div class="easy-block-v1">
                <img class="img-responsive" src="assets/img/mockup/img2.jpg" alt="">
                <div class="easy-block-v1-badge rgba-blue">Graphic Design</div>
            </div>
            <div class="grid-block-v2-info rounded-bottom">
                <h3><a href="#">Mockup Design</a></h3>
                <p>Excepturi sint occaecati cupiditate non provident, at vero eos et accusamus et iusto odio..</p>
                <ul class="list-inline star-vote">
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star-half-o"></i></li>
                    <li><i class="color-green fa fa-star-o"></i></li>
                </ul>
            </div>
        </li>
        <li class="col-md-4 col-sm-12">
            <div class="easy-block-v1">
                <img class="img-responsive" src="assets/img/mockup/img4.jpg" alt="">
                <div class="easy-block-v1-badge rgba-red">Web Development</div>
            </div>
            <div class="grid-block-v2-info rounded-bottom">
                <h3><a href="#">HTML5/CSS3 + PHP</a></h3>
                <p>Excepturi sint occaecati cupiditate non provident, at vero eos et accusamus et iusto odio..</p>
                <ul class="list-inline star-vote">
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star"></i></li>
                    <li><i class="color-green fa fa-star-o"></i></li>
                </ul>
            </div>
        </li>
    </ul>
@stop