<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $data['admin'] = $this->db->get_where('auth', ['id_auth' => $this->session->userdata('id')])->row_array();
	$this->load->view('dist/_partials/header', $data);
?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Data</h4>
                            </div>
                            <div class="card-body">
                                <?php foreach ($admin as $data) : ?>
                                <form method="post" class="needs-validation" action="<?php echo site_url('admin/service/support/update') ?>" novalidate="">
                                    <div class="form-group">
                                        <label for="name">Nama Layanan</label>
                                        <input type="hidden" name="id" value="<?= $data->id_penunjang ?>">
                                        <input id="name" type="text" class="form-control" name="name" value="<?= $data->name ?>" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your name
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Sesi</label>
                                        <select class="form-control selectric" id="sesi" name="sesi">
                                            <option value="" selected disabled>-- Choose Meeting Session --</option>
                                            <option 
												<?php if($data->sesi == '1x') : echo 'selected'; ?><?php endif; ?> 
												value="1x">1x
                                            </option>
											<option 
												<?php if($data->sesi == '2x') : echo 'selected'; ?><?php endif; ?> 
												value="2x">2x
                                            </option>
                                            <option 
												<?php if($data->sesi == '4x') : echo 'selected'; ?><?php endif; ?> 
												value="4x">4x
                                            </option>
                                            <option 
												<?php if($data->sesi == '8x') : echo 'selected'; ?><?php endif; ?> 
												value="8x">8x
                                            </option>
                                            <option 
												<?php if($data->sesi == '12x') : echo 'selected'; ?><?php endif; ?> 
												value="12x">12x
                                            </option>
                                            <option 
												<?php if($data->sesi == '16x') : echo 'selected'; ?><?php endif; ?> 
												value="16x">16x
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <textarea class="summernote-simple" name="desc" required=""><?= $data->desc ?></textarea>
                                        <div class="invalid-feedback">
                                            Please fill in your Address
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    Rp
                                                </div>
                                            </div>
                                            <input id="harga" type="text" name="harga" tabindex="1" value="<?= $data->harga ?>" class="form-control currency" required>
                                            <div class="invalid-feedback">
                                                Please fill in price
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Edit Data
                                        </button>
                                    </div>
                                </form>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('dist/_partials/footer'); ?>