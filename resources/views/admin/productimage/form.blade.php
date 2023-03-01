<div class="container">
    <div class="row m-0  w-100">
        <div class="form-group mb-3">
            <label for="example-fileinput"> انتخاب عکس </label>
            <img src="{{asset('assets/upload/'.@$data->image)}}" alt="" style="width:150 ; height:100px">
            <input type="file" name="image" id="example-fileinput" class="form-control-file">
        </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="">
            <br>
            <div class="save">
                <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
            </div>
        </div>
    </div>