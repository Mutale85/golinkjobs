<?php
    include("db.php");
    if(isset($_POST['postedJobs'])){
        $keyword = filter_input(INPUT_POST, 'postedJobs', FILTER_SANITIZE_SPECIAL_CHARS);
        $query = $connect->prepare("SELECT * FROM posted_jobs WHERE job_title LIKE ? OR job_description LIKE ? OR company_name LIKE ? OR company_location LIKE ? ");
        $query->execute(array("%$keyword%", "%$keyword%", "%$keyword%", "%$keyword%"));
        if ($query->rowCount() > 0) {
            foreach($query->fetchAll() as $row){
                extract($row);
?>
                <div class="col-md-12">
                    <a href="job/<?php echo preg_replace("#[^a-zA-Z_&()0-9-]#", "-", strtolower($job_title)) ?>" class="jobData" id="<?php echo $id?>">
                        <div class="postedJob mb-3 p-2">
                            <div class="companyLogo">
                                <div class="div1">
                                    <img src="uploads/<?php echo $company_logo ?>" alt="<?php echo $company_logo ?>" class="img-gluid coyLogo" width="60">
                                </div>
                                <div class="div2">
                                    <h4 class="jobTitle"><?php echo $job_title ?></h4>
                                    <p><?php echo strtoupper($company_name) ?></p>
                                    <p class="salary">Salary: <?php echo $salary_range ?></p>
                                </div>
                            </div>
                            <div class="jobDesc">
                                <p><?php echo $job_type ?> | <span class="text-primary"><?php echo $job_nature?></span> | <span class="text-info"><?php echo $region ?></span></p>
                                <p class="">Deadline: <?php echo date("d F, Y", strtotime($application_deadline));?> </p>
                            </div>
                        </div>
                    </a>
                </div>
<?php 
            }
        }else{
            echo "
                <div class='notFound'><h4>Search Returned No Result</h4></div>
            ";
        }
    }
?>