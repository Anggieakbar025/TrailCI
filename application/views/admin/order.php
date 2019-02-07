            <!-- konten --> 
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                            <h2 class="title-1 m-b-25">Order List</h2>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>date</th>
                                                        <th>email</th>
                                                        <th>Item</th>
                                                        <th>status</th>
                                                        <th>price</th>
                                                    </tr>
                                                </thead>
                                                <?php foreach($sewa as $row) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?= $row['tanggal_sewa']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['email']; ?>

                                                        </td>
                                                        <td>
                                                            <?= $row['nama_motor']; ?>
                                                        
                                                        </td>
                                                        <td class="process">
                                                            <button type="button" class="btn btn-success">
                                                            <?= $row['status']; ?>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <?= $row['harga']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                <!-- END USER DATA-->
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Trail. L,td. All rights reserved.<a href="https://colorlib.com">Anggie Akbar</a>.</p>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

  