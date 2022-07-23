<?php
    $dow = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
?>
<style>
    .form-control{
        color: #000 !important;     
    }
</style>
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('C_JadwalKuliah/create') ?>" method="post" class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title">Jadwal Kuliah</h4>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Hari</label>
                                <select class="form-control" placeholder="dow" name="dow">
                                    <?php foreach ($dow as $key => $d): ?>
                                        <option value="<?= $key ?>"><?= $d ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Jam Mulai</label>
                                <input type="time" value="<?= date('H:i') ?>" class="form-control" placeholder="Jam Mulai" name="jam_mulai">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Jam Selesai</label>
                                <input type="time" value="<?= date('H:i') ?>" class="form-control" placeholder="Jam Selesai" name="jam_selesai">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Dosen</label>
                                <select name="id_mst_dosen" id="id_mst_dosen" class="form-control" required>
                                    <option value="" selected disabled>Pilih dosen</option>
                                    <?php foreach ($dosen as $k): ?>
                                        <option value="<?= $k['id_mst_dosen'] ?>"><?= $k['nm_mst_dosen'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="id_mst_kelas" id="id_mst_kelas" class="form-control" required>
                                    <option value="" selected disabled>Pilih kelas</option>
                                    <?php foreach ($kelas as $k): ?>
                                        <option value="<?= $k['id_mst_kelas'] ?>"><?= $k['nm_mst_kelas'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Semester</label>
                                <select name="id_mst_semester" id="id_mst_semester" class="form-control" required>
                                    <option value="" selected disabled>Pilih kelas</option>
                                    <?php foreach ($semester as $s): ?>
                                        <option value="<?= $s['id_mst_semester'] ?>"><?= $s['nm_mst_semester'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Mata Kuliah</label>
                                <select name="id_mst_mata_kuliah" id="id_mst_mata_kuliah" class="form-control" required>
                                    <option value="" selected disabled>Pilih Mata Kuliah</option>
                                    <?php foreach ($mk as $k): ?>
                                        <option value="<?= $k['id_mst_mata_kuliah'] ?>"><?= $k['nm_mst_mata_kuliah'] ?></option>
                                    <?php endforeach ?>
                                </select>
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
                                    <td>Hari</td>
                                    <td>Jam Mulai</td>
                                    <td>Jam Selesai</td>
                                    <td>Nama Dosen</td>
                                    <td>Nama Kelas</td>
                                    <td>Nama Mata Kuliah</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($list) == 0): ?>
                                    <tr>
                                        <td colspan="8">Tidak ada data</td>
                                    </tr>
                                <?php endif ?>
                                <?php foreach ($list as $key => $l): ?>
                                    <tr>
                                        <td>
                                            <?= $key+1 ?>
                                        </td>
                                        <td>
                                            <?= $l['dow_string'] ?>
                                        </td>
                                        <td>
                                            <?= $l['jam_mulai'] ?>
                                        </td>
                                        <td>
                                            <?= $l['jam_selesai'] ?>
                                        </td>
                                        <td>
                                            <?= $l['nm_mst_dosen'] ?>
                                        </td>
                                        <td>
                                            <?= $l['nm_mst_kelas'] ?>
                                        </td>
                                        <td>
                                            <?= $l['nm_mst_mata_kuliah'] ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger deletethis" ids="<?= $l["id_trx_jadwal_kuliah"] ?>">
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
                window.location = "<?= base_url('/C_JadwalKuliah') ?>/delete/"+$(this).attr('ids')
            }
        })
    })
</script>