@extends('Admin.layouts.admin')
@section('content')
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Product Edit</h2>
												<p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>DANH SÁCH TÀI KHOẢN</h4>
                            <!-- <div class="add-product">
                                <a href="product-edit.html">THÊM TÀI KHOẢN</a>
                            </div> -->
                            <table>
                                <tr>
                                    <th>Mã Tài Khoản</th>
                                    <th>Tên Tài Khoản</th>
                                    <th>Mật Khẩu</th>
                                    <th>Email</th>
                                    <th>Địa Chỉ</th>
                                    <th>Điện thoại</th>
                                    <th>Vai Trò</th>
                                    <th>Chức Năng</th>
                                </tr>
                                <tr>
                                
                                     @foreach ($listtaikhoan as $taikhoan) 
                                        <tr>
                                            <td>{{$taikhoan['id']}}</td>
                                            <td>{{$taikhoan['user']}}</td>
                                            <td>{{$taikhoan['pass']}}</td>
                                            <td>{{$taikhoan['email']}}</td>
                                            <td>{{$taikhoan['address']}}</td>
                                            <td>{{$taikhoan['tel']}}</td>
                                            <td>{{$taikhoan['role']}}</td>
                                            <td><a href="{{route('/taikhoan/'.$taikhoan['id'].'/suatk')}}"><input type="button" value="Sửa"></a> 
                                            <a href="{{route('/taikhoan/'.$taikhoan['id'].'/xoatk')}}">   <input type="button" value="Xóa"></a></td></td>
                                        </tr>
                                     @endforeach
                                    
                            </table>
                            <!-- <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection