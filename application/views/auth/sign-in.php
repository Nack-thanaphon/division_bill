<body>

    <div class="container">
        <div class="row m-0 p-0 py-5 h-100">
            <div class="col-12 col-sm-6 my-auto d-none d-sm-block">
                <div class="row m-0 p-0">
                    <div class="col-12">
                        <h1>ระบบจัดซื้อ-จัดจ้าง</h1>
                        <small class="text-primary">ฝ่ายวิศวกรรมบริการและอาคารสถานที่</small> <br>
                        <small>Division of facilities and environmental management</small>

                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6 my-auto">

                <div class="card m-5 login-form">

                    <div class="card-body ">
                        <h3 class="card-title text-center">เข้าสู่ระบบ</h3>
                        <div class="card-text">
                            <!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                            <form class="py-4">
                                <!-- to error: add class "has-danger" -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">อีเมล์ผู้ใช้งาน</label>
                                    <input type="email" class="form-control form-control-sm my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกอีเมล์ผู้ใช้งาน">
                                </div>
                                <div class="form-group pb-4">
                                    <label for="exampleInputPassword1">รหัสผ่าน</label>
                                    <a href="#" style="float:right;font-size:12px;">ลืมรหัสผ่าน?</a>
                                    <input type="password" class="form-control form-control-sm my-2" id="exampleInputPassword1" placeholder="กรอกรหัสผู้ใช้งาน">
                                </div>

                                <a href="<?php echo site_url('Dashboard') ?>" type="submit" class="btn btn-primary btn-block w-100">เข้าสู่ระบบ</a>

                                <div class="sign-up mt-4">
                                    ต้องการสมัครสมาชิก? <a href="#">สมัครทันที</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <footer>
                <div class="text-center">
                    <small>
                        Develop by <span class="text-primary">Thanaphon Kallapapruek</span>
                    </small>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>