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
                                <h2>Search Items by Category</h2>
								

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content"> 
							
							
							<form name ="form1" action="" method="post">
							<input type ="text" name="t1" class="form-control" placeholder="Enter Items Category  (Example:Book,Cd,Magazine,etc...)">
							<input type ="submit" name="submit1" value="Search " class="btn btn-default">
							</form>
							
							 
							
							  <p style="color:red;">Available Category : Books,Magazine,Cd,Newspaper,journals</p>
							
							<?php
							
							
								
							if (isset($_POST["submit1"]))
							{
								$res =mysqli_query($link,"select * from add_books where books_category  like('$_POST[t1]%')");
								
								
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>";echo "Items Image";echo "</th>";
							echo "<th>";echo "Items Title";echo "</th>";
							echo "<th>";echo "Items Author";echo "</th>";
							echo "<th>";echo "Items ID";echo "</th>";
							echo "<th>";echo "Items Category";echo "</th>";
							echo "<th>";echo "Items Year of Publication";echo "</th>";
							echo "<th>";echo "Items Description";echo "</th>";
							echo"</tr>";
							
							while ($row=mysqli_fetch_array($res)){
								echo"</tr>";
							echo "<td>"; ?> <img src="../librarian/<?php echo $row["books_image"];?>"height="150" width="150"><?php echo"</td>";
							echo "<td>";echo $row["books_title"];echo "</td>";
							echo "<td>";echo $row["books_author"];echo "</td>";
							echo "<td>";echo $row["books_id"];echo "</td>";
							echo "<td>";echo $row["books_category"];echo "</td>";
							echo "<td>";echo $row["books_year"];echo "</td>";
							echo "<td>";echo $row["books_describe"];echo "</td>";
							echo"</tr>";
							}	
							echo"</table>";
							}
							else
							{
							
							
							
							$res =mysqli_query($link,"select * from add_books");
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>";echo "Items Image";echo "</th>";
							echo "<th>";echo "Items Title";echo "</th>";
							echo "<th>";echo "Items Author";echo "</th>";
							echo "<th>";echo "Items ID";echo "</th>";
							echo "<th>";echo "Items Category";echo "</th>";
							echo "<th>";echo "Items Year of Publication";echo "</th>";
							echo "<th>";echo "Items Description";echo "</th>";
							echo"</tr>";
							
							while ($row=mysqli_fetch_array($res)){
								echo"</tr>";
							echo "<td>"; ?> <img src="../librarian/<?php echo $row["books_image"];?>"height="150" width="150"><?php echo"</td>";
							echo "<td>";echo $row["books_title"];echo "</td>";
							echo "<td>";echo $row["books_author"];echo "</td>";
							echo "<td>";echo $row["books_id"];echo "</td>";
							echo "<td>";echo $row["books_category"];echo "</td>";
							echo "<td>";echo $row["books_year"];echo "</td>";
							echo "<td>";echo $row["books_describe"];echo "</td>";
							echo"</tr>";
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