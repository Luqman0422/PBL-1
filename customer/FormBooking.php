<?php  
$id_akun = $_SESSION['$id_akun'];

$id = $_GET['id'];
?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  var htmlobjek;
  $(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#Type").change(function(){
    var Type = $("#Type").val();
    $.ajax({
      url: "ambilType.php",
      data: "Type="+Type,
      cache: false,
      success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#Block").html(msg);
          }
        });
  });
});

</script>

<form style="margin-bottom: 10px; margin-top: 50px;" action="do_booking.php?id=<?php echo "$id_akun"; ?>" method="post">
  <h2 align="center">Form Booking</h2>
  <hr width="100%">
  <div align="center">
    <div class="input-group" style="margin-top: 30px; width: 50%;">
      <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="nm_lengkap" placeholder="Nama Lengkap" required="">
    </div>


    <div class="input-group" style="margin-top: 30px; width: 50%;">
      <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="nik" placeholder="NIK" required="">
    </div>

    <div class="input-group" style="margin-top: 30px; width: 50%;">
      <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="no_telp" placeholder="No Telp" required="">
    </div>

    <div class="input-group"style="margin-top: 30px; width: 50%;">
      <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="alamat" placeholder="Alamat" required="">
    </div>

    <div class="input-group" style="margin-top: 30px; width: 50%;">
      <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="pekerjaan" placeholder="Pekerjaan" required="">
    </div>

    <div class="input-group" style="margin-top: 30px; width: 50%;">
      <select class="form-control" type="text" aria-describedby="nameHelp" name="Type" id="Type" required="">
        <?php
        if(!empty('$id')){ 
          $SQL = "SELECT * FROM data_rumah where id_rumah = $id";
          $dat = mysqli_query($conn,$SQL);
          $has = mysqli_fetch_array($dat);
          ?>
          <option selected value="<?php echo "$has[Type]"; ?>"><?php echo "$has[Type]"; ?></option> 
          <?php
        }
        else if(empty('$id')){ 
          $SQL = "SELECT * FROM data_rumah";

          $dat = mysqli_query($conn,$SQL);
          ?>
          <option value="" disabled selected >Pilih Type</option>
          <?php
          while($has = mysqli_fetch_array($dat)){

           ?>
           <option value="<?php echo "$has[Type]"; ?>"><?php echo "$has[Type]"; ?></option>
           <?php
         }
       }
       ?>
     </select>
   </div>

   <div class="input-group" style="margin-top: 30px; width: 50%;">
    <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="DP" placeholder="Dana Pertama" required="">
  </div>

  <div class="input-group" style="margin-top: 30px; width: 50%;">
    <select name="Block" id="Block" class="form-control"  aria-describedby="sizing-addon2" required="">
      <?php
      if(!empty('$id')){
        $SQL = "SELECT * FROM data_rumah where id_rumah = $id";
        $dat = mysqli_query($conn,$SQL);
        $has = mysqli_fetch_array($dat);
        $Block = mysqli_query($conn,"SELECT * FROM detail_siteplan where Type = '$has[Type]'");
        while($b = mysqli_fetch_array($Block)){
          for($a=$b['No_awal_rumah']; $a<=$b['No_akhir_rumah']; $a++){
           echo "<option value=\"".$b['Block']."-".$a."\">".$b['Block']."-".$a."</option>\n";
         }
       }
     }
     else{
     ?>
     <option value="" disabled selected>Pilih blok</option>
     <?php
     $Block = mysqli_query($conn,"SELECT * FROM detail_siteplan");
     while($s=mysqli_fetch_array($dat)){
      echo "<option value=\"$s[Block]\">$s[Block]</option>\n";
    }
    }
    ?>

  </select>
</div>

<div class="input-group" style="margin-top: 30px; width: 50%;">
  <input type="text" class="form-control"  aria-describedby="sizing-addon2" name="Gaji" placeholder="Gaji" required="">
</div>


<br>
<br>
<div align="center">
  <button class="btn btn-default" name="booking">Booking</button>
</div>
</form>
</div>
