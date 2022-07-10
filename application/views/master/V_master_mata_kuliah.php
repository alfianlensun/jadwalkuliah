<div class="col-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('C_MasterMataKuliah/create') ?>" method="post" class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title">Master Mata Kuliah</h4>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" placeholder="Nama Mata Kuliah" name="nm_mst_mata_kuliah">
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center">
                            <button class="btn-block btn btn-sm btn-primary mt-2">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Mata Kuliah</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($list) == 0): ?>
                                    <tr>
                                        <td colspan="3">Tidak ada data</td>
                                    </tr>
                                <?php endif ?>
                                <?php foreach ($list as $key => $l): ?>
                                    <tr>
                                        <td>
                                            <?= $key+1 ?>
                                        </td>
                                        <td>
                                            <?= $l['nm_mst_mata_kuliah'] ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger deletethis" ids="<?= $l["id_mst_mata_kuliah"] ?>">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<script>
    $(function(){
        $('.deletethis').on('click', function(){
            if (confirm('Apakah anda yakin ingin menghapus data ini?')){
                window.location = "<?= base_url('/C_MasterMataKuliah') ?>/delete/"+$(this).attr('ids')
            }
        })
    })
</script>