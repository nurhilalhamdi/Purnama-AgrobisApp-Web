<footer class="main-footer">
  <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0-rc
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
  $('#my-box').boxWidget({
    animationSpeed: 500,
    collapseTrigger: '#my-collapse-button-trigger',
    removeTrigger: '#my-remove-button-trigger',
    collapseIcon: 'fa-minus',
    expandIcon: 'fa-plus',
    removeIcon: 'fa-times'
  })
</script>

<script>
  const colors = ['#00AA55', '#009FD4', '#B381B3', '#939393', '#E3BC00', '#D47500', '#DC2A2A', '252525', '#111d5e', '#c0e218', '#9d0191', '#2ec1ac'];

  function numberFromText(text) {
    // numberFromText("AA");
    const charCodes = text
      .split('') // => ["A", "A"]
      .map(char => char.charCodeAt(0)) // => [65, 65]
      .join(''); // => "6565"
    return parseInt(charCodes, 10);
  }

  const avatars = document.querySelectorAll('.avatar');

  avatars.forEach(avatar => {
    const text = avatar.innerText; // => "AA"
    avatar.style.backgroundColor = colors[numberFromText(text) % colors.length]; // => "#DC2A2A"
  });
</script>





<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>


<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
<script src="<?php echo base_url(); ?>assets/js/autoNumeric.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/autoNumeric.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/barangmasukscript.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stok.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.priceformat.min.js"></script>


<script src="<?php echo base_url(); ?>assets/js/timeago/jquery.timeago.js"></script>

