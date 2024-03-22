<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> قالب مدیریتی </title>
        <link rel="shortcut icon" href="/assets/media/image/favicon.png">
        <meta name="theme-color" content="#5867dd">
        <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">
        <link rel="stylesheet" href="/vendors/slick/slick.css">
        <link rel="stylesheet" href="/vendors/slick/slick-theme.css">
        <link rel="stylesheet" href="/vendors/vmap/jqvmap.min.css">
        <link rel="stylesheet" href="/assets/css/app.css" type="text/css">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="small-navigation">
        
	<div class="header">
		<!-- begin::header body -->
		<div class="header-body">
			<div class="header-body-left">
				<h3 class="page-title">داشبورد</h3>
				<!-- begin::breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">داشبورد</a></li>
						<li class="breadcrumb-item active" aria-current="page"> لیست  </li>
					</ol>
				</nav>
				<!-- end::breadcrumb -->
			</div>
			<div class="header-body-right">
				<!-- begin::navbar main body -->
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link" data-toggle="dropdown">
							<i class="ti-plus"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
							<div class="p-3">
								<h6 class="font-size-13 m-b-15">دسترسی سریع</h6>
								<div class="row">
									<div class="col-6">
										<a href="#">
											<div class="d-flex flex-column font-size-13 bg-danger-bright bg-hover pt-3 pb-3 border-radius-1 text-danger text-center mb-3">
												<i class="fa fa-sitemap mb-2 font-size-20"></i>
												دسته‌بندی ها
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#">
											<div class="d-flex flex-column font-size-13 bg-info-bright bg-hover pt-3 pb-3 border-radius-1 text-info text-center mb-3">
												<i class="ti-game mb-2 font-size-20"></i>
												محصولات
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#">
											<div class="d-flex flex-column font-size-13 bg-warning-bright bg-hover pt-3 pb-3 border-radius-1 text-warning text-center">
												<i class="ti-bar-chart-alt mb-2 font-size-20"></i>
												گزارشات
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#">
											<div class="d-flex flex-column font-size-13 bg-secondary-bright bg-hover pt-3 pb-3 border-radius-1 text-secondary text-center">
												<i class="fa fa-share mb-2 font-size-20"></i>
												سایر
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link nav-link-notify" data-toggle="dropdown">
							<i class="ti-comment"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
							<div class="p-4 text-center" data-backround-image="assets/media/image/profile-bg.png">
								<h6 class="m-b-0">پیام ها</h6>
								<small class="font-size-13 opacity-7 d-inline-block m-t-5">1 پیام خوانده نشده</small>
							</div>
							<div>
								<ul class="list-group list-group-flush">
									<li>
										<a href="#" class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
											<div>
												<figure class="avatar avatar-sm m-r-15">
													<span class="avatar-title bg-success rounded-circle">آ</span>
												</figure>
											</div>
											<div class="flex-grow-1">
												<h6 class="mb-1 d-flex justify-content-between primary-font">
													کاربر 1
													<i title="علامت خوانده نشده" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-13"></i>
												</h6>
												<span class="text-muted m-r-10 small">08:50 ب.ظ</span>
												<span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<!-- end::navbar main body -->

				<div class="d-flex align-items-center">
					<!-- begin::navbar navigation toggler -->
					<div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
						<a href="#">
							<i class="ti-menu"></i>
						</a>
					</div>
					<!-- end::navbar navigation toggler -->

					<!-- begin::navbar toggler -->
					<div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
						<a href="#">
							<i class="ti-arrow-down"></i>
						</a>
					</div>
					<!-- end::navbar toggler -->
				</div>
			</div>

		</div>
		<!-- end::header body -->

	</div>
	<div class="navigation">
		<div class="navigation-icon-menu">
			<ul>
				<li data-toggle="tooltip" title="کاربران">
					<a href="#users" title=" کاربران">
						<i class="icon ti-user"></i>
					</a>
				</li>
			</ul>
			<ul>
				<li data-toggle="tooltip" title="ویرایش پروفایل">
					<a href="#" class="go-to-page">
						<i class="icon ti-settings"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="خروج">
					<a href="login.html" class="go-to-page">
						<i class="icon ti-power-off"></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="navigation-menu-body">
			<ul id="users">
				<li>
					<a href="#">کاربران</a>
					<ul>
						<li><a href="/admin/1">ایجاد کاربر</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
        {{ $slot }}

        <script src="/vendors/bundle.js"></script>
        <script src="/vendors/slick/slick.min.js"></script>
        <script src="/vendors/vmap/jquery.vmap.min.js"></script>
        <script src="/assets/js/app.js"></script>
    </body>
</html>