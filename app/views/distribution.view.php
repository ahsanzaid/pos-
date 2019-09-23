<?php require 'partials/_header.php'; ?>
<div class="row">
        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Search Distribution Products</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="productSearch" method="get" enctype="multipart/form-data"
                            class="form-horizontal ng-pristine ng-valid">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
            
                                        <input type="text" id="input1-group2" name="pname" placeholder="Search Distribution"
                                            class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-search"></i> Search
                                            </button>
                                            <button type="button" class="btn btn-success btn-md" data-toggle="modal"
                                                data-target="#addModal">+ Distributor</button>
                                            <button type="button" class="btn btn-success btn-md" data-toggle="modal"
                                                data-target="#addModal">+ Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Search Distribution</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
            
                                    <th class="avatar">Image</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>RP</th>
                                    <th>TP</th>
                                    <th>%</th>
                                    <th>UnitPrice</th>
                                    <th>Company</th>
                                    <th>Shelf</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) : ?>
                                <tr>
            
                                    <td class="avatar">
                                        <div class="round-img">
                                            <a href="<?php echo $product->image1; ?>"><img class="rounded-circle"
                                                    src="<?php echo $product->image1; ?>" alt="<?php echo $product->pname; ?>"
                                                    width="50" height="50"></a>
                                        </div>
                                    </td>
                                    <td><a href="#" data-toggle="modal"
                                            data-target="#updateModal_<?php echo $product->p_id; ?>"><?php echo $product->p_id; ?></a>
                                    </td>
                                    <td><span class="name"><?php echo $product->pname; ?></span> </td>
                                    <td><span class="name"><?php echo $product->ptype; ?></span> </td>
                                    <td><span class="name"><?php echo $product->size; ?></span></td>
                                    <td><span class="name"><?php echo $product->rp; ?></span></td>
                                    <td><span class="name"><?php echo $product->tp; ?></span></td>
                                    <td><span class="name"><?php echo $product->per; ?></span></td>
                                    <td><span class="name"><?php echo $product->unit_price; ?></span></td>
                                    <td><span class="name"><?php echo $product->cname; ?></span></td>
                                    <td><span class="name"><?php echo $product->sh_name; ?></span></td>
            
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>

</div>







<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Distributor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body card-block">
                    <form id="distributor_submit" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Distributions:
                                </label></div>
                            <div class="col-12 col-md-7">
                                <input list="dislist" name="distribution" class="form-control-lg form-control" required>
                                <datalist id="dislist">
                                </datalist>
                            </div>
                            <div class="col-12 col-md-2">
                                <button class="btn btn-primary form-control-lg form-control"> +
                                </button>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Name: </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="name" id="selectLg" class="form-control-lg form-control"
                                    required>
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Job Title</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="job" value="manager"
                                                class="form-check-input">Manager
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="job" value="dist"
                                                class="form-check-input">Distributor
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio3" class="form-check-label ">
                                            <input type="radio" id="radio3" name="job" value="supplier"
                                                class="form-check-input">Supplier
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio3" class="form-check-label ">
                                            <input type="radio" id="radio3" name="job" value="agent"
                                                class="form-check-input">Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Status:</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="status" value="1"
                                                class="form-check-input">Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="status" value="0"
                                                class="form-check-input">Unactive
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>





                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Contact1: </label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="contact1" id="selectLg" class="form-control-lg form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Contact2: </label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="contact2" id="selectLg" class="form-control-lg form-control">
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Contact3: </label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="contact3" id="selectLg" class="form-control-lg form-control">
                    </div>
                </div>









                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label"></label></div>
                    <div class="col-12 col-md-9">
                        <input type="submit" name="submit" id="selectLg"
                            class="form-control-lg form-control btn btn-primary btn-sm">

                    </div>
                </div>





                </form>
            </div>
        </div>
        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Confirm</button>
                        </div> -->
    </div>
</div>



<?php require 'partials/_footer.php'; ?>