<script type="text/javascript">
  jQuery(document).ready(function() {
    $("time.timeago").timeago();
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  $(function() {
    $('#example2').DataTable({
      language: {
        searchPlaceholder: "Cari Petugas"
      },
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ]
    });
  });
</script>



<script>
  $(document).on("click", "#btn-tambah", function() {
    var kode = $(this).data('kode');
    $(".modal-body #kode").val(kode);
  });
</script>

<script>
  $(document).on("click", "#btneditbarang", function() {
    let id_barang_edit = $(this).data("id_barang_edit");
    let nama_edit = $(this).data("nama_edit");
    let deskripsi_edit = $(this).data("deskripsi_edit");
    let id_kategori_edit = $(this).data("id_kategori_edit");
    let id_satuan_edit = $(this).data("id_satuan_edit");
    let stok_edit = $(this).data("stok_edit");
    let harga_edit = $(this).data("harga_edit");
    let modal_edit = $(this).data("modal_edit");
    let kode_edit = $(this).data("kode_edit");


    $(".modal-body #id_barang_edit").val(id_barang_edit);
    $(".modal-body #nama_edit").val(nama_edit);
    $(".modal-body #deskripsi_edit").val(deskripsi_edit);
    $(".modal-body #id_kategori_edit").val(id_kategori_edit);
    $(".modal-body #id_satuan_edit").val(id_satuan_edit);
    $(".modal-body #stok_edit").val(stok_edit);
    $(".modal-body #harga_edit").val(harga_edit);
    $(".modal-body #modal_edit").val(modal_edit);
    $(".modal-body #kode_edit").val(kode_edit);

  });
</script>

<script>
  $(document).on("click", "#btntambah", function() {
    let kode = $(this).data("kode");

    $("#kodebarang").val(kode);
  });
</script>





<script>
  $(document).on("click", ".hapus-masuk", function() {
    let id = $(this).data("id");
    let idbarangmasuk = $(this).data("idbarangmasuk");

    $(".modal-body #id").val(id);
    $(".modal-body #idx").val(idbarangmasuk);
  });
</script>




<script type="text/javascript">
  $(document).ready(function() {
    $("#id_barang_create").change(function() {
      var idbar = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('inventory/barang-masuk/BarangMasuk/getWhereIdBar') ?>",
        data: {
          idbar: idbar
        },
        dataType: "JSON",
        success: function(data) {
          console.log(data);
          var stoks = '';
          var satuans = '';

          var i;
          for (i = 0; i < data.length; i++) {
            stoks += '<span>' + data[i].stok + '</span>';
            satuans += '<span>' + data[i].satuan + '</span>';
            hargas = data[i].harga;

          }
          $('#valcreate1').html(stoks);
          $('#valcreate2').html(satuans);
          $('#harga_satuan_create').val(hargas);
          // $('#cekss').html('<span>' + response + '</span>')

        }
      });

    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $("#id_barang_edit").each(function() {
      var idbar = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('inventory/barang-masuk/BarangMasuk/getWhereIdBar') ?>",
        data: {
          idbar: idbar
        },
        dataType: "JSON",
        success: function(data) {
          console.log(data);
          var stoks = '';
          var satuans = '';

          var i;
          for (i = 0; i < data.length; i++) {
            stoks += '<span>' + data[i].stok + '</span>';
            satuans += '<span>' + data[i].satuan + '</span>';
            hargas = data[i].harga;

          }
          $('#valcreate1edit').html(stoks);
          $('#valcreate2edit').html(satuans);
          $('#harga_satuan_edit').val(hargas);
          // $('#cekss').html('<span>' + response + '</span>')

        }
      });

    });
    $("#id_barang_edit").change(function() {
      var idbar = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?= base_url('inventory/barang-masuk/BarangMasuk/getWhereIdBar') ?>",
        data: {
          idbar: idbar
        },
        dataType: "JSON",
        success: function(data) {
          console.log(data);
          var stoks = '';
          var satuans = '';

          var i;
          for (i = 0; i < data.length; i++) {
            stoks += '<span>' + data[i].stok + '</span>';
            satuans += '<span>' + data[i].satuan + '</span>';
            hargas = data[i].harga;

          }
          $('#valcreate1edit').html(stoks);
          $('#valcreate2edit').html(satuans);
          $('#harga_satuan_edit').val(hargas);
          // $('#cekss').html('<span>' + response + '</span>')

        }
      });

    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 2
    })
    $("#stok_sekarang_create, #harga_satuan_create").keyup(function() {
      var harga = $("#harga_satuan_create").val();
      var jumlah = $("#stok_sekarang_create").val();

      var total = parseFloat(harga) * parseInt(jumlah);
      // var output = (total / 1000).toFixed(3);
      var totals = formatter.format(total);
      $("#harga_create").val(formatter.format(total));

      document.getElementById("total").innerHTML = "Total : " + totals;
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 2
    })
    $("#stok_sekarang_edit, #harga_satuan_edit").keyup(function() {
      var harga = $("#harga_satuan_edit").val();
      var jumlah = $("#stok_sekarang_edit").val();

      var total = parseFloat(harga) * parseInt(jumlah);
      // var output = (total / 1000).toFixed(3);
      var totals = formatter.format(total);
      $("#harga_edit").val(formatter.format(total));

      document.getElementById("total_edit").innerHTML = "Total : " + totals;
    });
  });
</script>

<script type="text/javascript">
  $(function() {
    $('[name="checkbox_check"]').change(function() {
      if ($(this).is(':checked')) {
        // Do something...
        $("#harga_satuan_create").prop("readonly", false);
      } else {
        $("#harga_satuan_create").prop("readonly", true);
      };
    });
  });
</script>



<script>
  $(function() {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
          label: 'Digital Goods',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label: 'Electronics',
          backgroundColor: 'rgba(210, 214, 222, 1)',
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines: {
            display: false,
          }
        }],
        yAxes: [{
          gridLines: {
            display: false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })
  });
</script>


<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('d1d276a7faf09690830e', {
    cluster: 'ap1'
  });

  var channel = pusher.subscribe('my-channel');
  channel.bind('my-event', function(data) {
    // alert(JSON.stringify(data));
    xhr = $.ajax({
      method: "POST",
      url: "<?= base_url('Admin/request') ?>",
      success: function(response) {
        $('.list-notifikasi').html(response);
      }
    });
  });
