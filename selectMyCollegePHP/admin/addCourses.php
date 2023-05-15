<?php include './header.php'; ?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title fs-3">Add New Course</h4>
                        <form class="cmxform" id="commentForm" method="get" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <label for="cname">Course Name</label>
                                    <input id="cname" class="form-control" name="name" minlength="2" type="text" required />
                                </div>
                                <div class="form-group">
                                    <label for="cemail">Course Duration</label>
                                    <input id="cemail" class="form-control" type="email" name="email" required />
                                </div>
                                <div class="form-group">
                                    <label for="cfee">Course Fee</label>
                                    <input id="cfee" class="form-control" type="number" name="fee" required />
                                </div>
                                <input class="btn btn-primary" type="submit" value="Submit" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './footer.php'; ?>