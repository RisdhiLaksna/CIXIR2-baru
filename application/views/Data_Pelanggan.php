<div class="block-header">
<h2 style="color: #000; margin-left: 10px;">Data Pelanggan</h2>
</div>
<!-- Basic Table -->
<div class="row clearfix" style="color: blue; margin-top: 25px;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <?php 
                $notifikasi = $this->session->flashdata('notif');
                if($notifikasi != null){
                    echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                }
            ?>
        </div>
        <div class="body table-responsive">
            <table class="table" style="text-align: center;">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th style="text-align: center;">NAMA PEMBELI</th>
                        <th style="text-align: center;">ALAMAT</th>
                        <th style="text-align: center;">NO HP</th>
                        <th style="text-align: center;">USERNAME</th>
                        <th style="text-align: center;">PASSWORD</th>
                        <th style="text-align: center;">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($AllDataPelanggan as $pelanggan) {
                            $i++;
                            echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td>$pelanggan->nama_pembeli</td>
                                    <td>$pelanggan->alamat</td>
                                    <td>$pelanggan->no_telp</td>
                                    <td>$pelanggan->username</td>
                                    <td>$pelanggan->password</td>
                                    <td>
                                        <button class='btn btn-success waves-effect' type='button' data-toggle='modal' data-target='#defaultModal".$i."'>Edit</button>
                                        <a class='btn btn-danger waves-effect' href='".base_url('index.php/Pelanggan/HapusDataPelanggan/'.$pelanggan->id_pembeli.'')."'>Delete</a>
                                    </td>
                                </tr>
                                
                                <div class='modal fade' id='defaultModal".$i."' tabindex='-1' role='dialog'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h4 class='modal-title' id='defaultModalLabel'>Edit Pelanggan</h4>
                                            </div>
                                            <div class='modal-body'>
                                                <form id='form_validation' method='POST' action='".base_url('index.php/Pelanggan/SendUpdateDataPelanggan')."'>
                                                    <input type='text' style='display:none' name='ID' value='".$pelanggan->id_pembeli."'>
                                                    <div class='form-group form-float'>
                                                        <div class='form-line'>
                                                            <input type='text' class='form-control' name='NamaPelanggan' value='".$pelanggan->nama_pembeli."'>
                                                            <label class='form-label'>Nama Pelanggan</label>
                                                        </div>
                                                    </div>
                                                    <div class='form-group form-float'>
                                                        <div class='form-line'>
                                                            <input type='text' class='form-control' name='NoTelp' value='".$pelanggan->no_telp."'>
                                                            <label class='form-label'>No Telphon</label>
                                                        </div>
                                                    </div>
                                                    <div class='form-group form-float'>
                                                        <div class='form-line'>
                                                            <input type='text' class='form-control' name='Username' value='".$pelanggan->username."'>
                                                            <label class='form-label'>Username</label>
                                                        </div>
                                                    </div>
                                                    <div class='form-group form-float'>
                                                        <div class='form-line'>
                                                            <input type='password' class='form-control' name='Password' value='".$pelanggan->password."'>
                                                            <label class='form-label'>Password</label>
                                                        </div>
                                                    </div>
                                                    <div class='form-group form-float'>
                                                        <div class='form-line'>
                                                            <textarea name='Alamat' cols='30' rows='5' class='form-control no-resize'>".$pelanggan->alamat."</textarea>
                                                            <label class='form-label'>Description</label>
                                                        </div>
                                                    </div>
                                                    <button class='btn btn-primary waves-effect' type='submit'>SAVE CHANGES</button>
                                                </form>
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-danger waves-effect' data-dismiss='modal'>CLOSE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- #END# Basic Table -->