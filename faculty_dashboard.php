<?php include("navbar.php"); ?>

<div class="container mt-5">
    <form action="marks_fill.php" method="post" enctype="multipart/form-data">
       

        <table class="table table-bordered" style="text-align: center;">
            <tr>
                <td>RollNo</td>
                <td class="form-group"> <input class="form-control" type="number" name="roll_no"> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>Subjects</td>
                <td> Max Number</td>
                <td> Min Number</td>
                <td>Obtain Number</td>
            </tr>
            <tr>
                <td> <input  class="form-control" type="text" name="subject[]" value="Mathematics" readonly /></td>
                <td><input  class="form-control" type="number" name="max_number[]" value ="100" readonly> </td>
                <td><input  class="form-control" type="number" name="min_number[]" value ="33" readonly> </td>
                <td class="form-group"> <input class="form-control" type="number" name="obtain_number[]"> </td>
            </tr>
            <tr>
                <td> <input  class="form-control" type="text" name="subject[]" value="Physics" readonly /></td>
                <td><input   class="form-control" type="number" name="max_number[]" value ="100" readonly> </td>
                <td><input  class="form-control" type="number" name="min_number[]" value ="33" readonly> </td>
                <td> <input class="form-control" type="number" name="obtain_number[]"> </td>
            </tr>
            <tr>
                <td> <input class="form-control" type="text" name="subject[]" value="Chemistry" readonly /></td>
                <td><input  class="form-control" type="number" name="max_number[]" value ="100" readonly> </td>
                <td><input class="form-control" type="number" name="min_number[]" value ="33" readonly> </td>
                <td> <input class="form-control" type="number" name="obtain_number[]"> </td>
            </tr>
            <tr>
                <td> <input class="form-control" type="text" name="subject[]" value="Hindi" readonly /></td>
                <td><input class="form-control" type="number" name="max_number[]" value ="100" readonly> </td>
                <td><input class="form-control"  type="number" name="min_number[]" value ="33" readonly> </td>
                <td> <input class="form-control" type="number" name="obtain_number[]"> </td>
            </tr>
            <tr>
                <td> <input class="form-control" type="text" name="subject[]" value="English" readonly /></td>
                <td><input class="form-control" type="number" name="max_number[]" value ="100" readonly> </td>
                <td><input class="form-control"  type="number" name="min_number[]" value ="33" readonly> </td>
                <td> <input class="form-control" type="number" name="obtain_number[]"> </td>
            </tr>
        </table>
        <input type="submit" class="btn btn-success ml-5" >
    </form>
</div>