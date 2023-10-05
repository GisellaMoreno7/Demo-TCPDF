<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Librerias/bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <script type="javascript/text" src="Librerias/bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <title>Generador Currículum</title>
</head>

<body>
    <div class="container-fluid">
        <form id="form" name="form" method="POST" action="Accion/action.php" class="row g-3">
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" pattern="^[a-zA-Z]+$">
            </div>
            <div class="col-md-6">
                <label for="validationServer03" class="form-label">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationServer04" class="form-label">State</label>
                <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
                <div id="validationServer04Feedback" class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationServer05" class="form-label">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                <div id="validationServer05Feedback" class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
    </div>
    </div>
    <div class="col-md-4">
        <label for="validationServer02" class="form-label">Apellido</label>
        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationServerUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationServer03" class="form-label">City</label>
        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
        <div id="validationServer03Feedback" class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationServer04" class="form-label">State</label>
        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
        </select>
        <div id="validationServer04Feedback" class="invalid-feedback">
            Please select a valid state.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationServer05" class="form-label">Zip</label>
        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
        <div id="validationServer05Feedback" class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
    </form>
    </div>

</body>

</html>