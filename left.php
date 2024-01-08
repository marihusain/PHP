<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

                <!-- BEGIN MAIN NAVIGATION -->
                <ul id="menu" class="unstyled accordion collapse in">
                    <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php'){echo 'active'; }else { echo ''; } ?>">
                    <a href="dashboard.php"><i class="icon-table icon-large"></i>Dashboard</a></li>
                    
                    <li>
                    <a href=""><i class="icon-table icon-large"></i>Page</a>
                    </li>
                    
               <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'reports_pages.php'){echo 'active'; }else { echo ''; } ?>">
                                    <ul>
                    <li><a href="search_asc.php"><i class="icon-table icon-large"></i>Search ASC</a></li>
                    </ul>
                     <ul>
                    <li><a href="search_student.php"><i class="icon-table icon-large"></i>Search Student</a></li>
                    </ul>
                     <ul>
                    <li><a href="add_cordinator.php"><i class="icon-table icon-large"></i>Add Cordinator</a></li>
                    </ul>
					<ul>
                    <li><a href="reports_cordinator.php"><i class="icon-table icon-large"></i>Show Cordinators</a></li>
                    </ul>
<ul>
                    </ul>
                     <ul>
                    <li><a href="newsupdate.php"><i class="icon-table icon-large"></i>News & Updates</a></li>
                    </ul>
                    <ul>
                    <li><a href="edit_newsupdate.php"><i class="icon-table icon-large"></i>Delete News & Updates</a></li>
                    </ul>
                    </li>      
                    
                    <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'reports_asc.php'){echo 'active'; }else { echo ''; } ?>"><a href="reports_asc.php"><i class="icon-table icon-large"></i>ASC Authorize Study Center</a><ul>
                    <li><a href="add_asc.php"><i class="icon-table icon-large"></i>Add New ASC</a></li>
                    </ul></li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'reports_students.php'){echo 'active'; }else { echo ''; } ?>"><a href="reports_students.php"><i class="icon-table icon-large"></i>Student</a></li>
                    <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'reports_courses.php'){echo 'active'; }else { echo ''; } ?>"><a href="reports_courses.php"><i class="icon-table icon-large"></i>Courses</a><ul>
                    <li><a href="add_course.php"><i class="icon-table icon-large"></i>Add New Course</a></li>
                    </ul>
					
					<ul>
                    <li><a href="add_result.php"><i class="icon-table icon-large"></i>Add Result</a></li>
                    </ul>
					<ul>
                    <li><a href="show_result.php"><i class="icon-table icon-large"></i>Show Result</a></li>
                    </ul>                   
                    <li><a href="exam_details.php"><i class="icon-table icon-large"></i>Student Exam Details</a><ul>
					
                    <li ><a href="change_password.php"><i class="icon-table icon-large"></i>Change Password</a></li>
                   
                    </ul></li>
                        <li><a><i class="icon-table icon-large"></i>Enquiry</a>
                            <ul>
                                <li><a href="enquiry_franchise.php"><i class="icon-table icon-large"></i>Franchise</a></li>
                                <li><a href="enquiry_student.php"><i class="icon-table icon-large"></i>Student</a></li>
                            </ul>
                        </li>
                    <li><a><i class="icon-table icon-large"></i>Support</a><ul>
                    <li><a href="contact_asc.php"><i class="icon-table icon-large"></i>Contact ASC</a></li>
                    <li><a href="http://springstrategies.in" target="_blank"><i class="icon-table icon-large"></i>Contact SPRING Team</a></li>
                    </ul></li>                     
                                                                                  
                   
                <!-- END MAIN NAVIGATION -->


</body>
</html>