</script>



<script>
  //ambil data ketika edit
  $(document).on("click", ".notifikasi", function() {
    let id = $(this).data("id");
    let idbarang = $(this).data("idbarang");
    let tanggalreq = $(this).data("tanggalreq");
    let nomorreq = $(this).data("nomorreq");
    let idkandang = $(this).data("idkandang");
    let barangreq = $(this).data("barangreq");
    let stok = $(this).data("stok");
    let jumlahreq = $(this).data("jumlahreq");
    let catatan = $(this).data("catatan");
    let kategori = $(this).data("kategori");
    let satuan = $(this).data("satuan");
    let idstatus = $(this).data("idstatus");
    let keterangan = $(this).data("keterangan");


    $(".modal-body #id_request").val(id);
    $(".modal-body #id_barang_request").val(idbarang);
    $(".modal-body #tanggal_request").val(tanggalreq);
    $(".modal-body #nomor_request").val(nomorreq);
    $(".modal-body #id_kandang_request").val(idkandang);
    $(".modal-body #nama_barang_request").val(barangreq);
    $(".modal-body #stok_sekarang_request").html(stok);
    $(".modal-body #qty_request").val(jumlahreq);
    $(".modal-body #kategori_request").val(kategori);
    $(".modal-body #satuan_request").html(satuan);
    $(".modal-body #catatan_request").val(catatan);
    $(".modal-body #keterangan_status").val(keterangan);
    $(".modal-body #id_status").val(idstatus).change();
  });
</script>

<script type="text/javascript">
  $(function() {
    $('[name="checkbox_check"]').change(function() {
      if ($(this).is(':checked')) {
        // Do something...
        $("#harga_satuan_create").prop("readonly", false);
      } else {
        $("#harga_satuan_create").prop("readonly", true);
      };
    });
  });
</script>

<script>
  $('#id_status').on('change', function() {
    var value = $(this).val();
    if (value == 1) {
      $(".status").prop("hidden", true);

    } else if (value == 2) {
      $(".status").prop("hidden", false);
      $("#ket").text("Catatan Request Ditangguhkan");
    } else if (value == 3) {
      $(".status").prop("hidden", true);
    } else if (value == 4) {
      $(".status").prop("hidden", false);
      $("#ket").text("Catatan Request Ditolak");
      $(".modal-body #keterangan_status").val("");
    }
  });
</script>

<!-- <script type="text/javascript">
  $(function() {
    $('[name="checkbox_check"]').change(function() {
      if ($(this).is(':checked')) {
        // Do something...
        $("#harga_satuan_create").prop("readonly", false);
      } else {
        $("#harga_satuan_create").prop("readonly", true);
      };
    });
  });
</script> -->

