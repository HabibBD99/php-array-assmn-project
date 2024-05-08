<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    *{
      margin: <?php echo 0; ?>;
      padding: <?php echo 0; ?>;
    }
    table{
        margin: <?php echo "60px auto" ?>;
    }
    table,tr,td{
         text-align: <?php echo "center" ?>;
    }
   .Image{
       height: <?php echo "150px" ?>;
       width:  <?php echo "220px" ?>;
    }
 @media only screen and (max-width:780px){
    .Image{
        height: <?php echo "100px" ?>;
        width: <?php echo "150px" ?>;
    }

}

</style>
</head>
<body>

<table border="1" width="880" align="center">
    <tr>
        <th>SL NO</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    <?php foreach($products as $product) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['description']; ?></td>
            <td><img src="<?php echo $product['image']; ?>" class="Image"></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>





