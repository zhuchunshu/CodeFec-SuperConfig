<?php
namespace App\Plugins\SuperConfig\src\Http\Controller;

use App\Http\Controllers\Controller;
use App\Models\Options;
use Illuminate\Support\Facades\File;

class SuperConfig extends Controller{
    public function index(){
        return view("SuperConfig::setting");
    }

    public function post(){
        $this->modifyEnv(request()->input());
        if(!get_options_setting_count('SuperConfig')){
            Options::insert([
                'name' => 'SuperConfig',
                'value' => time(),
                'class' => 'setting',
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
        return redirect()->back()->with('success','修改成功!');
    }

    public function modifyEnv(array $data)
    {
        $envPath = base_path() . DIRECTORY_SEPARATOR . '.env';

        $contentArray = collect(file($envPath, FILE_IGNORE_NEW_LINES));

        $contentArray->transform(function ($item) use ($data) {
            foreach ($data as $key => $value) {
                if (str_contains($item, $key)) {
                    return $key . '=' . $value;
                }
            }

            return $item;
        });

        $content = implode("\n", $contentArray->toArray());

        File::put($envPath, $content);
    }
}