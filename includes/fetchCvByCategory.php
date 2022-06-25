<?php
    include("db.php");
    if(isset($_POST['fetchCvByCategory'])){
        $job_category = filter_input(INPUT_POST, 'fetchCvByCategory', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $query = $connect->prepare("SELECT * FROM posted_cvs WHERE job_category = ? ");
        $query->execute(array($job_category));
        if ($query->rowCount() > 0) {?>
            
<?php
            foreach($query->fetchAll() as $row){
                extract($row);
?>
                <tr>
                    <td><?php echo $firstname ?> <?php echo $lastname ?></td>
                    <td><?php echo $education_level ?></td>
                    <td><?php echo $field_studied ?></td>
                    <td><?php echo $work_experience ?> Years</td>
                    <td><a href="check-cv/<?php echo base64_encode($id)?>"><i class="bi bi-file-pdf"></i> Resume PDF</a></td>
                </tr>
<?php 
            }
        }else{
            
        }
    } 