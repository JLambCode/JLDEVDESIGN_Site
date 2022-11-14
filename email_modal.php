<div id="modalDialog" class="modal">
    <div class="modal-content animate-top">
        <div class="modal-header">
            <h5 class="modal-title">Contact Me</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
            </button>
        </div>
        <form method="post" id="contactForm">
            <div class="modal-body">
                <div class="response"></div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                        required="">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                        required="">
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Your message here"
                        rows="6"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>