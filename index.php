<?php
include("getRequest.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="banner row text-center">
        
        <div class="col-md-5">
            <div class="left-side">
                <div class="logo">
                    <img src="./assets/img/logo.png" alt="Flight Template">
                </div>
                <div class="tabs-content">
                    <h4>Choose Your Direction with US</h4>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="submit-form">
                        <h4>Add new <em>fly</em>:</h4>
                        <form id="form-submit" action="postRequest.php" method="post">
                            <div class="row">
                            <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">Name Company</label>
                                        <input name="name" type="text" class="form-control date"  placeholder="Write a name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="country">Country</label>
                                        <input name="country" type="text" class="form-control date"  placeholder="Write a country" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">Slogan</label>
                                        <input name="slogan" type="text" class="form-control date"  placeholder="Write a slogan" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">Directions</label>
                                        <input name="head_quaters" type="text" class="form-control date"  placeholder="Write directions" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">website</label>
                                        <input name="website" type="text" class="form-control date"  placeholder="www.example.com" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">year founded</label>
                                        <input name="established" type="text" class="form-control date"  placeholder="year" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label for="departure">Logo</label>
                                        <input class="form-control date" type="file" name="logo"> 
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Submit</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="container py-5">
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4">Airline Companies</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    <?php
                    if (is_array($fetchData)) {
                    
                        foreach ($fetchData as $key => $data) {
                    ?>
                            <li class="list-group-item">
                                <!-- Custom content-->
                                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                    <div class="media-body order-2 order-lg-1">
                                        <h5 class="mt-0 font-weight-bold mb-2"><?php echo $data['name'] ?? ''; ?></h5>
                                        <p class="font-italic text-muted mb-0 small"><?php echo $data['head_quaters'] ?? ''; ?></p>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">Slogan <span class="slogan"><?php echo $data['slogan'] ?? ''; ?></span></h6>
                                        <a class="link" href="https://<?php echo $data['website'] ?? ''; ?>"><?php echo $data['website'] ?? ''; ?></a>
                                        </div>
                                    </div><img src="<?php echo $data['logo'] ?? ''; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                                </div> <!-- End -->
                            </li> <!-- End -->
                        <?php
                      
                        }
                    } else { ?>
                        <pre><?php echo $fetchData; ?></pre>
                    <?php } ?>
                </ul> <!-- End -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>