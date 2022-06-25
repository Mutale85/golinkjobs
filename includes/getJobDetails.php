<?php
    include("db.php");
    if(isset($_POST['postedJobs'])){
        $postedJobs = filter_input(INPUT_POST, 'postedJobs', FILTER_SANITIZE_SPECIAL_CHARS);

        $query = $connect->prepare("SELECT * FROM posted_jobs WHERE id = ? ");
        $query->execute(array($postedJobs));
        $row = $query->fetch();
        extract($row);
        // 
        $check = $connect->prepare("SELECT * FROM job_views WHERE job_id = ? ");
        $check->execute([$postedJobs]);

        if ($check->rowCount() > 0) {
            // update counter
            $update = $connect->prepare("UPDATE job_views SET clicks = clicks + 1 WHERE job_id = ? ");
            $update->execute([$postedJobs]);

        }else{
            $clicks = 1;
            $sql = $connect->prepare("INSERT INTO job_views (`company_id`, `job_id`, `clicks`) VALUES(?, ?, ?) ");
            $sql->execute([$company_id, $postedJobs, $clicks]);

        }
        ?>
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Summary</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <p class="text-center mb-3"><?php echo $job_title ?></p>
                            <tr>
                                <th>Posted:</th>
                                <td>: <?php echo date("d F, Y", strtotime($date_posted));?> | <?php echo ucwords(time_ago_check($date_posted));?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>: <?php echo $job_nature?> | <?php echo $job_type ?></td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>: <?php echo $region ?></td>
                            </tr>
                            <tr>
                                <th>Salary</th>
                                <td>: <?php echo $salary_range ?></td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
                                <td>: <?php echo date("d F, Y", strtotime($application_deadline));?></td>
                            </tr>
                        </table>
                        
                        <p class="border p-3 rounded">Posted By: <?php echo strtoupper(getUserName($connect, $company_id)) ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $application_link?>" class="btn btn-outline-secondary">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-5 mb-4">
                <div class="card ">
                    <div class="card-header">
                        
                        <div class="row align-items-center mb-2-2 pb-2-2 border-color-extra-light-gray">
                            <div class="col-sm-8 mb-4 mb-sm-0">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="job-details-logo">
                                            <?php echo getCompanyLogo($connect, $company_id);?>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3 ms-sm-4">
                                        <h4><?php echo $job_title ?></h4>
                                        <span class="text-muted"> 
                                            <?php echo strtoupper(getCompanyName($connect, $company_id)) ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <?php echo $job_description ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $application_link?>" class="btn btn-outline-secondary">Apply Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    <?php 
    }

?>