<!-- 
<script type="text/javascript">
  $(document).ready(function() {

    $.ajax({
      type: 'GET',
      url: "<?php echo base_url() . "Admin/ambilData" ?>",
      dataType: 'json',
      async: false,
      success: function(data) {


        console.log(data);


        $.each(data, function(index, item) {
          var tgl = item.tanggal_request;
          $(".container").append(

            "<a href='#' class='dropdown-item notifikasi'>" +
            "<div class='media'>" +
            "<div class='media-body'>" +
            "<h3 class='dropdown-item-title' style='font-weight: bold;'>" +
            item.nomor_request +
            "</h3>" +
            "<p class='text-md'>ID Kandang " + item.id_kandang +
            "</p>" +
            "<p class='text-sm'>Pengajuan Barang Berupa " + item.kategori + " Merk " + item.nama + "</p>" +
            "<p class='text-sm text-muted'>" + "<i class='far fa-clock mr-1'>" + "</i>" + "<time class='timeago' datetime='+item.tanggal_request+'>" + "</time>" + "</p>" +
            "</div>" +
            "</div>" +
            "</a>" +
            "<div class='dropdown-divider'>" +
            "</div>"


          );
        });
        // var nomor_req = '';
        // var idkg = '';
        // var i;
        // for (i = 0; i < data.length; i++) {
        //   nomor_req += ' <h3 class="dropdown-item-title" style="font-weight: bold;">' + data[i].nomor_request + '</h3>';
        //   idkg += '<p class="text-md">' + 'ID Kandang' + data[i].id_kandang +

        //     '</p>';


        // }
        // $('#reqget').html(nomor_req);
        // $('#idkdget').html(idkg);
        // var html = '';
        // var i;
        // for (i = 0; i < data.length; i++) {
        //   html += '<h3 class="dropdown-item-title" style="font-weight: bold;">' +
        //     data[i].nomor_request +
        //     '</h3>';
        //   // '<tr>' +
        //   //   '<td>' + data[i].barang_kode + '</td>' +
        //   //   '<td>' + data[i].barang_nama + '</td>' +
        //   //   '<td>' + data[i].barang_harga + '</td>' +
        //   //   '</tr>';
        // }
        // $('#show_data').html(html);
      }

    });


  });
</script> -->


