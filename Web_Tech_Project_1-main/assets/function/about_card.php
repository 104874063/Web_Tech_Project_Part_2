<?php
// Card
// Inspiration from https://www.youtube.com/watch?v=eAK8uYtNTy4, 18:00
// put picture location in db
function about_card($id,
                    $name,
                    $description,
                    $age,
                    $dob,
                    $language,
                    $nationality,
                    $course,
                    $study_year,
                    $contribution_1,
                    $contribution_2,    
                    $picture) {

    $lower_name = strtolower($name);
    $contribution_1 = explode("|",$contribution_1);
    $contribution_2 = explode("|",$contribution_2);
    $element = 
        "<section class='profile-section'>
            <div class='profile-container'>
                <div class='split' id='$lower_name-picture'>
                    <img src='$picture' class='profile-picture' alt=''> 
                </div>
                
                <div class='split' id='profile-text-$id'>
                    <h2>I'm $name! Pleasure to Meet You</h2>
                    <h3>$description</h3>
                    <dl>
                        <dt>Details</dt>
                            <dd>Age: $age</dd>
                            <dd>Date of Birth: $dob</dd>
                            <dd>First Language: $language</dd>
                            <dd>Nationality: $nationality</dd>
                            <dd>Current Course: $course</dd>
                            <dd>Year of Study: $study_year</dd>
                        <dt>Contribution for Part 1:</dt>";
                            foreach ($contribution_1 as $c) {
                                $element .= "<dd>" . trim($c) . "</dd>";
                            }
                        
                            $element .= "<dt>Contribution for Part 2:</dt>";
                            foreach ($contribution_2 as $c) {
                                $element .= "<dd>" . trim($c) . "</dd>";
                            }
                    $element .= "</dl>
                </div>
            </div>
        </section>";
    
        echo $element;
}

?>