<?php
// Card
// Inspiration from https://www.youtube.com/watch?v=eAK8uYtNTy4, 18:00
function job_card($id,
              $job_role, 
              $reference, 
              $description, 
              $report_line,
              $location,
              $responsible,
              $qualification,
              $software_experience,
              $min_salary,
              $max_salary) {

    $report_line = explode(",", $report_line);
    $responsible = explode("|",$responsible);
    $qualification = explode("|", $qualification);
    $software_experience = explode("|", $software_experience);

    $element = "
    <!-- Card structure used from https://www.w3schools.com/howto/howto_css_cards.asp -->
    <div class='card' id='job-card-$id'>
                    <div class='container'>
                        <!-- Job Title -->
                        <h3>$job_role - Ref No:$reference</h3>
                        <!-- Job Description -->
                        <h4>Job Description</h4>
                        <!-- Grammar improved and summarized using ChatGPT -->
                        <p>
                            $description 
                        </p>
                        <!-- Reporting Line -->
                        <h4>Reporting Line</h4>
                        <ul>";
                        foreach ($report_line as $report) {
                            $element .= "<li>" . trim($report) . "</li>";
                        }
                            
                        $element .= "</ul>
                        <!-- Location -->
                        <h4>Location</h4>
                        <p>$location</p>
                        <!-- Key Responsibility -->
                        <h4>Key Responsibility</h4>
                            <ol>";
                        foreach ($responsible as $r) {
                            $element .= "<li>" . trim($r) . "</li>";
                        }

                        $element .= "</ol>
                        <!-- Qualification -->
                        <h4>Qualification</h4>

                        <ul>";
                        foreach ($qualification as $q) {
                            $element .= "<li>" . trim($q) . "</li>";
                        }

                        $element .= "</ul>
                        <!-- Software Experience -->
                        <h4>Software Experience</h4>

                        <ul>";
                            foreach ($software_experience as $s) {
                            $element .= "<li>" . trim($s) . "</li>";
                        }

                        $element .= "</ul>
                        <!-- Salary -->
                        <h4>Salary</h4>
                        <p>$$min_salary - $$max_salary</p>

                        <!-- Button -->
                        <a href='apply.php' class='button' aria-label='Apply for $job_role Job Button'>
                            Apply Now
                        </a>
                        
                    </div>
                </div>
    ";
    echo $element;
}

?>