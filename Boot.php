<?php

namespace App\Plugins\SuperConfig;

use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Plugins\SuperConfig\src\Http\Controller\SuperConfig;

class Boot
{

    public function handle()
    {
        // 注册路由
        $this->route();
        // 创建菜单
        $this->menu();
        // 全局js
        $this->js();
    }

    public function route()
    {
        Route::group([
            'prefix'     => config('admin.route.prefix'),
            'namespace'  => config('admin.route.namespace'),
            'middleware' => config('admin.route.middleware'),
        ], function () {
            Route::get('/SuperConfig', [SuperConfig::class, "index"]);
            Route::post('/SuperConfig', [SuperConfig::class, "post"]);
        });
    }

    public function menu()
    {
        Admin::menu(function (Menu $menu) {
            $menu->add([
                [
                    'id'            => 2, // 此id只要保证当前的数组中是唯一的即可
                    'title'         => '超级配置',
                    'icon'          => 'feather icon-edit',
                    'uri'           => 'SuperConfig',
                    'parent_id'     => 0,
                    'roles'         => 'administrator', // 与角色绑定
                ],
            ]);
        });
    }

    public function js()
    {
        $request = new Request();
        if (!get_options_setting_count('SuperConfig')) {
            $admin_url = admin_url("SuperConfig");
            Admin::script(<<<JS
            Dcat.confirm('检测到您是第一次使用SuperConfig插件,是否跳转快速配置页面?', null, function () {
    location.href="{$admin_url}";

});
JS);
        }
    }
}
