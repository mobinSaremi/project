<div class="container">
    <div class="">
        <div class="row m-0  w-100">
            <div class="col-6 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="required">عنوان</span>
                    
                </label>
                <input type="text" class="form-control form-control-solid" name="title" value="@if(isset($data)) {{@$data->title}}    @else {{@old('title')}}      @endif" style="background:darkgray ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="col-6 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="">نویسنده</span>
                    
                </label>
                <input type="text" class="form-control form-control-solid" name="writer" value="@if(isset($data)) {{@$data->writer}}    @else {{@old('writer')}}      @endif" style="background:darkgray ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>

        </div>
       
        <div class="row m-0 w-100">
            <div class="col-6">
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span class="">توضیح سئو</span>
                   
                </label>
                <textarea class="form-control " name="description_seo" style="background:darkgray ;">@if(isset($data)) {{@$data->description_seo}}     @else {{@old('description_seo')}}       @endif</textarea>
            </div>
            <div class="col-6 fv-row fv-plugins-icon-container">
                <label class="fs-12 fw-semibold form-label mt-3">
                    <span class="required">عنوان سئو</span>
                   
                </label>
                <input type="text" class="form-control form-control-solid" name="title_seo" value="@if(isset($data)) {{@$data->title_seo}}    @else {{@old('title_seo')}}  @endif" style="background:darkgray ;">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        <div class="row m-0  w-100">
            <div class="  col-6  form-group mb-3 mt-6 ">
                <label class="" for="example-select">دسته بندی مقاله</label>

                <select class="form-control" name="article_category_id" id="example-select" style="background-color: darkgray;">
                    <option default value=""> لطفا دسته بندی را انتخاب کنید</option>
                    @foreach($artic as $article)
                    <option value="{{$article->id}}" @if(isset($data) and $article->id == $data->article_category_id ) selected @endif>{{@$article->title}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="fv-row mb-7">
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>توضیحات</span>
    
            </label>
            <textarea class="form-control  ckeditor" name="description" style="background:darkgray ;"> @if(isset($data)) {{@$data->description}}     @else {{@old('description')}}       @endif</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="example-fileinput"> انتخاب عکس </label>
            <img src="{{asset('assets/upload/'.@$data->image)}}" alt="" style="width:150 ; height:100px">
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