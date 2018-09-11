<?php
 include "header.php";
?>
<div class="hero">
    <img src="images/hero-contact.jpg">
</div>
<main role="main">
    <section id="contact">
        <h2>Contact me</h2>

        <p>
            Feel free to contact me! Send an email or use this form to get in contact. I will reply
            back as soon as possible, or if you need to get in touch with me right away you can always use
            the phone.
        </p>

        <form action="">
            <div class="contact-test">
                <!--<label for="forname">* Name:</label>-->
                <input type="text" name="name" placeholder="Your Name (required)">
            </div>
            <div class="contact-test">
            <!--<label for="lastname">* lastname:</label>-->
            <input type="text" name="lastname"placeholder="Your Lastname (required)">
            </div>
            <div class="contact-test">
            <!--<label for="email">* lastname:</label>-->
            <input type="email" name="email"placeholder="Your Email (required)">
            </div>
            <textarea></textarea>
        </form>
    </section>
</main>
<?php
 include "footer.php";
?>