<script type="text/javascript">
  $(document).ready(function() {




    $("#pilih_kandang").change(function() {
      var html;
      if ($('#pilih_periode').val() == "") { // or this.value == 'volvo'
        html += '<tr>' +
          '<td colspan="2">' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '</tr>';
        $('#my-table').html(html);
      }
      var id_kandang = $(this).val();
      // var idkdg = $(this).val();
      var idkdgg = $(this).val();
      var option = '';

      if (id_kandang != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getPeriode') ?>",
          data: {
            id_kandang: id_kandang
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            $('#pilih_periode').html(data);

          }
        });

        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getWhereKandang') ?>",
          data: {
            idkdgg: idkdgg
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            var kode_kandang = '';
            var kode_blok = '';
            var alamat = '';
            var jenis_kandang = '';
            var status_kandang = '';
            // var ayam_mati = '';

            var i;
            for (i = 0; i < data.length; i++) {
              kode_kandang += '<span>' + data[i].kode_Kandang + '</span>';
              kode_blok += '<span>' + data[i].kode_blok + '</span>';
              alamat += '<span>' + data[i].alamat_kandang + '</span>';
              jenis_kandang += '<span>' + data[i].jenis_kandang + '</span>';
              status_kandang += '<span>' + data[i].status_kandang + '</span>';



            }
            $('#kodekandang').html(kode_kandang);
            $('#kodeblok').html(kode_blok);
            $('#alamat').html(alamat);
            $('#jeniskandang').html(jenis_kandang);
            $('#statuskandang').html(status_kandang);


          }
        });
      }
    });

    $("#pilih_kandang").each(function() {
      var html;
      if ($('#pilih_periode').val() == "") { // or this.value == 'volvo'
        html += '<tr>' +
          '<td colspan="2">' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '</tr>';
        $('#my-table').html(html);
      }
      var id_kandang = $(this).val();
      // var idkdg = $(this).val();
      var idkdgg = $(this).val();
      var option = '';
      if (id_kandang != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getPeriode') ?>",
          data: {
            id_kandang: id_kandang
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);

            $('#pilih_periode').html(data);

          }
        });

        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getWhereKandang') ?>",
          data: {
            idkdgg: idkdgg
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            var kode_kandang = '';
            var kode_blok = '';
            var alamat = '';
            var jenis_kandang = '';
            var status_kandang = '';
            // var ayam_mati = '';

            var i;
            for (i = 0; i < data.length; i++) {
              kode_kandang += '<span>' + data[i].kode_Kandang + '</span>';
              kode_blok += '<span>' + data[i].kode_blok + '</span>';
              alamat += '<span>' + data[i].alamat_kandang + '</span>';
              jenis_kandang += '<span>' + data[i].jenis_kandang + '</span>';
              status_kandang += '<span>' + data[i].status_kandang + '</span>';



            }
            $('#kodekandang').html(kode_kandang);
            $('#kodeblok').html(kode_blok);
            $('#alamat').html(alamat);
            $('#jeniskandang').html(jenis_kandang);
            $('#statuskandang').html(status_kandang);


          }
        });
      }
    });


    $("#pilih_periode").change(function() {
      var id_chickin = $(this).val();
      // var idkdg = $(this).val();
      // var idkdgg = $(this).val();

      if (id_chickin != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getCekHarianWhereChickin') ?>",
          data: {
            id_chickin: id_chickin
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            // $('#pilih_periode').html(data);
            var i;
            var html;
            var no = 1;
            if (!$.trim(data)) {
              html += '<tr>' +
                '<td colspan="2">' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '</tr>';
              $('#my-table').html(html);
            } else {
              for (i = 0; i < data.length; i++) {
                html += '<tr>' +
                  '<td>' + no++ + '</td>' +
                  '<td>' + data[i].tanggal_pengecekan + '</td>' +
                  '<td>' + data[i].usia_ayam + ' Hari' + '</td>' +
                  '<td>' + 'Periode ' + data[i].periode + '</td>' +
                  '<td><a type="button" class="btn btn-primary" href="<?= base_url() ?>pengecekan/cekharian/CekHarian/detil/' + data[i].id + '" role="button">' + 'Detil' + '</a>' + '</td>' +
                  '</tr>';
              }
              $('#my-table').html(html);
            }
          }
        });
      }
    });

    $("#pilih_periode").each(function() {
      var id_chickin = $(this).val();
      // var idkdg = $(this).val();
      // var idkdgg = $(this).val();

      if (id_chickin != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/cekharian/CekHarian/getCekHarianWhereChickin') ?>",
          data: {
            id_chickin: id_chickin
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            // $('#pilih_periode').html(data);
            var i;
            var html;
            var no = 1;
            if (!$.trim(data)) {
              html += '<tr>' +
                '<td colspan="2">' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '</tr>';
              $('#my-table').html(html);
            } else {
              for (i = 0; i < data.length; i++) {
                html += '<tr>' +
                  '<td>' + no++ + '</td>' +
                  '<td>' + data[i].tanggal_pengecekan + '</td>' +
                  '<td>' + data[i].usia_ayam + ' Hari' + '</td>' +
                  '<td>' + 'Periode ' + data[i].periode + '</td>' +
                  '<td><a type="button" class="btn btn-primary" href="<?= base_url() ?>pengecekan/cekharian/CekHarian/detil/' + data[i].id + '" role="button">' + 'Detil' + '</a>' + '</td>' +
                  '</tr>';
              }
              $('#my-table').html(html);
            }
          }
        });
      }
    });
  });
</script>








































