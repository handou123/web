<?php
include "config.php";

/*$pageSize=4;
$page=$_GET["page"];

$pageStar=($page-1)*$pageSize;*///每次开始的页数
$txt=$_GET["txt"];
/*echo $txt;
echo $page;*/
if( $txt=="全部内容" )
{
	$sql="SELECT * FROM u_article";
	/*$sqlTotal="SELECT * FROM u_article";*/
}
else
{
	$sql="SELECT * FROM u_article WHERE `column`='$txt'";
	/*$sqlTotal="SELECT * FROM u_article WHERE `column`='$txt'";*/
}
/*$resultToltal=$conn->query($sqlTotal);
$pageTotal=$resultToltal->num_rows;//总条数
$pageNum=ceil($pageTotal/$pageSize);//总页数
echo $pageNum;
echo $pageTotal;*/
$result=$conn->query($sql);
if( $result->num_rows>0 )
{
	while($row=$result->fetch_assoc())
	{
?>
<a href="content.php?id=<?php echo $row['id'];?>" class="col-md-3"><img src="<?php echo $row['thumb'];?>" class="img-thumbnail "></a>
<?php
	}
}
else
{
	echo "没有您选择的课程！";
}

?>





