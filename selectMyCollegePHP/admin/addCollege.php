<?php include './header.php'; ?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title fs-3">Add New College</h4>
                        <form class="cmxform" id="commentForm" method="get" action="#">
                            <fieldset>
                                <div class="form-group">
                                    <label for="cname">Name of the College</label>
                                    <input id="cname" class="form-control" name="name" minlength="2" type="text" required />
                                </div>
                                <div class="form-group">
                                    <label for="caddress">Address</label>
                                    <input id="caddress" class="form-control" type="text" name="address" required />
                                </div>
                                <div class="form-group">
                                    <label for="ccity">City</label>
                                    <input id="ccity" class="form-control" type="text" name="city" required />
                                </div>
                                <div class="form-group">
                                    <label for="cstate">State</label>
                                    <input id="cstate" class="form-control" type="text" name="state" required />
                                </div>
                                <div class="form-group">
                                    <label for="cpin">Pin Code</label>
                                    <input id="cpin" class="form-control" type="number" name="pin" required />
                                </div>
                                <div class="form-group">
                                    <label for="cfacility">Facilites</label>
                                    <input id="cfacility" class="form-control" type="text" name="facility" required />
                                </div>
                                <div class="form-group">
                                    <label for="clogo">Logo</label>
                                    <input id="clogo" class="form-control" type="file" name="logo" required />
                                </div>
                                <div class="form-group">
                                    <label for="curl">College URL (optional)</label>
                                    <input id="curl" class="form-control" type="url" name="url" />
                                </div>
                                <div class="form-group">
                                    <label for="ccomment">Description (required)</label>
                                    <textarea id="ccomment" class="form-control" name="comment" required></textarea>
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