<script type="text/javascript">
  $(document).ready(function() {




    $("#pilih_kandang_sampel").change(function() {
      var html;
      if ($('#pilih_periode_sampel').val() == "") { // or this.value == 'volvo'
        html += '<tr>' +
          '<td colspan="2">' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '</tr>';
        $('#my-table_sampel').html(html);
      }
      var id_kandang = $(this).val();
      // var idkdg = $(this).val();
      var idkdgg = $(this).val();
      var option = '';

      if (id_kandang != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getPeriode') ?>",
          data: {
            id_kandang: id_kandang
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            $('#pilih_periode_sampel').html(data);

          }
        });

        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getWhereKandang') ?>",
          data: {
            idkdgg: idkdgg
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            var kode_kandang = '';
            var kode_blok = '';
            var alamat = '';
            var jenis_kandang = '';
            var status_kandang = '';
            // var ayam_mati = '';

            var i;
            for (i = 0; i < data.length; i++) {
              kode_kandang += '<span>' + data[i].kode_Kandang + '</span>';
              kode_blok += '<span>' + data[i].kode_blok + '</span>';
              alamat += '<span>' + data[i].alamat_kandang + '</span>';
              jenis_kandang += '<span>' + data[i].jenis_kandang + '</span>';
              status_kandang += '<span>' + data[i].status_kandang + '</span>';



            }
            $('#kodekandang').html(kode_kandang);
            $('#kodeblok').html(kode_blok);
            $('#alamat').html(alamat);
            $('#jeniskandang').html(jenis_kandang);
            $('#statuskandang').html(status_kandang);


          }
        });
      }
    });

    $("#pilih_kandang_sampel").each(function() {
      var html;
      if ($('#pilih_periode_sampel').val() == "") { // or this.value == 'volvo'
        html += '<tr>' +
          '<td colspan="2">' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '<td>' + "" + '</td>' +
          '</tr>';
        $('#my-table_sampel').html(html);
      }
      var id_kandang = $(this).val();
      // var idkdg = $(this).val();
      var idkdgg = $(this).val();
      var option = '';
      if (id_kandang != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getPeriode') ?>",
          data: {
            id_kandang: id_kandang
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);

            $('#pilih_periode_sampel').html(data);

          }
        });

        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getWhereKandang') ?>",
          data: {
            idkdgg: idkdgg
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            var kode_kandang = '';
            var kode_blok = '';
            var alamat = '';
            var jenis_kandang = '';
            var status_kandang = '';
            // var ayam_mati = '';

            var i;
            for (i = 0; i < data.length; i++) {
              kode_kandang += '<span>' + data[i].kode_Kandang + '</span>';
              kode_blok += '<span>' + data[i].kode_blok + '</span>';
              alamat += '<span>' + data[i].alamat_kandang + '</span>';
              jenis_kandang += '<span>' + data[i].jenis_kandang + '</span>';
              status_kandang += '<span>' + data[i].status_kandang + '</span>';



            }
            $('#kodekandang').html(kode_kandang);
            $('#kodeblok').html(kode_blok);
            $('#alamat').html(alamat);
            $('#jeniskandang').html(jenis_kandang);
            $('#statuskandang').html(status_kandang);


          }
        });
      }
    });


    $("#pilih_periode_sampel").change(function() {
      var id_chickin = $(this).val();
      // var idkdg = $(this).val();
      // var idkdgg = $(this).val();

      if (id_chickin != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getCekSampelWhereChickin') ?>",
          data: {
            id_chickin: id_chickin
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            // $('#pilih_periode').html(data);
            var i;
            var html;
            var no = 1;
            if (!$.trim(data)) {
              html += '<tr>' +
                '<td colspan="2">' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '</tr>';
              $('#my-table_sampel').html(html);
            } else {
              for (i = 0; i < data.length; i++) {
                html += '<tr>' +
                  '<td>' + no++ + '</td>' +
                  '<td>' + data[i].tanggal_waktu_sampel + '</td>' +
                  '<td>' + data[i].umur_ayam + ' Hari' + '</td>' +
                  '<td>' + 'Periode ' + data[i].periode + '</td>' +
                  '<td><a type="button" class="btn btn-primary" href="<?= base_url() ?>pengecekan/ceksampel/CekSampel/detil/' + data[i].id + '" role="button">' + 'Detil' + '</a>' + '</td>' +
                  '</tr>';
              }
              $('#my-table_sampel').html(html);
            }
          }
        });
      }
    });

    $("#pilih_periode_sampel").each(function() {
      var id_chickin = $(this).val();
      // var idkdg = $(this).val();
      // var idkdgg = $(this).val();

      if (id_chickin != '') {
        $.ajax({
          type: "POST",
          url: "<?= base_url('pengecekan/ceksampel/CekSampel/getCekSampelWhereChickin') ?>",
          data: {
            id_chickin: id_chickin
          },
          dataType: "JSON",
          success: function(data) {
            console.log(data);
            // $('#pilih_periode').html(data);
            var i;
            var html;
            var no = 1;
            if (!$.trim(data)) {
              html += '<tr>' +
                '<td colspan="2">' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '<td>' + "" + '</td>' +
                '</tr>';
              $('#my-table_sampel').html(html);
            } else {
              for (i = 0; i < data.length; i++) {
                html += '<tr>' +
                  '<td>' + no++ + '</td>' +
                  '<td>' + data[i].tanggal_waktu_sampel + '</td>' +
                  '<td>' + data[i].umur_ayam + ' Hari' + '</td>' +
                  '<td>' + 'Periode ' + data[i].periode + '</td>' +
                  '<td><a type="button" class="btn btn-primary" href="<?= base_url() ?>pengecekan/ceksampel/CekSampel/detil/' + data[i].id + '" role="button">' + 'Detil' + '</a>' + '</td>' +
                  '</tr>';
              }
              $('#my-table_sampel').html(html);
            }
          }
        });
      }
    });
  });
