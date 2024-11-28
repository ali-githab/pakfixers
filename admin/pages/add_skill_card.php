<?php include("../components/headpart.php");
include("../logics/common.php");
?>

<body>
    <div id="app">
        <?php include("../components/leftbar.php") ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="container">
                <div class="container">
                    <div class="card-body">
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-9">
                                <div class="container">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Add New Card</h5>
                                            </div>
                                            <div class="card-body">
                                                <form id="form-card-info">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Info</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link disabled" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Experience</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link disabled" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <!-- Personal Info Content -->
                                                        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                                            <div class="card-body">
                                                                <div class="form-body c">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="title">Title</label>
                                                                                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                                                                                <div id="title-error"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="category">Category</label>
                                                                                <select id="category" class="form-control" name="category">
                                                                                    <option value="">Select Category</option>
                                                                                    <option value="Plumber">Plumber</option>
                                                                                    <option value="Mechanic">Mechanic</option>
                                                                                    <option value="Electrician">Electrician</option>
                                                                                    <option value="Carpenter">Carpenter</option>
                                                                                    <option value="Driver">Driver</option>
                                                                                </select>
                                                                                <div id="category-error"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="des">Description</label>
                                                                                <textarea id="des" class="form-control" name="description" placeholder="Description" rows="5"></textarea>
                                                                                <div id="error"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 d-flex justify-content-end">
                                                                            <button type="button" class="btn btn-primary btn-sm me-1 mb-1" id="personalnext">Next</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Experience Content -->
                                                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                                            <div class="card-body">
                                                                <div class="form-body c">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="expdesc">Experience Description</label>
                                                                                <textarea id="expdesc" class="form-control" name="expdesc" placeholder="Describe your experience" rows="5"></textarea>
                                                                                <div id="experror"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="expyears">Experience (Years)</label>
                                                                                <select id="expyears" class="form-control" name="expyears">
                                                                                    <option value="">Select Years</option>
                                                                                    <?php for($i = 1; $i <= 50; $i++) { echo "<option value='$i'>$i</option>"; } ?>
                                                                                </select>
                                                                                <div id="expyears-error"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 d-flex justify-content-end">
                                                                            <button type="button" class="btn btn-secondary btn-sm me-1 mb-1" id="expback">Back</button>
                                                                            <button type="button" class="btn btn-primary btn-sm me-1 mb-1" id="expnext">Next</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Contact Content -->
                                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                            <div class="card-body">
                                                                <div class="form-body c">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="contact-number">Contact Number</label>
                                                                                <input type="text" id="contact-number" class="form-control" name="contact-number" placeholder="Enter contact number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="whatsapp-number">WhatsApp Number</label>
                                                                                <input type="text" id="whatsapp-number" class="form-control" name="whatsapp-number" placeholder="Enter WhatsApp number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <label for="address">Address</label>
                                                                                <textarea id="address" class="form-control" name="address" placeholder="Enter your address" rows="3"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 d-flex justify-content-end">
                                                                            <button type="button" class="btn btn-secondary btn-sm me-1 mb-1" id="contactback">Back</button>
                                                                            <button type="submit" class="btn btn-success btn-sm me-1 mb-1" id="submit-btn">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include("../components/rightbar.php") ?>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo BASE_URL ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                let expdescriptionstatus = false;
                let titlestatus = false;
                let descriptionstatus = false;
                let expyearsstatus = false;
                let categorystatus = false;

                // Disable Experience and Contact Tabs initially
                $("#experience-tab").addClass("disabled");
                $("#contact-tab").addClass("disabled");

                // Personal Info Next Button Logic
                $(document).on("click", "#personalnext", function() {
                    let title = $('#title').val();
                    let description = $("#des").val();
                    let category = $("#category").val();

                    if (title == '') {
                        $("#title-error").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                    } else if (title.length < 5) {
                        $("#title-error").html("<span class='text-danger fs-6 my-2'>Minimum 5 characters required</span>");
                    } else if (title.length > 20) {
                        $("#title-error").html("<span class='text-danger fs-6 my-2'>Maximum 20 characters allowed</span>");
                    } else {
                        titlestatus = true;
                        $("#title-error").html("");
                    }

                    if (description == '') {
                        $("#error").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                    } else if (description.length < 10) {
                        $("#error").html("<span class='text-danger fs-6 my-2'>Minimum 10 characters required</span>");
                    } else if (description.length > 200) {
                        $("#error").html("<span class='text-danger fs-6 my-2'>Maximum 200 characters allowed</span>");
                    } else {
                        descriptionstatus = true;
                        $("#error").html("");
                    }

                    if (category == '') {
                        $("#category-error").html("<span class='text-danger fs-6 my-2'>Please select a category</span>");
                    } else {
                        categorystatus = true;
                        $("#category-error").html("");
                    }

                    if (titlestatus && descriptionstatus && categorystatus) {
                        $("#personal-tab").removeClass("active");
                        $("#personal").removeClass("show active");
                        $("#experience-tab").removeClass("disabled").addClass("active");
                        $("#experience").addClass("show active");
                    }
                });

                // Experience Next Button Logic
                $(document).on("click", "#expnext", function() {
                    let expdescription = $("#expdesc").val();
                    let expyears = $("#expyears").val();

                    if (expdescription == '') {
                        $("#experror").html("<span class='text-danger fs-6 my-2'>This field is required</span>");
                    } else if (expdescription.length < 10) {
                        $("#experror").html("<span class='text-danger fs-6 my-2'>Minimum 10 characters required</span>");
                    } else if (expdescription.length > 200) {
                        $("#experror").html("<span class='text-danger fs-6 my-2'>Maximum 200 characters allowed</span>");
                    } else {
                        expdescriptionstatus = true;
                        $("#experror").html("");
                    }

                    if (expyears == '') {
                        $("#expyears-error").html("<span class='text-danger fs-6 my-2'>Please select experience years</span>");
                    } else {
                        expyearsstatus = true;
                        $("#expyears-error").html("");
                    }

                    if (titlestatus && descriptionstatus && expdescriptionstatus && expyearsstatus) {
                        $("#experience-tab").removeClass("active");
                        $("#experience").removeClass("show active");
                        $("#contact-tab").removeClass("disabled").addClass("active");
                        $("#contact").addClass("show active");
                    }
                });

                // Experience Back Button Logic
                $(document).on("click", "#expback", function() {
                    $("#experience-tab").removeClass("active");
                    $("#experience").removeClass("show active");
                    $("#personal-tab").addClass("active");
                    $("#personal").addClass("show active");
                });

                // Contact Back Button Logic
                $(document).on("click", "#contactback", function() {
                    $("#contact-tab").removeClass("active");
                    $("#contact").removeClass("show active");
                    $("#experience-tab").addClass("active");
                    $("#experience").addClass("show active");
                });

                // Submit Logic
                $(document).on("submit", "#form-card-info", function(e) {
                    e.preventDefault();
                    alert("Form submitted successfully!");
                });
            });
        </script>
    </div>
</body>
