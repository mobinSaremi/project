<div class="container">
    <div class="">
        <div class="row m-0  w-100">
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">نام و نام خانوادگی</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="name" value="@if(isset($data)) {{@$data->name}}   @else {{@old('name')}} @endif" style="background:darkgray ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="col-6">
                <div class="fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">(شغل)سمت</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" name="post" value="@if(isset($data)) {{@$data->post}}   @else {{@old('post')}} @endif" style="background:darkgray ;">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>

        </div>

        
        <div class="fv-row mb-7">
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>توضیحات</span>
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
            </label>
            <textarea class="form-control ckeditor" name="description" style="background:darkgray ;"> @if(isset($data)) {{@$data->description}}     @else {{@old('description')}}       @endif</textarea>
        </div>
        <div class="form-group mb-3">
                          <label for="example-fileinput"> انتخاب عکس </label>
                          <img src="{{asset('assets/upload/'.@$data->image)}}" alt=""  style="width:150 ; height:100px">
                          <input type="file" name="image" id="example-fileinput" class="form-control-file">
                        </div>
        <div class="d-flex ">
            <div class="">

                <div class="d-flex flex-column">
                    <div class="fs-6 fw-semibold text-dark">نمایش </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <div class="form-check form-check-solid form-check-custom form-switch">
                    <input name="status" class="form-check-input w-45px h-30px mx-2" type="checkbox" id="githubswitch" @if(@$data->status == 1) checked @endif >
                    <label class="form-check-label" for="githubswitch"></label>
                </div>
            </div>
        </div>
        <br>
        <div class="save">
            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
        </div>

    </div>
</div>