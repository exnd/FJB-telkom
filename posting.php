<?php require 'template/header.php'; ?>
<?php require 'template/footer.php'; ?>


<!-- Content Start -->


<div class="ui grid container">

  <div class="row nopadding">
    <div class="sixteen wide column center aligned grid">

        <h4 class="post">Posting Barang</h4>

      <div class="ui divider"></div>
    </div>
  </div>


  <div class="row nopadding">
    <div class="sixteen wide column">
      <form class="ui form posting" name="form1" action="berhasil.php" enctype="multipart/form-data" onsubmit="return submit()"  >
        <div class="field ">
          <label class="redlabel">Nama Penjual</label>
          <input type="text" name="nama" class="redinput " placeholder="ex : Budi">
        </div>

        <div class="field">
          <label class="redlabel">Nama Barang</label>
          <input type="text" name="namabarang" class="redinput" placeholder="ex : Lemari">
        </div>

        <div class="field">

        <label class="redlabel">Harga Barang</label>
        <div class="field ui input labeled fluid">
          <label for="amount" class="ui label">Rp</label>
          <input type="number"  name="harga" class="redinput" placeholder="50.000" id="amount" >
        </div>
      </div>
      <div class="ui yellow mini message">
        <div class="header">
          Perhatian !
        </div>
        <p>Ukuran Foto Maksimal 2 Mb</p>
      </div>
        <div class="field">
          <label class="redlabel" for="upload">Foto Barang</label>
              <input  name="filesToUpload[]" id="filesToUpload" type="file" multiple="" >
            </div>


        <div class="field">
          <label class="redlabel">Deskripsi Barang</label>
          <textarea rows="2"  name="deskripsi" class="redinput" placeholder="ex : Kondisi Masih Bagus" ></textarea>
        </div>
        <div class="ui yellow mini message">
          <div class="header">
            Perhatian !
          </div>
          <p>Nomer Whatsapp Harus Aktif & Siap Dihubungi </p>
        </div>
        <div class="field">
          <label class="redlabel">Nomer Whatsapp</label>
          <input type="text" name="nomer" class="redinput" placeholder="089876548098" >
        </div>
      <button class="ui button redbtn" id="kirimform" onclick="return required()" type="submit">Kirim</button>
      </form>
    </div>
  </div>



</div>

<div class="ui basic mini modal">
  <div class="ui icon header">
    <i class="question circle icon"></i>
    Konfirmasi Pengiriman
  </div>
  <div class="content">
    <center><p>Apakah Anda Yakin Akan Mengirim Postingan?</p></center>
  </div>
  <center>
  <div class="actions">
    <div class="ui red basic small cancel inverted button">
      <i class="remove icon"></i>
      Cancel
    </div>
    <div class="ui green ok small inverted button" id="yakin">
      <i class="checkmark icon"></i>
      Yakin
    </div>
  </div>
</center>
</div>

<script type="text/javascript">


function required()
{
var empt = document.forms["form1"]["nama"].value;
if (empt == "")
{
alert("Please input a Value");
return false;
}
else
{

    $('.ui.basic.mini.modal').modal('show');


}
}


// $("#kirimform").click(function(){
//   $('.ui.basic.mini.modal')
//   .modal('show')
//   ;
// });

</script>


<!-- <script type="text/javascript">
//get the input and UL list
var input = document.getElementById('filesToUpload');
var list = document.getElementById('fileList');

//empty list for now...
while (list.hasChildNodes()) {
list.removeChild(ul.firstChild);
}

//for every file...
for (var x = 0; x < input.files.length; x++) {
//add to list
var li = document.createElement('li');
li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
list.append(li);
}
</script> -->
