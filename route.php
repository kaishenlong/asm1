<?php
use Phroute\Phroute\RouteCollector; 
use App\Controllers\Admin;
use App\Controllers\User;

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

/** Request method:
 * - get: kéo dữ liệu từ database về (lấy danh sách sp/thông tin chi tiết)
 * - post: đẩy dữ liệu lên server (thêm mới/update dữ liệu)
 * - delete: xoá bản ghi khỏi CSDL
 * - any: không chỉ định, có thể thay cho các phương thức bất kỳ
 * 
 */

/**
 * Route group:
 * Prefix group: 
 * Filter:
 */
//filter để kiểm tra user đã đăng nhập hay chưa
$router->filter('auth', function(){
    if(!isset($_SESSION['email']))
    {
        header('Location: '.BASE_URL.'/login');

        return false;
    }
});
/**$router->requestMethod($route, $handler) 
 * - $route: '/', '/products', '/users', '/products/{id}
 * - $handler: xử lý logic :
 *    + C1: viết function
 *    + C2: chỉ định class, function thực thi
 *  $handler = [Namespace\TênClass::class,function];
*/
$router->get('/',[User::class,'home']);
$router->any('/login',[User::class, 'login']);
$router->any('/dangky',[User::class,'dangky']);
$router->post('/quenmk',[User::class,'quenmk']);
$router->any('/dangxuat',[User::class,'dangxuat']);
$router->any('/home/{iddm}',[User::class,'home']);











//route group để gom nhóm các route lại với nhau
$router->group(['before' => 'auth', 'prefix'=>'/admin'], function($router) {

    $router->get('/adhome',[Admin::class,'home']);
    //san pham admin
$router->get('/listsp', [Admin::class,'dssp']);
$router->any('/addsp', [Admin::class,'themsp']);
$router->any('/sanpham/{id}/suasp', [Admin::class,'suasp']);
$router->post('/sanpham/{id}/updatesp', [Admin::class,'updatesp']);
$router->any('/sanpham/{id}/xoasp', [Admin::class,'xoasp']);


// danh muc admin
$router->get('/listdm', [Admin::class,'dsdm']);
$router->any('/adddm', [Admin::class,'themdm']);
$router->any('/danhmuc/{id}/suadm', [Admin::class,'suadm']);
$router->post('/danhmuc/{id}/updatedm', [Admin::class,'updatesp']);
$router->any('/danhmuc/{id}/xoadm', [Admin::class,'xoadm']);


//tai khoan admin
$router->get('/listtk', [Admin::class,'dstk']);
$router->any('/taikhoan/{id}/suatk', [Admin::class,'suatk']);
$router->post('/taikhoan/{id}/updatetk', [Admin::class,'updatetk']);
$router->any('/taikhoan/{id}/xoatk', [Admin::class,'xoatk']);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
?>