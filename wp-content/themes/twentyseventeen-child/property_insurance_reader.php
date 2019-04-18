<?php
 /*
Template Name: excel-reader-home
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

        function sheetData($sheet) {
            global $wpdb;
            $x = 4;
            while($x <= $sheet['numRows']) {
                $y=2;
                while($y <= $sheet['numCols']){
                    $countyName=$sheet['cells'][3][$y];
                    $state = $wpdb->get_row( "SELECT * FROM wp_states WHERE code = '".$countyName."'" );
                    if(null !== $state){
                        $stateId=$state->id;
                    }else{
                        $wpdb->insert( 
                               'wp_states', 
                               array( 
                                  'code' => $countyName, 
                                  'name' => $countyName, 
                               )
                            );
                        $stateId=$wpdb->insert_id;
                    }
                    $range=$sheet['cells'][$x][1];
                    $range=explode("-", $range);
                    $minRange=(int) str_replace(",",'', $range[0]);
                    if(!isset($range[1]))
                        $maxRange=-1;
                    else
                        $maxRange=(int) str_replace(",",'', $range[1]);

                    $priceRange = $wpdb->get_row( "SELECT * FROM wp_home_value_ranges WHERE min_price_range = '".$minRange."' and max_price_range = '".$maxRange."' " );
                    if($priceRange !== null){
                         $priceRangeId=$priceRange->id;
                    }else{
                        $wpdb->insert(
                               'wp_home_value_ranges',
                               array(
                                  'min_price_range' => $minRange,
                                  'max_price_range' => $maxRange,
                               )
                            );
                        $priceRangeId=$wpdb->insert_id;
                    } print_r($sheet['cells'][$x][$y]);exit;
                    $wpdb->insert(
                                'wp_home_value_range_states', 
                                array( 
                                   'state_id' => $stateId,
                                   'home_value_range_id' => $priceRangeId,
                                   'percentage'=> $sheet['cells'][$x][$y],
                                ) 
                        );   
                      
                       $y++;
                   
                }
                
                $x++;
            }
        }

            $nr_sheets = count($excel->sheets);       // gets the number of sheets
            // traverses the number of sheets and sets html table with each sheet data in $excel_data
            for($i=0; $i<1; $i++) {
               /* $range=$excel->sheets[$i]['cells'][11][1];
                    $range=explode("-", $range);
                     
                    $minRange=(int) str_replace(",",'', $range[0]);                    
                    print_r($minRange);exit;
                    if(!isset($range[1]))
                        $maxRange=-1;                
                    else
                        $maxRange=(int) str_replace(",",'', $range[1]);
                */
                sheetData($excel->sheets[$i]);
            }  
            print_r("Data Inserted please check");           
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