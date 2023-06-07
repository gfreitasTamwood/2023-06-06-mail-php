<?php

class Page {

    public static function contactForm() {
        $contactHtml = '
        <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            </div>
            <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <select id="inputState" class="form-control" name="province">
                <option selected>Choose...</option>
                <option value="ontario">Ontario</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Postal Code</label>
                <input type="text" class="form-control" id="inputZip" name="postal">
            </div>
            </div>
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Check me out
                </label>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        ';

        return $contactHtml;
    }

    public static function pageHeader() {
        $pageHtml = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
        ';

        return $pageHtml;
    }

    public static function pageFooter() {
        $pageFooter = '
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        ';
        return $pageFooter;
    }
}