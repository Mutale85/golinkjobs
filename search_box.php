<section class="container-fluid ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3 text-center">
                <h1 class="infoTitle">Access Remote Jobs</h1>
                <p class="fs-4 text-secondary">No Spamming - We delivery them direct to you</p>
                <p>We will never show you jobs that have expired</p>
            </div>
            <div class="col-md-12 mb-3">
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
                                <input type="text" name="keyword" id="keyword" class="form-control" onkeyup="searchKeyWord(this.value)" placeholder="Job Title, Company Name, Keyword" required>
                                <select class="form-control" name="job_category" id="job_catgory" required onchange="getCategoryResults(this.value)">
                                    <option value="">All Categories</option>
                                    <option value="Agriculture, Food, and Natural Resources">Agriculture, Food, and Natural Resources</option>
                                    <option value="Architecture and Construction">Architecture and Construction</option>
                                    <option value="Arts, Audio/Video Technology, and Communication">Arts, Audio/Video Technology, and Communication</option>
                                    <option value="Business and Finance">Business and Finance</option>
                                    <option value="Education and Training">Education and Training</option>
                                    <option value="Health Science">Health Science</option>
                                    <option value="Information Technology">Information Technology </option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Writing">Writing</option>
                                    <option value="Other">Other</option>
                                </select>
                                <!-- <button type="submit" id="submit" class="searchBtn">Search Jobs</button> -->
                            </div>
                        </div>		
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>