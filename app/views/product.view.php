<?php require 'partials/_header.php'; ?>
<?php  //echo($status); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Search Products</strong>
            </div>
            <div class="card-body card-block">
                <form action="productSearch" method="get" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">

                                <input type="text" id="input1-group2" name="pname" placeholder="Search Product" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal">+</button>
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
                <strong class="card-title">Search Product</strong>
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
                                        <a href="<?php echo $product->image1; ?>"><img class="rounded-circle" src="<?php echo $product->image1; ?>" alt="<?php echo $product->pname; ?>" width="50" height="50"></a>
                                    </div>
                                </td>
                                <td><a href="#" data-toggle="modal" data-target="#updateModal_<?php echo $product->p_id; ?>"><?php echo $product->p_id; ?></a></td>
                                <td><span class="name"><?php echo $product->pname; ?></span> </td>
                                <td><span class="name"><?php echo $product->ptype; ?></span> </td>
                                <td><span class="name"><?php echo $product->size; ?></span></td>
                                <td><span class="name"><?php echo $product->rp; ?></span></td>
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


<?php foreach ($products as $product) : ?>
    <!-- product Update Modal -->
    <div class="modal fade" id="updateModal_<?php echo $product->p_id; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>Update Product</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="productUpdate" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">ID: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="p_id" id="selectLg" value="<?php echo $product->p_id; ?>" class="form-control-lg form-control" readonly>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Name: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="pname" id="selectLg" value="<?php echo $product->pname; ?>" class="form-control-lg form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Retail Price: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" step="0.10" name="rp" id="selectLg" value="<?php echo $product->rp; ?>" class="form-control-lg form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Type: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="ptype" name="ptype" value="<?php echo $product->ptype; ?>" class="form-control-lg form-control" required>
                                    <datalist id="ptype">
                                        <option>tablet</option>
                                        <option>capsule</option>
                                        <option>diapers</option>
                                        <option>bandage</option>
                                        <option>supositories</option>
                                        <option>injection</option>
                                        <option>oinment</option>
                                        <option>suspension</option>
                                    </datalist>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Size: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="size" id="selectLg" value="<?php echo $product->size; ?>"class="form-control-lg form-control" required>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Company: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="company" name="cname" value="<?php echo $product->cname; ?>" class="form-control-lg form-control" required>
                                    <datalist id="company">
                                        <option>getz</option>
                                        <option>gsk</option>
                                        <option>bh</option>
                                        <option>saffron</option>
                                    </datalist>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Shelf: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="shelf" name="sh_name" value="<?php echo $product->sh_name; ?>" class="form-control-lg form-control">
                                    <datalist id="shelf">
                                        <option>A-11</option>
                                        <option>B-23</option>
                                        <option>STO-23</option>
                                        <option>INV-89</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label"></label></div>
                                <div class="col-12 col-md-9">
                                    <input type="submit" name="submit" id="selectLg" class="form-control-lg form-control btn btn-primary btn-sm">

                                </div>
                            </div>





                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!--EO-Update Model-->
   <?php endforeach; ?>


    <!-- product Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>Add New Product</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="productInsert" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Name: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="pname" id="selectLg" class="form-control-lg form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Retail Price: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" step="0.10" name="rp" id="selectLg" class="form-control-lg form-control" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Type: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="ptype" name="ptype" class="form-control-lg form-control" required>
                                    <datalist id="ptype">
                                        <option>tablet</option>
                                        <option>capsule</option>
                                        <option>diapers</option>
                                        <option>bandage</option>
                                        <option>supositories</option>
                                        <option>injection</option>
                                        <option>oinment</option>
                                        <option>suspension</option>
                                    </datalist>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Size: </label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" name="size" id="selectLg" class="form-control-lg form-control" pattern="^[1-9]\d*[x][1-9]\d*$" title="like 2 strip and 1 strip has 10 tablets e.g '2x10' '"required>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Company: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="company" name="cname" class="form-control-lg form-control" required>
                                    <datalist id="company">
                                        <option>getz</option>
                                        <option>gsk</option>
                                        <option>bh</option>
                                        <option>saffron</option>
                                    </datalist>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Shelf: </label></div>
                                <div class="col-12 col-md-9">
                                    <input list="shelf" name="sh_name" class="form-control-lg form-control">
                                    <datalist id="shelf">
                                        <option>A-11</option>
                                        <option>B-23</option>
                                        <option>STO-23</option>
                                        <option>INV-89</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label"></label></div>
                                <div class="col-12 col-md-9">
                                    <input type="submit" name="submit" id="selectLg" class="form-control-lg form-control btn btn-primary btn-sm">

                                </div>
                            </div>





                        </form>
                    </div>

                </div>



            </div>
        </div>
    </div>
    <!--EO-Add Model-->




<?php require 'partials/_footer.php'; ?>