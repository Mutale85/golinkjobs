<?php
    include("db.php");
    if(isset($_POST['postedJobs'])){
        $postedJobs = filter_input(INPUT_POST, 'postedJobs', FILTER_SANITIZE_SPECIAL_CHARS);

        $query = $connect->prepare("SELECT * FROM posted_jobs WHERE id = ? ");
        $query->execute(array($postedJobs));
        $row = $query->fetch();
        extract($row);
        ?>
        <div class="row">
            <div class="col-md-8 mt-5 mb-4">
                <div class="card ">
                    <div class="card-header">
                        <img src="uploads/<?php echo $company_logo ?>" alt="<?php echo $company_logo ?>" class="img-gluid coyLogo" width="60">
                        <div>
                            <h2><?php echo $job_title ?></h2>
                            <p><?php echo $job_type ?> | <span class="text-primary"><?php echo $job_nature?></span> | <span class="text-info"><?php echo $region ?></span></p>
                            <p class="btn btn-warning">Dealine: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                            <p class="text-bold">Posted By: <?php echo strtoupper($company_name) ?></p>
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
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="jobTitle"><?php echo $job_title ?></h4>
                    </div>
                    <div class="card-body">
                        
                        <p><?php echo strtoupper($company_name) ?></p>
                        <p class="salary">Salary: <?php echo $salary_range ?></p>
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