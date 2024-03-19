<?php session_start();

extract($_POST);


//recieving the data


// Include Requests only if not already defined
if (class_exists('Requests') === false)
{
    require_once __DIR__.'/libs/Requests-1.8.0/library/Requests.php';
}

try
{
    Requests::register_autoloader();

    if (version_compare(Requests::VERSION, '1.6.0') === -1)
    {
        throw new Exception('Requests class found but did not match');
    }
}
catch (\Exception $e)
{
    throw new Exception('Requests class found but did not match');
}

spl_autoload_register(function ($class)
{
    // project-specific namespace prefix
    $prefix = 'Razorpay\Api';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0)
    {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    //
    // replace the namespace prefix with the base directory,
    // replace namespace separators with directory separators
    // in the relative class name, append with .php
    //
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file))
    {
        require $file;
    }
});



use Razorpay\Api\Api;
$keyId = 'rzp_test_BGYCRg4LW1EMUL';
$secretKey = 'FyQN36PJtCmxdHGUVLpD6MHA';


$api=new Api($keyId,$secretKey);

$order=$api->order->create(array(
    'amount'=>$amount*100,
    'payment_capture'=>1,
    'currency'=>'INR',
));


?>

<style>
.razorpay-payment-button{
    display: none;
}
</style>

<!-- redirecting to bookings-save.php  -->
<form action="../../event/success.php" method="post">

    <!-- transfer booking data to save into bookings -->
    <input type="hidden" name='course_name' value="<?php echo $course_name; ?>">
    <input type="hidden" name='price' value="<?php echo $amount; ?>">
    <input type="hidden" name="cust_name" value=<?php echo $cust_name;?>>
    
    <script src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyId ;?>"
    data-amount="<?php echo $order->amount;?>"
    data-currency="INR"
    data-buttontext="Pay"
    data-name="Park Here"
    data-description="Book your parking at your peace."
    data-image=""
   
    data-theme.color="#black"
    ></script>
</form>


<script>document.querySelector(".razorpay-payment-button").click()</script>
