<footer class="Foot_Con">
     <h2>Contact</h2>
    <form id="contactForm" class="contact-form" method="post" action="#" novalidate>
            <div class="form-row">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Jouw naam">
            </div>

            <div class="form-row">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required placeholder="name@example.com">
            </div>

            <div class="form-row">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Theme">
            </div>

            <div class="form-row">
                <label for="message">Letter</label>
                <textarea id="message" name="message" rows="6" required placeholder="Add message here"></textarea>
            </div>

            <div class="form-row form-actions">
                <button type="submit" id="contactSubmit">Send</button>
            </div>

            <div id="formNotice" class="form-notice" aria-live="polite"></div>
            </form>
</footer>