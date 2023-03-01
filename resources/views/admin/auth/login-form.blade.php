
<html>

<head>
    <meta charset="utf-8">
    <script  src="{{asset('assets/admin/js/sweetalert.min.js')}}"></script>
</head>

<body>
@include('layouts.admin.blocks.message-swal')
    <center>
        
        <div style=" background:#aaa ;    width: 400px;height:230px ; border:2px solid  #000; border-radius:20px ; margin-top: 100px;">
            <h3>login</h3>
            <form method="post" action="{{route('login')}}" ><br/><br/>
            @csrf
                <label>  ایمیل   :</label>
                <input  type="text" name="email" placeholder="ایمیل "><br/><br/>
                <label>پسورد  : </label>
                <input     type="password" name="password" placeholder="پسورد"><br/><br/>
                <input  type="submit"   value="ارسال">
            </form>

        </div>
    </center>

</body>

</html>
