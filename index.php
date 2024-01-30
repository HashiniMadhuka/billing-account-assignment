<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $country = $_POST["country"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postal_code = $_POST["postalCode"];
    $province = $_POST["province"];
    $name_on_card = $_POST["nameOnCard"];
    $credit_card_number = $_POST["creditCardNo"];
    $expiration_date = $_POST["expirationDate"];
    $cvc = $_POST["cvc"];
{
    $query = "INSERT INTO payment(country, address, city, postal_code, province, name_on_card, credit_card_number, expiration_date, cvc) VALUES(' $country ',' $address',' $city','  $postal_code','  $province',' $name_on_card',' $credit_card_number ',' $expiration_date ',' $cvc ')";
    mysqli_query($con, $query);
    echo
    "<script> alert ('Data Inserted Successfully'); </script>";
}
}
?>


<html>
    <head>
        <title> Payement Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
    </head>
    <style media="screen">
        label {
            display:block;
        }
    </style>

    <body>
        <div class="p-3 d-flex justify-content-center align-items-center font-size">
            <div class="card p-4">
                <p class="fs-5 fw-medium main-text">Billing Account Information</p>
                <p class="fw-light">Your billing account is used to manage and view your invoices</p>
                <p class="fw-light">All transactions and monetary operations are managed by the payment platform Stripe</p>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="">
                    <label for="" class="form-check-label fw-light font-color">
                        Use my profile details for my billing account
                    </label>
                </div>
                <!-- country -->
                <form class="payment-form" action="" method="post">
                    <div class="mb-3">
                        <label for="country" class="form-label fw-medium">Country</label>
                        <select class="form-select select-width fw-light" name="country" required>
                            <option value="Canada"> Canada </option>
                            <option value="UK"> UK </option>
                            <option value="USA"> USA </option>
                            <option value="India"> India </option>
                            <option value="Sri Lanka"> Sri Lanka </option>
                        </select>
                    </div>
        
                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label fw-medium">Address</label>
                        <input type="text" name="address" required value="" class="form-control fw-light">
                    </div>
        
                    <!-- City -->
                    <div class="mb-3">
                        <label for="city" class="form-label fw-medium">City</label>
                        <input type="text" name="city" required value="" class="form-control fw-light">
                    </div>

                    <div style="width: 50%">
                        <div class="d-flex justify-content-between gap-3 mb-3">
                            <!-- Postal Code -->
                            <div>
                                <label for="postalCode" class="form-label fw-medium">Postal Code</label>
                                <input type="text" name="postalCode" placeholder="A1A 1A1" value="" class="form-control fw-light">
                            </div>
                
                            <!-- Province -->
                            <div>
                                <label for="province" class="form-label fw-medium">Province</label>
                                <select class="form-select fw-light" name="province" required>
                                    <option value="" selected hidden></option>
                                    <option value="Southern"> Southern </option>
                                    <option value="Northern"> Northern </option>
                                    <option value="North Western"> North Western </option>
                                    <option value="Western"> Western </option>
                                    <option value="North Central"> North Central </option>
                                    <option value="Central"> Central </option>
                                    <option value="Sabaragamuwa"> Sabaragamuwa </option>
                                    <option value="Uva"> Uva </option>
                                    <option value="North Central"> North Central </option>
                                </select>
                            </div>  
                        </div>
    
                        <p class="fw-medium my-3">Banking Information</p>
                        <p class="fw-light bank-text">We accept Visa, Mastercard, and American Express</p>
            
                        <!-- Name on Card -->
                        <div class="mb-3">
                            <label for="nameOnCard" class="form-label fw-medium">Name on Card</label>
                            <input type="text" name="nameOnCard" required value="" class="form-control fw-light">
                        </div>
            
                        <!-- Credit Card Number -->
                        <div class="mb-3">
                            <label for="creditCardNo" class="form-label fw-medium">Credit Card Number</label>
                            <input type="text" name="creditCardNo" placeholder="1234 1234 1234 1234" required value="" maxLength="16" class="form-control fw-light">
                        </div>
    
                        <div class="d-flex gap-3 mb-3">
                            <!-- Expiration Date -->
                            <div>
                                <label for="expirationDate" class="form-label fw-medium">Expiration Date</label>
                                <input type="date" name="expirationDate" required placeholder="MM / YY" value="" class="form-control fw-light">
                            </div>
                
                            <!-- CVC -->
                            <div>
                                <label for="cvc" class="form-label fw-medium">CVC ?</label>
                                <input type="text" name="cvc" required placeholder="CVC" maxLength="3" value="" class="form-control fw-light">
                            </div>
                        </div>
                    </div>
        
                    <button type="submit" onClick="validateForm()" name="submit" class="btn btn-primary rounded-pill mt-3 px-5 py-1 fw-semibold">REGISTER BILLING ACCOUNT</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>