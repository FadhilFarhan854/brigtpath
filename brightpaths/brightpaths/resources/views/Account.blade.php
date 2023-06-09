<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th{
        padding-right: 15px;
        padding-left: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #16a085;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #16a085;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>

    <h1>Aproval</h1>
    <hr>
<?php  

$server="localhost";
$username="root";
$pass="";
$dbname="brightpaths";


$conn = mysqli_connect($server, $username, $pass, $dbname);
$query = "SELECT * from account";


$hasil = mysqli_query($conn, $query);

if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}


?>
    <table>
        <tr id="header">
            <th>id</th>
            <th>nama </th>
            <th>email</th>
            <th>status</th>
            
        </tr>
        <?php 
        foreach($hasil as $value){
            $id = $value['id'];
			$nama= $value['nama'];
			$email = $value['email'];
            $status = $value['status'];
            
        ?>
        
        <tr>
				<td name = "id">
					<?php
					echo "$id";
					?>
				</td>
				<td name = "nama">
					<?php
					echo "$nama";
					?>
				</td>
			    <td name ="email">
					<?php
					echo "$email";
					?>
				</td>
				<td name="status">
					<?php
					echo "$status";
					?>
				</td>


			</tr>
        <?php 
        }
    ?>  
    
    </table>
    <form action="" method="Get">
        <input type="text" name ="ids" label ="id">
        <input type="submit" name = "change_stat" value="Change stat">
       
    </form>
    <?php 
    if (isset($_GET['change_stat'])){
    $ids = $_GET['ids'];
    $query2 = "UPDATE Account SET `status` = 'admin' where id =$ids;";
    
    $result = mysqli_query($conn, "Select * From account WHERE id = '$ids'");
    $row = mysqli_fetch_assoc($result);
    $idss = $row["id"];
    $nama = $row["nama"];
    $email = $row["email"];
    $stat = $row["status"];
    $query3 = "INSERT  INTO `admin`(`id`,`nama`,`email`, `status`) VALUES ($ids, '$nama', '$email', '$stat')";
    $tambah = mysqli_query($conn, $query2);
    $hapus = mysqli_query($conn, $query3);
    
    
}
    ?>


</body>

</html>