<section class="container-fluid " id="parallax" data-image-width="1920" data-image-height="1080">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="infoTitle">Go Link Jobs</h1>
                <p class="fs-4 text-secondary">Get Jobs that suit you direct in your inbox</p>
                <p>We will never show you jobs that have expired</p>
            </div>
            <div class="col-md-12">
                <div class="postedJobs text-center">
                    <form method="get" id="searchForm" action="search" class="searchForm">
                        <div class="form-group">
                            <div class="input-group">
                                <?php 
                                    $keyword = $job_category = "";
                                    if (isset($_GET['keyword']) && isset($_GET['job_category'])) {
                                        $keyword = filter_input(INPUT_GET, 'keyword', FILTER_SANITIZE_SPECIAL_CHARS);
                                        $job_category = filter_input(INPUT_GET, 'job_category', FILTER_SANITIZE_SPECIAL_CHARS);
                                    }
                                ?>
                                <input type="text" name="keyword" id="keyword" class="form-control" onkeyup="searchKeyWord(this.value)" placeholder="Job Title, Keyword" required>
                                <select class="form-control" name="job_category" id="job_category" onchange="getCategoryResults(this.value)">
                                    <option value="">All Categories</option>
                                    <option value="Accounting And Finance">Accounting And Finance</option>
                                    <option value="Administrative">Administrative</option>
                                    <option value="Administrative Assistant">Administrative Assistant</option>
                                    <option value="Agriculture and Natural Resources">Agriculture and Natural Resources</option>
                                    <option value="Architecture and Construction">Architecture and Construction</option>
                                    <option value="Automotive Industry">Automotive Industry</option>
                                    <option value="Aviation Industry">Aviation Industry</option>
                                    <option value="Business Development">Business Development</option>
                                    <option value="Business Administration">Business Administration</option>
                                    <option value="Communications">Communications</option>
                                    <option value="Community and Social Services">Community and Social Services</option>
                                    <option value="Consultancy">Consultancy</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Fire and Safety">Fire and Safety</option>
                                    <option value="Health Care Services">Health Care Services</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="Information Technology">Information Technology </option>
                                    <option value="Legal Services">Legal Services</option>
                                    <option value="Marketing and Sales">Marketing and Sales</option>
                                    <option value="Media and Arts">Media and Arts</option>
                                    <option value="Physical Trainer">Physical Trainer</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Product Management">Product Management</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="Supply and Procurement">Supply and Procurement</option>
                                    <option value="Transport and Logistics">Transport and Logistics</option>
                                    <option value="Writing and Editing">Writing and Editing</option>
                                    <option value="Other Fields">Other Fields</option>
                                </select>
                            </div>
                        </div>		
                    </form>
                </div>
            </div>
            <div class="col-md-12 forBig">
                <div class="postedJobs">
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Accounting And Finance">Accounting And Finance</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Administrative">Administrative</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Administrative Assistant">Administrative Assistant</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Agriculture and Natural Resources">Agriculture and Natural Resources</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Architecture and Construction">Architecture and Construction</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Automotive Industry">Automotive Industry</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Aviation Industry">Aviation Industry</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Business Development">Business Development</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Business Administration">Business Administration</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Communications">Communications</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Community and Social Services">Community and Social Services</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Consultancy">Consultancy</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Customer Service">Customer Service</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Education">Education</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Engineering">Engineering</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Fire and Safety">Fire and Safety</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Health Care Services">Health Care Services</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Human Resource">Human Resource</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Information Technology">Information Technology </a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Legal Services">Legal Services</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Marketing and Sales">Marketing and Sales</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Media and Arts">Media and Arts</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Physical Trainer">Physical Trainer</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Project Management">Project Management</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Product Management">Product Management</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Quality Assurance">Quality Assurance</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Supply and Procurement">Supply and Procurement</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Transport and Logistics">Transport and Logistics</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Writing and Editing">Writing and Editing</a>
                    <a class="btn btn-outline-secondary btn-sm job_btn m-2" href="Other Fields">Other Fields</a>
                </div>
            </div>
                        
        </div>
    </div>
</section>