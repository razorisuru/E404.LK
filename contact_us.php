<!DOCTYPE html>
<html>

<?php include 'include/header.php' ?>

    <main class="page contact-us-page">
        <section class="clean-block clean-form dark" style="background: #212529;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p style="color: var(--bs-white);">මේක වැඩ නෑ හැබැයි තාම.</p>
                </div>
                <form style="background: #192530;">
                    <div class="mb-3"><label class="form-label" for="name" style="color: var(--bs-pink);">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                    <div class="mb-3"><label class="form-label" for="subject" style="color: var(--bs-pink);">Subject</label><input class="form-control" type="text" id="subject" name="subject"></div>
                    <div class="mb-3"><label class="form-label" for="email" style="color: var(--bs-pink);">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="mb-3"><label class="form-label" for="message" style="color: var(--bs-pink);">Message</label><textarea class="form-control" id="message" name="message"></textarea></div>
                    <div class="mb-3"><button class="btn btn-primary" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </main>

<?php include 'include/footer.php' ?>