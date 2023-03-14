<?php
include_once "template/header.php";
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Text Field</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="text" name="text" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Text Field</label>
        <div class="col-8">
            <input id="text2" name="text2" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Text Field</label>
        <div class="col-8">
            <input id="text1" name="text1" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Select</label>
        <div class="col-8">
            <select id="select" name="select" class="custom-select">
                <option value="rabbit">Rabbit</option>
                <option value="duck">Duck</option>
                <option value="fish">Fish</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Text Field</label>
        <div class="col-8">
            <input id="text2" name="text2" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


<?php
include_once "template/footer.php";
?>