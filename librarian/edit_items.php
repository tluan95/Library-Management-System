<?php
include "connection.php";
include "header.php";
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Utar Library System</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
                            <div class="x_title">
                                <h2>Diplay and Search Items</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content"> 
							
							
							<form name ="form1" action="" method="post">
							<input type ="text" name="t1" class="form-control" placeholder="Enter Item Title">
							<input type ="submit" name="submit1" value="search item" class="btn btn-default">
							</form>
							
							 
							
							
							
							<?php
							
							if (isset($_POST["submit1"]))
							{
								$res =mysqli_query($link,"select * from add_books where books_title  like('$_POST[t1]%')");
								
								
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>";echo "Items  Image";echo "</th>";
							echo "<th>";echo "Items  Title";echo "</th>";
							echo "<th>";echo "Items  Author";echo "</th>";
							echo "<th>";echo "Items  ID";echo "</th>";
							echo "<th>";echo "Items  Category";echo "</th>";
							echo "<th>";echo "Items  Year of Publication";echo "</th>";
							echo "<th>";echo "Items  Description";echo "</th>";
							echo"</tr>";
							
							while ($row=mysqli_fetch_array($res)){
							echo"</tr><form action=update.php method=post>";
								
							echo "<td>"; ?> <img src="<?php echo $row["books_image"];?>"height="150" width="150"><?php echo"</td>";
							echo "<td><input type=text name=title size=10 value='". $row['books_title']."'> </td>";
							echo "<td><input type=text name=author value='". $row['books_author']."' </td>";
							echo "<td><input type=text name=ids size=9 value='". $row['books_id']."' </td>";
							echo "<td><input type=text name=cat value='". $row['books_category']."' </td>";
							echo "<td><input type=text name=year value='". $row['books_year']."' </td>";
							echo "<td><input type=text name=desc value='". $row['books_describe']."' </td>";
							echo "<input type=hidden name=id value='". $row['id']."' >";
							
							echo "<td><input type=submit>";
							echo"</form></tr>";
							}	
							echo"</table>";
							}
							else
							{
							
							
							
							$res =mysqli_query($link,"select * from add_books");
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>";echo "Items  Image";echo "</th>";
							echo "<th>";echo "Items  Title";echo "</th>";
							echo "<th>";echo "Items  Author";echo "</th>";
							echo "<th>";echo "Items  ID";echo "</th>";
							echo "<th>";echo "Items  Category";echo "</th>";
							echo "<th>";echo "Items  Year of Publication";echo "</th>";
							echo "<th>";echo "Items  Description";echo "</th>";
							echo"</tr>";
							
							while ($row=mysqli_fetch_array($res)){
								
								echo"</tr><form action=update.php method=post>";
								
							echo "<td>"; ?> <img src="<?php echo $row["books_image"];?>"height="150" width="150"><?php echo"</td>";
							echo "<td><input type=text name=title size=10 value='". $row['books_title']."'> </td>";
							echo "<td><input type=text name=author value='". $row['books_author']."' </td>";
							echo "<td><input type=text name=ids size=9 value='". $row['books_id']."' </td>";
							echo "<td><input type=text name=cat value='". $row['books_category']."' </td>";
							echo "<td><input type=text name=year value='". $row['books_year']."' </td>";
							echo "<td><input type=text name=desc value='". $row['books_describe']."' </td>";
							echo "<input type=hidden name=id value='". $row['id']."' >";
							
							echo "<td><input type=submit>";
							echo"</form></tr>";
							}	
							echo"</table>";
							}
							?>
                           
							  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "footer.php";
?>