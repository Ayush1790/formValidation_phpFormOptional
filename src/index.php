<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validations</title>
</head>

<body class='text-primary'>
    <div class="wrapper col-12 ">
        <div class='header bg-info'>
            <h1 class='text-center text-white'>Order/Delivery Tracking</h1>
            <h3 class='text-center text-white'>Trace Your Order</h3>
        </div>

        <form action="validate.php" method="post">
            <!-- personal info -->
            <div>
                <h4 class='text-secondary mt-5 ml-5'>Personal Information</h4>
                <hr>
                <div class="form-group col-6">
                    <!-- name -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        <label >Name</label>
                        <input type="text" class="form-control border border-black text-primary"
                         name='name' placeholder="enter your name">
                    </div>
                    <!-- e-mail -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control border border-black text-primary"
                         name='email' placeholder='enter email'>
                    </div>
                    <!-- contact-number -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        <label> Number</label>
                        <input type="text" class="form-control border border-black text-primary"
                         name='contact' placeholder="As Per Your Order">
                    </div>
                </div>
            </div>

            <!-- order info -->
            <div>
                <h4 class='text-secondary mt-5 ml-5'>Order Information</h4>
                <hr>
                <div class="form-group col-6">
                    <!-- order id -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        Order ID :
                        <input type="text" class="form-control border border-black text-primary" name='oid'>
                    </div>
                    <!-- address -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        Address :
                        <input type="text" class="form-control border border-black text-primary" name='address'>
                    </div>
                    <!-- contact-number -->
                    <div class="form-group mx-lg-3 mb-2 row">
                        <label>Date</label>
                        <input type="date" class="form-control border border-black text-primary" name='date'>
                    </div>
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-success m-5">Submit</button>
    </form>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</html>
