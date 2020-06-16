<?php
namespace App\Helper;

use Session;

class Helper
{

     public static function CheckSession()
     {
        if(Session::has('role'))
		{
			if(Session('role') == 1)
			{
				echo '<li class="nav-item">
						<a class="nav-link" href="detail">Giới thiệu</a>
						</li>';
			echo '<li class="nav-item">
						<a class="nav-link" href="booking">Đặt phòng</a>
						</li>';
			echo '<li class="nav-item">
						<a class="nav-link" href="bookingcheck">Xem thông tin đặt phòng</a>
						</li>';
			echo '<li class="nav-item">
						<a class="nav-link" href="logout">Logout</a>
						</li>';
			}
			else
			{
				echo '<li class="nav-item">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Quản lý
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="admin/usermanage.php">Cấp quyền</a>
									<a class="dropdown-item" href="admin/formadd.php">Thêm phòng</a>
									<a class="dropdown-item" href="admin/category.php">Thêm ảnh loại phòng</a>
									<a class="dropdown-item" href="admin/room.php">Quản lý phòng</a>
									<a class="dropdown-item" href="admin/manage.php">Quản lý khách</a>
									<a class="dropdown-item" href="admin/bill.php">Thống kê</a>
									<a class="dropdown-item" href="logout">Logout</a>
								  </div>
								</div>
							</li>';
			}
			
		}
		else
		{
			echo '<li class="nav-item">
								<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Quản lý
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="detail">Giới thiệu</a>
									<a class="dropdown-item" href="booking">Đặt phòng</a>
									<a class="dropdown-item" href="bookingcheck">Xem thông tin đặt phòng</a>
								  </div>
								</div>
							</li>';
			echo '<li class="nav-item">
				<a class="nav-link" href="login">Login</a>
				</li>';
		}
     }		
}