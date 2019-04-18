<?php
 /*
Template Name: excel-reader
*/
ini_set("display_errors",1);
include 'excel_reader.php';

if(isset($_POST["Import"])){  
    $filename=$_FILES["file"]["tmp_name"];    
 
      if($_FILES["file"]["size"] > 0)
      {
        $file = fopen($filename, "r");      
        // creates an object instance of the class, and read the excel file data
        $excel = new PhpExcelReader;
        $excel->read($filename);

         function sheetData($sheet,$state_id) {
            global $wpdb;
            $x = 4;
            while($x <= $sheet['numRows']) {
               $countyCityName=$sheet['cells'][$x][1];                     
               $county=explode(",",$countyCityName);            
               $wpdb->insert(
                        'wp_city_state_property_texes', 
                        array( 
                           'state_id' => $state_id,
                           'city_name' => $county[0],
                           'average_house_value'=> $sheet['cells'][$x][2],
                           'average_real_estate_taxes'=> $sheet['cells'][$x][3],
                           'average_percentage'=> $sheet['cells'][$x][4],
                        ) 
               );            
               $x++;
            }
         }

          $nr_sheets = count($excel->sheets);       // gets the number of sheets
          $excel_data = '';              // to store the the html tables with data of each sheet

          // traverses the number of sheets and sets html table with each sheet data in $excel_data
          for($i=0; $i<$nr_sheets; $i++) {
            if($excel->boundsheets[$i]['name'] != 'States' && $excel->boundsheets[$i]['name'] != 'Sheet'.$i){
               $state = $wpdb->get_row( "SELECT * FROM wp_states WHERE code = '".$excel->boundsheets[$i]['name']."'" );               
               if(null !== $state){
                  sheetData($excel->sheets[$i],$state->state_id);
               }else{                     
                     $countyCityName=$excel->sheets[$i]['cells'][4][1];                     
                     $county=explode(",",$countyCityName);
                     //print_r($county[1]);exit;   
                     global $wpdb;
                     $wpdb->insert( 
                           'wp_states', 
                           array( 
                              'code' => $excel->boundsheets[$i]['name'], 
                              'name' => $county[1], 
                           )
                        );
                  sheetData($excel->sheets[$i],$wpdb->insert_id);
               }
            }
          }          
          echo $excel_data;
           fclose($file); 
     }
  }  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="wrap">
        <div class="container">
            <div class="row">

                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Form Name</legend>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>            
        </div>
    </div>
</body>

</html>