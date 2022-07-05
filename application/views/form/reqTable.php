<table id="reqTable" class="table table-bordered table-striped">
</table>

<script>
  $('#reqTable').DataTable({
    ajax: {
      url: "<?php echo base_url(); ?>Form/getReqlist",
      type: 'GET'
    },
    // dom: 'Bflrtip',
    // buttons: ["copy", "csv", "excel", "pdf", "print"],
    bDestroy: true,
    paging: true,
    lengthChange: false,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    order: [
      ['0', 'desc']
    ],
    columns: [{
        title: "ลำดับ",
        className: "align-middle",
        data: "b_name",
      },
      {
        title: "เรื่อง",
        className: "align-middle",
        data: "b_title",
        width: "30%"
      },
      {
        title: "งาน",
        className: "align-middle",
        data: "b_name",
      },

      {
        title: "ผู้ร้องขอ",
        className: "align-middle",
        data: "wa_name",

      },

      {
        title: "สถานะ",
        className: "align-middle",
        data: "b_status",
      },
      {
        title: "จัดการ",
        className: "dt-center editor-edit",
        orderable: false,
        data: function(data) {
          return '<div class="btn-group" role="group">' +
            '<a href="<?php echo site_url(); ?>Form/getStatus/' + data.b_id + '"  class="btn btn-primary  update_data" data-id="' + data.b_id + '"  >' +
            '<i class="far fa-edit"></i> พิจารณา' +
            '</a>' +
            '<button " type="button" class="btn btn-warning edit_data" data-toggle="modal" data-id="' + data.b_id + '"  >' +
            '<i class="far fa-edit"></i> แก้ไข' +
            '</a>' +
            '<button type="button" class="btn btn-danger" id="delete" data-id="' + data.b_id + '">' +
            '<i class="far fa-trash-alt"></i> ยกเลิก' +
            '</button>' +
            '</div>'
        }
      },

    ],
    responsive: {
      details: {
        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
          tableClass: 'table'
        })
      }
    },
    language: {
      "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
      "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
      "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
      "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
      "infoFiltered": "(filtered from _MAX_ total records)",
      "search": 'ค้นหา',
      "paginate": {
        "previous": "ก่อนหน้านี้",
        "next": "หน้าต่อไป"
      }
    }
  }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

  $(document).on('click', '#delete', function() {

    let id = $(this).data('id')
    Swal.fire({
      text: "คุณแน่ใจหรือไม่...ที่จะยกเลิกรายการนี้?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ใช่! ยกเลิกเลย',
      cancelButtonText: 'ไม่ใช่'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>Form/cancleReqform",
          data: {
            id: id
          }
        }).done(function() {
          Swal.fire({
            text: 'รายการของคุณถูกลบเรียบร้อย',
            icon: 'success',
            confirmButtonText: 'ตกลง',
          }).then((result) => {
            location.reload();
          });
        })
      }
    })
  })
</script>



</body>

</html>