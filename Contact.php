<?php
    include 'header.php';
?>
<div class="contactContainer">
    <h1>contact us</h1>
    <div class="contactFields">
        <form action="#" method="POST">
            <div class="contactDetails">
                <input type="text" name="name" placeholder="Your Full Name" required><br>
                <input type="text" name="email" placeholder="Your Email" required><br>
                <input type="text" name="mobile" placeholder="Your Mobile" required><br>
                <textarea name="message" id="" placeholder="Mention your issue"></textarea><br>
                <input type="submit" value="Send Message">
            </div>
        </form>
        <div class="companyDetails">
            <div class="address">
                <i class="fa-solid fa-location-dot"></i>
                <h1>Address</h1>
                <p>Manickpur, Sankrail, Howrah 711309</p>
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <h1>Mail Us</h1>
                <p><a href="mailto:figgitech@gmail.com">support@taxlix.com</a></p>
            </div>
            <div class="contactNumber">
                <i class="fa-solid fa-phone"></i>
                <h1>Call Us</h1>
                <p><a href="tel:9088668829">+91 9088668829</a></p>
            </div>
        </div>
    </div>

</div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>