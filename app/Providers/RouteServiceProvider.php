<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
        $router->model('tahun_ajaran', 'App\TahunAjaran');
        $router->model('kelas', 'App\Kelas');
        $router->model('ruang', 'App\Ruang');
        $router->model('karyawan', 'App\Karyawan');
        $router->model('mata_pelajaran', 'App\MataPelajaran');
        $router->model('orang_tua', 'App\OrangTua');
        $router->model('siswa', 'App\Siswa');
        $router->model('bab', 'App\Bab');
        $router->model('laporan_pekanan_siswa', 'App\LaporanPekananSiswa');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
