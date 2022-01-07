<?php
include 'header.php';
//sanitizing 
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$fn = $sanitizer['name'];
$em = $sanitizer['email'];
$amt = $sanitizer['amount'];


$_SESSION['name']= $fn; 
$_SESSION['email']= $em; 
$_SESSION['amount']= $amt; 

if(empty($fn)){
    echo "<script>alert('Kindly fill in your name'); window.location='paystack'</script>";
}elseif(empty($amt) ){
    echo "<script>alert('Kindly fill in amount to donate'); window.location='paystack'</script>";
}
if(empty($em)){
    $em="sectariat@ccpcfutath.com.ng";
}
else{

}



?>



<!--====== PAGE TITLE PART START ======-->
         
<div class="page-title-area" style="background-image: url('img/nurse.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center" style="margin-top: 100px;">
                        <h2 class="title">DONATION</h2>
                    </div> <!-- page title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 

    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== Start checkout-area ======-->
    <section class="checkout-area pt-100 pb-30">
        <div class="container">
            <div class="user-actions mb-40">
                <p>Donate Now -- <a href="#">Kindly help us make FUTA Teaching Hospital a reality by putting in your support.</a></p>
            </div>
            <div>
            <div class="payment-box mt-30">
                        <div class="payment-method" id="dBank">
                            <div class="billing-details">
                                <h3 class="title">Total Due : <?php echo number_format($amt) ?></h3>
                            </div>
                            <form >
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                <button type="button" onclick="payWithPaystack()" class="main-btn" > Pay Now (<?php echo number_format($amt) ?>)</button> 
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <script>
        function payWithPaystack(){
            //const api ="pk_test_1313484eed351dc994073bcdeda11fe66b150e89";
            const api = "pk_live_cde57b33b33b5fbabec6d34e3af89123099a8fcd";
            var handler = PaystackPop.setup({
            key: api,
            email: '<?php echo $em ?>',
            amount: <?php echo $amt * 100; ?>,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            firstname: '<?php echo $fn.' '.$ln; ?>',
            // label: "Optional stding that replaces customer email"
            metadata: {
                custom_fields: [
                    {
                        display_name: "<?php echo $fn.' '.$ln;  ?>",
                        variable_name: "CCPC FUTATH DONATION",
                        value: "+2348000300000"
                    }
                ]
            },
            callback: function(response){
                //alert('success. tdansaction ref is ' + response.reference);
                const referenced = response.reference;
                window.location.href= 'success.php?success='+referenced;
            },
            onClose: function(){
                alert('window closed');
            }
            });
            handler.openIframe();
        }
        </script>



    <!--====== ABOUT EXPERIENCE PART START ======-->
         
    

    <!--====== ABOUT EXPERIENCE PART ENDS ======-->

    <?php include 'footer.php' ?>