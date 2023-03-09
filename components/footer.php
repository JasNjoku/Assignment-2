<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer p-3 mt-4 text-center bg-dark text-light">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="select">Select:</label>
                            <select class="form-control" id="select" name="select" required>
                                <option value="">Please select an option</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="checkbox">Checkbox:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox" required>
                                <label class="form-check-label" for="checkbox">I agree to the terms and
                                    conditions</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>