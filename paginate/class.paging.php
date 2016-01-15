<?php

class paginate
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
            
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="uploads/<?php echo $row['file_path'] ?>" alt="...">
                  <div class="caption">                    
                    <p>Uploaded by <?php echo $row['uploaded_by'] ?></p>
                    <p><a href="#" class="btn btn-primary glyphicon glyphicon-thumbs-up" role="button" title="Like this photo"></a> 
                    <a href="download.php?img=<?php echo $row['file_path'] ?>" class="btn btn-danger glyphicon glyphicon-download" role="button" title="Download this photo"></a></p>
                  </div>
                </div>
              </div>
            
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><tr><td colspan="3"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				
				echo "<a href='".$self."?page_no=".$previous."'>&laquo;</a>&nbsp;&nbsp;";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<strong><a href='".$self."?page_no=".$i."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
				}
				else
				{
					echo "<a href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<a href='".$self."?page_no=".$next."'>&raquo;</a>&nbsp;&nbsp;";
				
			}
			?></td></tr><?php
		}
	}
}


$db_host = "localhost";
$db_user = "test";
$db_pass = "";
$db_name = "gallery";

try
{
	$DB_con = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8",$db_user,$db_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// mysql_set_charset('utf8',$conn);
}
catch(PDOException $exception)
{
	echo $exception->getMessage();
}


$paginate = new paginate($DB_con);

?>
