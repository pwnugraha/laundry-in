<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <br>
            <?php if ($this->session->flashdata('msg')) { ?>
                <div class="alert <?php echo $this->session->flashdata('alert') ?>  alert-dismissible" style="margin-bottom: 0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><?php echo $this->session->flashdata('msg') ?></strong>
                </div>
            <?php } ?>
            <div class="col-lg-12">
                <h2 class="page-header"><i class="fa fa-fw fa-laptop"></i>Informasi
                </h2>
            </div><br>
        </div>
        <div class="text-right">
            <a href="<?php echo site_url('manage/information/add') ?>" class="btn btn-default"><i class="fa fa-fw fa-plus"></i>&nbsp;New Informasi</a>
        </div><br>
        <?php if ($info == FALSE) { ?>
            <h4 class="text-center">Data Informasi kosong. Klik 'New Informasi' untuk menambahkan information</h4>
        <?php } else { ?>
            <div class="col-lg-12">
                <div class="row">
                    <div class = "col-xs-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 5%">#</th>
                                        <th class="text-center" style="width: 85%">Halaman</th>
                                        <th class="text-center" style="width: 10%"><i class="fa fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($info as $i) {
                                        ?>

                                        <tr>
                                            <td class="text-center"><?php echo $no ?></td>
                                            <td class=""><?php echo $i['name'] ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo site_url('manage/information/edit/' . $i['id']) ?>" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-edit text-primary"></i></a>
                                                <button id="delete" type="button" class="btn btn-default btn-sm" data-url="<?php echo site_url('manage/information/delete/' . $i['id']) ?>" data-toggle="modal" data-target="#delete-modal" data-backdrop="static" data-keyboard="false" title="Hapus"><i class="fa fa-close text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <?php
                                        $no+=1;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
        <div class="clearfix"></div> 
    </div>
</div>
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-confirm">
            <div class="modal-body text-center text-semi-bold">
                <p><i class="fa fa-info-circle text-warning fa-2x"></i></p>
                <p>Informasi ini akan dihapus. Lanjutkan ?</p>
                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-sm" id="btn-modal-delete">Ya</a>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tidak</button>           
                </div>
            </div>
        </div>
    </div>
</div>