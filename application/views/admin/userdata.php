            <!-- konten -->
            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-3">
                            <h2 class="title-1 m-b-25">User Data</h2>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>User Id</th>
                                                        <th>Email</th>
                                                        <th>Full Name</th>
                                                        <th>Telephone</th>
                                                        <th>Username</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <?php foreach($customer as $row) : ?>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?= $row['id_customer']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['email']; ?>

                                                        </td>
                                                        <td>
                                                            <?= $row['fname']; ?>

                                                        </td>
                                                        <td>
                                                            <?= $row['telepon']; ?>

                                                        </td>
                                                        <td>
                                                            <?= $row['username']; ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
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

