<div>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h6 class="card-title">ایجاد کاربر</h6>
                <form wire:submit='save'>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left"  dir="rtl" wire:model='name'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" wire:model='email'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">پسورد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" wire:model='pas'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                        <input  class="col-sm-10" type="file" class="form-control-file" id="file" wire:model='srce'>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-success btn-uppercase" >
                            <i class="ti-check-box m-r-5"></i> ذخیره
                        </button>
                      
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" wire:model.live="search">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle text-primary">ردیف</th>
                        <th class="text-center align-middle text-primary">عکس</th>
                        <th class="text-center align-middle text-primary">نام و نام خانوادگی</th>
                        <th class="text-center align-middle text-primary">ایمیل</th>
                        <th class="text-center align-middle text-primary">نقش های کاربر</th>
                        <th class="text-center align-middle text-primary"> وضعیت</th>
                        <th class="text-center align-middle text-primary">ویرایش</th>
                        <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td class="text-center align-middle"></td>
                        <td class="text-center align-middle">
                            <figure class="avatar avatar">
                                <img src="/{{$user['srce']}}" class="rounded-circle" alt="image">
                            </figure>
                        </td>
                        <td class="text-center align-middle">{{$user["name"]}}</td>
                        <td class="text-center align-middle">{{$user["email"]}}</td>
                        <td class="text-center align-middle">ساده</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="#">
                                نقش های کاربر
                            </a>
                        </td>
                        <td class="text-center align-middle">
                                <span class="cursor-pointer badge badge-success">فعال</span>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="#" >
                                 ثبت
                            </a>
                        </td>
                        <td class="text-center align-middle"></td>
                    </tr>
                      @endforeach
                    
                </table>
                <div style="margin: 40px !important;"
                     class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
</div>