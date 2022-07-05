<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

   

    <div class="content-wrapper">
      <div class="col-12 mx-auto p-sm-3">
        <div class="row m-0 p-0 ">
          <div class="col-6">
            <a href="<?php echo base_url("Form") ?>" class="my-3 btn btn w-100 card p-4 bg-primary">
              <h5>เพิ่มเอกสาร</h5>
            </a>
          </div>
          <div class="col-6">
            <a href="<?php echo base_url("Timeline") ?>" class="my-3 btn btn w-100 card p-4 bg-warning">
              <h5>ตรวจสอบสถานะ</h5>
            </a>
          </div>
        </div>
        <div class="row m-0 p-0">
          <div class="col-12 col-sm-4">
            <div class="small-box bg-light shadow-sm">
              <div class="inner">
                <h3><?php echo ($countReq) ?></h3>

                <p>รายการร้องขอทั้งหมด</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-import"></i>

              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="small-box bg-danger shadow-sm">
              <div class="inner">
                <h3><?php echo ($countFail) ?></h3>
                <p>รายการที่ไม่ผ่าน</p>
              </div>
              <div class="icon">
                <i class="fas fa-ban"></i>

              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="small-box bg-success shadow-sm">
              <div class="inner">
                <h3><?php echo ($countPass) ?></h3>

                <p>รายการที่ผ่าน</p>
              </div>
              <div class="icon">
                <i class="fas fa-check-circle"></i>

              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <div class="row m-0 p-0">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
            <ul class="nav nav-tabs bg-light" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="text-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#table">กำลังดำเนินการ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" href="#text">สำเร็จ<span class="badge badge-primary">2</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ไม่สำเร็จ</a>
              </li>
            </ul>
            <div class="tab-content" id="nav-tabContent">

              <div id="table" role="tabpanel" class="tab-pane fade show active mt-3" aria-labelledby="text-tab">

                <table id="example" class="table table-striped table-bordered tab-pane">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ชื่อลำดับ</th>
                      <th>ผู้ร้องขอ</th>
                      <th>สถานะ</th>
                      <th>แก้ไข้</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>การก่อสร้างผนังประตู</td>
                      <td>ธนพล กัลปพฤกษ์</td>
                      <td>
                        <p class=" badge rounded-pill bg-warning">รอพิจารณา</p>
                      </td>
                      <td>
                        <div class="btn btn-primary">
                          Edit
                        </div>
                      </td>
                    </tr>
                </table>
              </div>
              <div id="text" role="tabpanel" class="tab-pane fade show mt-3" aria-labelledby="text-tab">

                <table id="example" class="table table-striped table-bordered tab-pane">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ชื่อลำดับ</th>
                      <th>ผู้ร้องขอ</th>
                      <th>สถานะ</th>
                      <th>แก้ไข้</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>การก่อสร้างผนังประตู</td>
                      <td>ธนพล กัลปพฤกษ์</td>
                      <td>
                        <p class=" badge rounded-pill bg-primary">เรียบร้อย</p>
                      </td>
                      <td>
                        <div class="btn btn-primary">
                          Edit
                        </div>
                      </td>
                    </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 ">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-right"></i>
                    เอกสารประกาศใหม่
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, asperiores?\
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-right"></i>

                    ข่าวสารภายใน
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-angle-right"></i>

                    การยื่นประกันเวลา
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>