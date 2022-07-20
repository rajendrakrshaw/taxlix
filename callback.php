<?php
    include 'header.php';
?>
<div class="callBackContainer">
    <h1>request a callback</h1>
    <form action="#" method="POST">
        <div class="callbackDetails">
            <input type="text" name="name" placeholder="Your Full Name" required><br>
            <input type="text" name="email" placeholder="Your Email" required><br>
            <input type="text" name="mobile" placeholder="Your Mobile" required><br>
            <input type="submit" value="Request a Callback">
        </div>
    </form>
</div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>