<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Include bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">

                <?php foreach ($info['results'] as $personaje) { ?>
                    <div class="col col-12 col-md-3 ">
                        <div class="card mt-2" >
                            <img class="card-img-top" src="<?= $personaje['image'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $personaje['name'] ?></h5>
                                <p class="card-text">
                                    <span><strong>Género:</strong><?php
                                     if($personaje['gender'] == "Male"){ echo "👦";} else { echo "👧";} ?></span>
                                </p>
                                <p class="card-text">
                                    <span><strong>Origen:</strong> <?= $personaje['origin']['name'] ?></span>

                                </p>
                            </div>
                        </div>
                        
                    </div>
                <?php } ?>
                    

                    
                    
                    <!-- Add other card margin between card 1 -->
                    

                </div>
            </div>
        </div>

        <!-- Button previous and next -->
        <div class="row mt-3">
            <div class="col col-12 col-md-6">
                <form action="" method="post">
                <input type="hidden" name="prev" value="<?php if(isset($info['info']['prev'])){ echo $info['info']['prev']; }else{ echo "#"; } ?>">
                <button name="submitPrev" type="submit"class="btn btn-primary">Previous</button> 
                </form>
            </div>
            <div class="col col-12 col-md-6 text-right">
                <form action="" method="post">                
                    <input type="hidden"  name="next" value="<?php if(isset($info['info']['next'])){ echo $info['info']['next']; }else{ echo "#"; } ?>">
                <button name="submitNext" class="btn btn-primary" type="submit" >Next</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Include bootstrap scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>