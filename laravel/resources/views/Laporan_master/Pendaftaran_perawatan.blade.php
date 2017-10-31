<?php include 'template/head.php'; ?>

<div class="container">
    <div class="box">
        <!-- Header -->
        <div class="box-header">
            <div class="title">Form > Pendaftaran perawatan</div><br><br>
            <button class="btn btn-success" type="submit">Tambah</button>
            <button class="btn btn-success" type="submit" style="margin-left: 1rem !important">Cari</button>
        </div><br>

        <!-- Form -->
        <div class="form-inline" style="margin: 0 1rem 0 1rem !important">
            <div class="form-group">
                <label for="datepicker">Mulai tanggal : </label>
                <input type="text" name="datepicker" class="datepicker">
            </div>
            <div class="form-group" style="margin-left: 10rem !important">
                <label for="datepicker">Sampai tanggal : </label>
                <input type="text" name="datepicker" class="datepicker">
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $('.datepicker').datepicker();
    })();
</script>

<?php 
    include 'template/footer.php'; 
    include 'template/end.php';
?>