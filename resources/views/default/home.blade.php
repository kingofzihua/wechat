@extends('layouts.app')
<link rel="stylesheet" href="{{asset("/static/default/css/home/index.css")}}">
@section('content')
    <div class="container">
        <div class="row">
            {{--左边的导航--}}
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                {{--巨幕--}}
                <div class="jumbotron" style="background-image: url(https://lh3.googleusercontent.com/-H6MefTwvgHk/V-OgNTZyL8I/AAAAAAAAACc/K8oL28TBbO8T-Cny2o5LAYdMZzOBvKm9QCJoC/w530-h531-p-rw/QUN2SEVLRDdGTW5tS2wvcTVqQ1llSStXQ3FTRkY2QTRyZy9sM21hSFFERjJGVUJUMkc4aXlRPT0.jpg);
                     background-repeat:  no-repeat;
                     background-size: cover;
                     background-position: center center">
                    <div style="height: 250px;"></div>
                    <div class="jumbotron-user">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{config('admin.upload.host').$user->headimg}}" class="img-circle"
                                     style="border:2px solid #fff;" width="60px" height="60px" alt="">
                                <span class="username"> {{$user->name}}</span>
                            </div>
                            <div class="col-md-6 pull-right text-right updmyprofile">
                                <a class="btn btn-default btn-md" href="#" role="button" data-toggle="modal"
                                   data-target="#updProfile">修改个人资料</a>
                            </div>
                        </div>
                        {{--<div class="inline">--}}
                        {{--<img src="{{config('admin.upload.host').$user->headimg}}" class="img-circle" width="60px" height="60px" alt="">--}}
                        {{--<div class="name">--}}
                        {{--{{$user->name}}--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="inline pull-right">--}}
                        {{--<a class="btn btn-default" href="#" role="button">修改资料</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            {{--个人动态--}}

            <!-- Modal -->
                <div class="modal fade" id="updProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                {{--<button type="button" class="close" data-dismiss="modal">--}}
                                {{--<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>--}}
                                {{--</button>--}}
                                <h4 class="modal-title" id="myModalLabel">修改个人资料</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        1
                                    </div>
                                    <div class="col-md-6">
                                        2
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                <button type="button" class="btn btn-primary">保存</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
