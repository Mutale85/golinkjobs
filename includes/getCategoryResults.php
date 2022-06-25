<?php
    include("db.php");
    if(isset($_POST['postedJobs'])){
        $job_category = filter_input(INPUT_POST, 'postedJobs', FILTER_SANITIZE_SPECIAL_CHARS);
        $keyword = filter_input(INPUT_POST, 'keyword', FILTER_SANITIZE_SPECIAL_CHARS);

        if ($job_category != "" && $keyword == "") {
            // Search together with keyword
            $query = $connect->prepare("SELECT * FROM posted_jobs WHERE job_category = ? AND application_deadline > (NOW() - INTERVAL 1 DAY) ORDER BY date_posted DESC ");
            $query->execute(array($job_category));
            if ($query->rowCount() > 0) {
                foreach($query->fetchAll() as $row){
                    extract($row);
?>
                <div class="col-md-12">
                    <div class="postedJob bg-light mb-3 p-2">
                        <div class="companyLogo">
                            <div class="div1">
                                <?php echo getCompanyLogo($connect, $company_id);?>
                            </div>
                            <div class="div2">
                                <a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
                                    <span class="text-secondary"><?php echo strtoupper(getCompanyName($connect, $company_id));?></span><br>
                                    <p class="jobTitle text-primary"><?php echo $job_title ?> (<?php echo $job_nature?>)</p>
                                    <p class="text-primary">( <?php echo $job_type ?> <i class="bi bi-arrow-right-circle"></i> <span class=""><?php echo $region ?></span> )</p>
                                    
                                </a>
                            </div>
                        </div>
                        <div class="jobDesc">
                            <p class="">Posted: <?php echo ucwords(time_ago_check($date_posted));?> </p>
                            <p class="text-danger">Deadline: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                            <p class="salary">Salary: <?php echo $salary_range ?></p>
                        </div>
                    </div>
                </div>
    <?php 
                }
            }else{
               echo "
                    <div class='notFound text-center forms'><h4>Search returned no results</h4></div>
                "; 
            }

        }else if ($job_category != "" && $keyword != "") {
            
            $query = $connect->prepare("SELECT * FROM posted_jobs WHERE job_title LIKE ? OR job_description LIKE ? AND job_category = ? AND application_deadline > (NOW() - INTERVAL 1 DAY) ORDER BY date_posted DESC ");
            $query->execute(array("%$keyword%", "%$keyword%", $job_category));
            if ($query->rowCount() > 0) {
                foreach($query->fetchAll() as $row){
                    extract($row);
        ?>
                    <div class="col-md-12">
                        <div class="postedJob bg-light mb-3 p-2">
                            <div class="companyLogo">
                                <div class="div1">
                                    <?php echo getCompanyLogo($connect, $company_id);?>
                                </div>
                                <div class="div2">
                                    <a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
                                        <span class="text-secondary"><?php echo strtoupper(getCompanyName($connect, $company_id));?></span><br>
                                        <p class="jobTitle text-primary"><?php echo $job_title ?> (<?php echo $job_nature?>)</p>
                                        <p class="text-primary">( <?php echo $job_type ?> <i class="bi bi-arrow-right-circle"></i> <span class=""><?php echo $region ?></span> )</p>
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="jobDesc">
                                <p class="">Posted: <?php echo ucwords(time_ago_check($date_posted));?> </p>
                                <p class="text-danger">Deadline: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                                <p class="salary">Salary: <?php echo $salary_range ?></p>
                            </div>
                        </div>
                    </div>
        <?php 
                    }
            }else{
                echo "
                    <div class='notFound text-center forms'><h4>Search returned no result</h4></div>
                ";
            }
        }else if ($job_category == "" && $keyword != "" ) {

            $query = $connect->prepare("SELECT * FROM posted_jobs WHERE job_title LIKE ? OR job_description LIKE ? AND application_deadline > (NOW() - INTERVAL 1 DAY) ORDER BY date_posted DESC ");
            $query->execute(array("%$keyword%", "%$keyword%"));
            if ($query->rowCount() > 0) {
                foreach($query->fetchAll() as $row){
                    extract($row);
        ?>
                    <div class="col-md-12">
                        <div class="postedJob bg-light mb-3 p-2">
                            <div class="companyLogo">
                                <div class="div1">
                                    <?php echo getCompanyLogo($connect, $company_id);?>
                                </div>
                                <div class="div2">
                                    <a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
                                        <span class="text-secondary"><?php echo strtoupper(getCompanyName($connect, $company_id));?></span><br>
                                        <p class="jobTitle text-primary"><?php echo $job_title ?> (<?php echo $job_nature?>)</p>
                                        <p class="text-primary">( <?php echo $job_type ?> <i class="bi bi-arrow-right-circle"></i> <span class=""><?php echo $region ?></span> )</p>
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="jobDesc">
                                <p class="">Posted: <?php echo ucwords(time_ago_check($date_posted));?> </p>
                                <p class="text-danger">Deadline: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                                <p class="salary">Salary: <?php echo $salary_range ?></p>
                            </div>
                        </div>
                    </div>
        <?php 
                    }
            }else{
                echo "
                    <div class='notFound text-center forms'><h4>Search returned no result</h4></div>
                ";
            }
        }else if ($job_category == "" && $keyword == "" ) {

            $query = $connect->prepare("SELECT * FROM posted_jobs WHERE application_deadline > (NOW() - INTERVAL 1 DAY) ORDER BY date_posted DESC ");
            $query->execute();
            if ($query->rowCount() > 0) {
                foreach($query->fetchAll() as $row){
                    extract($row);
        ?>
                    <div class="col-md-12">
                        <div class="postedJob bg-light mb-3 p-2">
                            <div class="companyLogo">
                                <div class="div1">
                                    <?php echo getCompanyLogo($connect, $company_id);?>
                                </div>
                                <div class="div2">
                                    <a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
                                        <span class="text-secondary"><?php echo strtoupper(getCompanyName($connect, $company_id));?></span><br>
                                        <p class="jobTitle text-primary"><?php echo $job_title ?> (<?php echo $job_nature?>)</p>
                                        <p class="text-primary">( <?php echo $job_type ?> <i class="bi bi-arrow-right-circle"></i> <span class=""><?php echo $region ?></span> )</p>
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="jobDesc">
                                <p class="">Posted: <?php echo ucwords(time_ago_check($date_posted));?> </p>
                                <p class="text-danger">Deadline: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                                <p class="salary">Salary: <?php echo $salary_range ?></p>
                            </div>
                        </div>
                    </div>
        <?php 
                    }
            }else{
                echo "
                    <div class='notFound text-center forms'><h4>Search returned no result</h4></div>
                ";
            }
        }
    }
?>