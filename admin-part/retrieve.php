<!DOCTYPE html>
<html>
<head>
    <title>
        ShakeIt
    </title>
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery-2.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">

    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/bootstrap-social.css" rel="stylesheet" >
</head>
<body>
<div class="main">	
    <section id="about" class="section clearfix" style="
    padding-top: 0px">
        <div class="container">
            <div class="hotel-title">
                <h4>TOP POPULAR DESTINATIONS</h4>
            </div><!-- end hotel-title -->

            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Create</a>
                    <a href="../index.php" class="btn btn-primary">Back</a>
                </p>
                <?php
                    $db = mysqli_connect("localhost","root","","web");
                    $query = "SELECT * FROM products ORDER BY id";
                    $result = $db->query($query);
                    $num = $result->num_rows;
                    $str = "../";
                    for ($i=0;$i<$num;$i++){
                        $row = $result->fetch_assoc();?> 
                    <div class="mini-desti row">
                        <div class="col-md-4">
                            <img src=<?php echo $str.$row["image"]?> alt="" class="img-responsive" style="width:150px;height:100px">
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6><?= $row["name"]?></h6>
                                    <span class="rating">
                                        <?php 
                                        if( $row["star"]==5){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php
                                        }?>
                                        <?php if( $row["star"]==4.5){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        <?php
                                        }?>
                                        <?php if( $row["star"]==4){?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php
                                        }?>        
                                    </span><!-- end rating -->
                                </div>
                                <div class="pull-right">
                                    <h6><?= $row["price"]?></h6>
                                </div>  
                                <div class="clearfix"></div>   
                                <div class="mini-desti-desc">
                                    <p><?= $row["description"]?></p>
                                </div>
                            </div><!-- end title -->  
                        </div><!-- end col -->
                        <div class="col-md-2">
                                <a class="btn btn-success" href="update.php?id=<?=$row['id']?>" >Update</a>
                                <a class="btn btn-danger" href="delete.php?id=<?= $row['id']?>"" >Delete</a>
                            </div>
                    </div><!-- end mini-desti -->
                    <?php
                    }
                     ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->  
</div>
<script src="../js/bootstrap.min.js"></script>

    <script src="../js/jquery.easing.min.js"></script> 
    <script src="../js/jquery.scrollTo.js"></script>
    <script src="../js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.js"></script>
</body>
</html>