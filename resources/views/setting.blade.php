@extends('layouts.app')

@section('title', 'SuperConfig')
@section('content')
    <div class="container-xl">
        <div class="row row-cards justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">SuperConfig</h3>
                        <form method="POST">
                            @csrf
                            <div class="col-md-12">
                                <ul class="nav nav-tabs nav-fill" data-bs-toggle="tabs">
                                    <li class="nav-item">
                                        <a href="#tabs-home-14" class="nav-link active" data-bs-toggle="tab">网站信息</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tabs-profile-14" class="nav-link" data-bs-toggle="tab">发信邮箱</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tabs-activity-14" class="nav-link" data-bs-toggle="tab">数据库</a>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tabs-home-14">
                                            <div>
                                                <div class="mb-3">
                                                    <label class="form-label">网站地址</label>
                                                    <input type="text" class="form-control" name="APP_URL"
                                                        placeholder="Input placeholder" value="{{ _cf(env('APP_URL'),url('/')) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">网站名称</label>
                                                    <input type="text" class="form-control" name="APP_NAME"
                                                        placeholder="Input placeholder" value="{{ _cf(env('APP_NAME'),'CodeFec') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">后台路由前缀<span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-content="<p>访问 域名/后台路由前缀 即可进入CodeFec管理后台. </p>
                                                        <p class='mb-0'>请不要修改为admin、user、users、node、w、tags</p>
                                                        ">?</span></label>
                                                    <input type="text" class="form-control" name="ADMIN_ROUTE_PREFIX"
                                                        placeholder="Input placeholder" value="{{ _cf(env('ADMIN_ROUTE_PREFIX'),'gadmin') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-profile-14">
                                            <div>
                                                目前只支持SMTP发信
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP主机地址</label>
                                                    <input type="text" class="form-control" name="MAIL_HOST"
                                                        placeholder="Input placeholder" value="{{ _cf(env('MAIL_HOST'),"smtp.qq.com") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP端口</label>
                                                    <input type="text" class="form-control" name="MAIL_PORT"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_PORT') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP用户名</label>
                                                    <input type="text" class="form-control" name="MAIL_USERNAME"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_USERNAME',"100001@qq.com") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP发信邮箱</label>
                                                    <input type="text" class="form-control" name="MAIL_FROM_ADDRESS"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_FROM_ADDRESS',"100001@qq.com") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP发信名称</label>
                                                    <input type="text" class="form-control" name="MAIL_FROM_NAME"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_FROM_NAME',"100001@qq.com") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP 加密类型</label>
                                                    <input type="text" class="form-control" name="MAIL_ENCRYPTION"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_ENCRYPTION',"ssl") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SMTP 密码</label>
                                                    <input type="text" class="form-control" name="MAIL_PASSWORD"
                                                        placeholder="Input placeholder" value="{{ env('MAIL_PASSWORD',"bugaosuni") }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabs-activity-14">
                                            <div>
                                                <div class="mb-3">
                                                    <label class="form-label">Redis 主机地址</label>
                                                    <input type="text" class="form-control" name="REDIS_HOST"
                                                        placeholder="Input placeholder" value="{{ env('REDIS_HOST') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Redis 密码</label>
                                                    <input type="text" class="form-control" name="REDIS_PASSWORD"
                                                        placeholder="Input placeholder" value="{{ _cf(env('REDIS_PASSWORD'),"null") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Redis 端口号</label>
                                                    <input type="text" class="form-control" name="REDIS_PORT"
                                                        placeholder="Input placeholder" value="{{ env('REDIS_PORT') }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Mysql 主机地址</label>
                                                    <input type="text" class="form-control" name="DB_HOST"
                                                        placeholder="Input placeholder" value="{{ env('DB_HOST') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Mysql 数据库名</label>
                                                    <input type="text" class="form-control" name="DB_DATABASE"
                                                        placeholder="Input placeholder" value="{{ _cf(env('DB_DATABASE'),"null") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Mysql 用户名</label>
                                                    <input type="text" class="form-control" name="DB_USERNAME"
                                                        placeholder="Input placeholder" value="{{ _cf(env('DB_USERNAME'),"null") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Mysql 密码</label>
                                                    <input type="text" class="form-control" name="DB_PASSWORD"
                                                        placeholder="Input placeholder" value="{{ _cf(env('DB_PASSWORD'),"null") }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Mysql 端口号</label>
                                                    <input type="text" class="form-control" name="DB_PORT"
                                                        placeholder="Input placeholder" value="{{ env('DB_PORT') }}">
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">保存</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
