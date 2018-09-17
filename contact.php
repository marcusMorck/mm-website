<?php
 include "header.php";
?>
<div class="hero">
    <img src="images/hero-contact.jpg" />
    <div class="overlay">
        <div class="overlay-title"><h2>Contact</h2></div>
        <div class="overlay-phone">Telephone: +46 703960135</div>
        <div class="overlay-email">Email: marcus.morck@gmail.com</div>
    </div>
</div>
<main role="main">
    <section id="contact">
        <p>Email: marcus.morck@gmail.com</p>
        <p>
        <h2>Contact me</h2>

        <p>
            Feel free to contact me! Send an email or use this form to get in contact. I will reply
            back as soon as possible, or if you need to get in touch with me right away you can always use
            the phone.
        </p>

        <form action="">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name (required)">
                <input type="email" name="email"placeholder="Your Email (required)">
            </div>   
            <div class="form-group">
                <input type="text" name="subject"placeholder="Subject (required)" class="subject">
            </div>
            <div class="form-group">
                <textarea placeholder="Your Message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send">
            </div>
        </form>
    </section>
</main>
<?php
 include "footer.php";
?>