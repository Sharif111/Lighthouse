<?php
$con=mysqli_connect('localhost','root','','dbphpserverside')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'id',
    1   =>  'name',
    2   =>  'class',
    3   =>  'day',
	4   =>  'salary',
	5   =>  'location',
);  //create column like table in database

$sql ="SELECT * FROM tbperson";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM tbperson WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (id Like '".$request['search']['value']."%' ";
    $sql.=" OR name Like '".$request['search']['value']."%' ";
	$sql.=" OR class Like '".$request['search']['value']."%' ";
	$sql.=" OR day Like '".$request['search']['value']."%' ";
	$sql.=" OR salary Like '".$request['search']['value']."%' ";
	$sql.=" OR location Like '".$request['search']['value']."%' ";
  
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; //id
    $subdata[]=$row[1]; //name
	$subdata[]=$row[2]; //class
	$subdata[]=$row[3]; //day
    $subdata[]=$row[4]; //salary
	$subdata[]=$row[5]; //location
                                  //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Apply</button>
	            </button>'; 
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
