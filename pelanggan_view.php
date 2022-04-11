<div class="container pt-5">
    <a href="<?= base_url('pelanggan/tambah');?>" class="btn btn-success mb-2" >Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>No Telpon</th>
                            <th>Status</th>
                            <th>Aksi</th>                            
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getPelanggan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_pelanggan'];?></td>
                                <td><?= $isi['no_telpon'];?></td>
                                <td><?= $isi['status'];?></td>
                                <td>
                                    <a href="<?= base_url('pelanggan/edit/'.$isi['id_pelanggan']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('pelanggan/hapus/'.$isi['id_pelanggan']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelanggan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('pelanggan/add');?>">
            <div class="mb-3">
    <label for="" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" name="nama" autocomplete="off" required>
        </div>
        <div class="mb-3">
    <label for="" class="form-label">No Telpon</label>
    <input type="number" class="form-control" name="telpon" autocomplete="off" required>
        </div>
        <div class="mb-3">
    <label for="" class="form-label">Status</label>
        <select class="form-select" required name="status">
  <option selected>Pilih Status</option>
  <option value="Agen">Agen</option>
  <option value="Pelanggan">Pelanggan</option>
  
</select>
</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Pelanggan</button>
        </form>
      </div>
    </div>
  </div>
</div>