</script>




<script>
  var ctx = document.getElementById('myChartMasuk').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        if (count($grafik_populasi_masuk) > 0) {
          foreach ($grafik_populasi_masuk as $graphMasuk) {
            echo "'" . $graphMasuk->kode_Kandang . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Jumlah Populasi Masuk',
        data: [<?php
                if (count($grafik_populasi_masuk) > 0) {
                  foreach ($grafik_populasi_masuk as $graphMasuk) {
                    echo $graphMasuk->populasi_masuk . ", ";
                  }
                }
                ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('myChartHidup').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        if (count($grafik_populasi_hidup) > 0) {
          foreach ($grafik_populasi_hidup as $graphHidup) {
            echo "'" . $graphHidup->kode_Kandang . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Jumlah Populasi Hidup',
        data: [<?php
                if (count($grafik_populasi_hidup) > 0) {
                  foreach ($grafik_populasi_hidup as $graphHidup) {
                    echo $graphHidup->total_ayam_saat_ini . ", ";
                  }
                }
                ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('myChartMati').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        if (count($grafik_populasi_mati) > 0) {
          foreach ($grafik_populasi_mati as $graphMati) {
            echo "'" . $graphMati->kode_Kandang . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Jumlah Populasi Mati',
        data: [<?php
                if (count($grafik_populasi_mati) > 0) {
                  foreach ($grafik_populasi_mati as $graphMati) {
                    echo $graphMati->total . ", ";
                  }
                }
                ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


<script>
  var ctx = document.getElementById('myChartSakit').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        if (count($grafik_populasi_sakit) > 0) {
          foreach ($grafik_populasi_sakit as $graphSakit) {
            echo "'" . $graphSakit->kode_Kandang . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Jumlah Populasi Sakit',
        data: [<?php
                if (count($grafik_populasi_sakit) > 0) {
                  foreach ($grafik_populasi_sakit as $graphSakit) {
                    echo $graphSakit->total . ", ";
                  }
                }
                ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>



<script>
  var ctx = document.getElementById('myChartPanen').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
        if (count($grafik_populasi_panen) > 0) {
          foreach ($grafik_populasi_panen as $graphPanen) {
            echo "'" . $graphPanen->kode_Kandang . "',";
          }
        }
        ?>
      ],
      datasets: [{
        label: 'Jumlah Populasi Panen',
        data: [<?php
                if (count($grafik_populasi_panen) > 0) {
                  foreach ($grafik_populasi_panen as $graphPanen) {
                    echo $graphPanen->total . ", ";
                  }
                }
                ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<script>
  const flashDatafail = $(".flash-data-fail").data("flashdatafail");

  if (flashDatafail) {
    Swal({
      title: "Data",
      text: "Gagal " + flashDatafail,
      type: "error",
    });
  }
</script>

</body>

</html>