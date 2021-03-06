<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()."images/favicon.png" ?>">
    <title>Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."asset/css/lib/bootstrap/bootstrap.min.css" ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>

    <link href="<?php echo base_url()."asset/css/lib/calendar2/semantic.ui.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/lib/calendar2/pignose.calendar.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/lib/owl.carousel.min.css" ?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asset/css/lib/owl.theme.default.min.css" ?>" rel="stylesheet" />
    <link href="<?php echo base_url()."asset/css/helper.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."asset/css/style.css" ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <!-- Main wrapper  -->
      <?php $this->load->view('header'); ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php $this->load->view('sidebar'); ?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Management</h4>
                                <h6 class="card-subtitle">Super Admin & Admin</h6>
                                <?php if($status == "super_admin"){
 echo "<button class='btn btn-success' data-toggle='modal' data-target='#myModalAdd' style='margin-bottom:12px;'>Add New</button>";
                                } ?>
                               
    
                                <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>Id</th>
          <th>Username</th>
          <th>Password</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>    
<!-- Button trigger modal -->

        <!-- Modal Add Produk-->
       
         <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                      
                       <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                   </div>
                   <form id="add-row-form" action="<?php echo base_url().'index.php/Dashboard/simpan'?>" method="post">
                   <div class="modal-body">
                
                                         <div class="form-group">
                           <input type="text" name="username" class="form-control" placeholder="Username" required>
                       </div>
                       <div class="form-group">
                           <input type="password" name="password" class="form-control" placeholder="Password" required>
                       </div>
                                         <div class="form-group">
                           <select name="status" class="form-control" placeholder="Status" required>
                                                      
                                                            <option value="admin">Admin</option>
                                                            <option value="super_admin">Super Admin</option>
                                                
                                                 </select>
                       </div>
                                         
 
                   </div>
                   <div class="modal-footer">
                        
                   <a id="remove-modal" class="btn btn-default" onclick="close()">Close</a> <button type="submit" id="add-row" class="btn btn-success">Save</button>
                   </form>
                   </div>
                    </div>
            </div>
         </div>

 
     <!-- Modal Update Produk-->
     
         <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                        
                       <h4 class="modal-title" id="myModalLabel">Update User</h4>
                   </div>
                   <form id="add-row-form" action="<?php echo base_url().'index.php/Dashboard/update'?>" method="post">
                   <div class="modal-body">
                       <div class="form-group">
                           <input type="hidden" name="id" class="form-control" >
                       </div>
                       <div class="form-group">
                           <input type="text" name="username" class="form-control" placeholder="Username" required>
                       </div>
                       <div class="form-group">
                           <input type="password" name="password" class="form-control" placeholder="Password" required>
                       </div>
                                         <div class="form-group">
                           <select name="status" class="form-control" placeholder="Status" required>
                                                      
                                                            <option value="admin">Admin</option>
                                                            <option value="super_admin">Super Admin</option>
                                                
                                                 </select>
                       </div>
                   </div>
                   </form>
                   <div class="modal-footer">
                       
                   <a id="remove-modal2" class="btn btn-default" onclick="close()">Close</a>   <button type="submit" id="add-row" class="btn btn-success">Update</button>
                   </div>
                    </div>
            </div>
         </div>
     
 
     <!-- Modal Hapus Produk-->
    
         <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                      
                       <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                   </div>
                   <form id="add-row-form" action="<?php echo base_url().'index.php/Dashboard/delete'?>" method="post">
                   <div class="modal-body">
                           <input type="hidden" name="id" class="form-control" required>
                                                 <strong>Anda yakin mau menghapus record ini?</strong>
                   </div>
                   </form>
                   <div class="modal-footer">
                     
                   <a id="remove-modal3" class="btn btn-default" onclick="close()">Close</a>     <button type="submit" id="add-row" class="btn btn-success">Hapus</button>
                   </div>
                    </div>
            </div>
         </div>
 
                            </div>
                        </div>
                      
 


                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
           <?php $this->load->view('footer'); ?>
            <!-- End footer -->
        </div>

        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  ></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()."asset/js/lib/bootstrap/js/popper.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/bootstrap/js/bootstrap.min.js" ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()."asset/js/jquery.slimscroll.js" ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()."asset/js/sidebarmenu.js" ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url()."asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js" ?>"></script>
    <!--Custom JavaScript -->

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   
    <script src="<?php echo base_url()."asset/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" ?>"></script>
   <script type="text/javascript">
     $(document).ready(function(){
        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };
 
      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/Dashboard/ajax_user'?>", "type": "POST"},
                    columns: [
                                                {"data": "id"},
                                                {"data": "username"},
                                                //render harga dengan format angka
                        {"data": "password"},
                        {"data": "status"},
                        {"data": "view"}
                  ],
                order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }
 
      });

$('#remove-modal').on('click',function(){
    location.reload();
});

$('#remove-modal2').on('click',function(){
    location.reload();
});

$('#remove-modal3').on('click',function(){
    location.reload();
});

   $('#remove-row').on('click',function(){
    $('#myModalAdd').modal('hide');
      });
            // end setup datatables
            // get Edit Records
            $('#mytable').on('click','.edit_record',function(){
            var id=$(this).data('id');
                        var username=$(this).data('username');
                        var password=$(this).data('password');
                        var status=$(this).data('status');
            $('#ModalUpdate').modal('show');
            $('[name="id"]').val(id);
                        $('[name="username"]').val(username);
                        $('[name="password"]').val(password);
                        $('[name="status"]').val(status);
      });
            // End Edit Records
            // get Hapus Records
            $('#mytable').on('click','.hapus_record',function(){
            var id=$(this).data('id');
            $('#ModalHapus').modal('show');
            $('[name="id"]').val(id);
      });
            // End Hapus Records
 
    });
   </script>
   
    <script src="<?php echo base_url()."asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/datatables/datatables-init.js" ?>"></script>

    <script src="<?php echo base_url()."asset/js/lib/owl-carousel/owl.carousel.min.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/lib/owl-carousel/owl.carousel-init.js" ?>"></script>
    <script src="<?php echo base_url()."asset/js/scripts.js" ?>"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url()."asset/js/custom.min.js" ?>"></script>

</body>

</html>