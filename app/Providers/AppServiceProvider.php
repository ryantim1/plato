<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        public function boot()

{

    if(!Session::get(SITE_ID)){
        $subdomain_name = array_shift((explode(".",$_SERVER['HTTP_HOST'])));
        if(isset($subdomain_name) && !empty($subdomain_name)){
            $domain = $subdomain_name;
        }else{
            $domain = "school";
        }
        $siteToRecollect = DB::table('site_infos')->where('site_alias',$domain)->first();

        if(isset($siteToRecollect->id) && !empty($siteToRecollect->id) && $siteToRecollect->id != 0){

            Session::put(SITE_ID,$siteToRecollect->id);

        }else{

            Session::put(SITE_ID,1);

        }

    }

}
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
