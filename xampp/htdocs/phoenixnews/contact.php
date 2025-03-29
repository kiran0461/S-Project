<?php
require_once "header.php";
?>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-success">Send</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56930.48777993366!2d87.88160094866083!3d26.898560070112364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5c3933be14d23%3A0x90060622ff0776f8!2sIlam%2057300!5e0!3m2!1sen!2snp!4v1693324045665!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div >
</div>

    <?php
    require_once "footer.php";
    ?> 