<div class="container">
    <div class="">
        <div class="row m-0  w-100">
            <div class="col-12 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="required">عنوان</span>
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                </label>
                <input type="text" class="form-control form-control-solid" name="title" value="@if(isset($data)) {{@$data->title}}    @else {{@old('title')}}  @endif" style="background:darkgray ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="example-fileinput"> انتخاب عکس </label>
            <img src="{{asset('assets/upload/'.@$data->image)}}" alt="" style="width:150 ; height:100px">
            <input type="file" name="image" id="example-fileinput" class="form-control-file">
        </div>
       
        <br>
        <div class="save">
            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
        </div>

    </div>
</div>