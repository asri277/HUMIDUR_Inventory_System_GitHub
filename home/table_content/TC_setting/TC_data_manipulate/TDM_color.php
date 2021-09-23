<!-- Update Side Nav -->
<form action="TC_data_manipulate/data_checked.php" hidden id="mySideEditNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideEditNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Select ID: </label>
    <input id="ID_checked_color" class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>
    <!-- maybe nnti kene buat class and loop js -->

    <label class="label_anyForm" for="ral_number_manipulate">RAL Number: </label>
    <input disabled class="input_anyForm iafColor" type="text" name="ral_number_manipulate" value=""><br>

    <label class="label_anyForm" for="color_name_manipulate">Color Name: </label>
    <input disabled class="input_anyForm iafColor" type="text" name="color_name_manipulate" value=""><br>

    <label class="label_anyForm" for="spc_manipulate">SPC: </label>
    <input disabled class="input_anyForm iafColor" type="text" name="spc_manipulate" value=""><br>

    <label class="label_anyForm" for="rgb_hex_manipulate">RGB HEX: </label>
    <input disabled class="input_anyForm iafColor" type="text" name="rgb_hex_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="color">

    <input disabled class="btnSubmit_anyForm btnLoadOnly_color" type="submit" name="submit" value="Update">
    <input class="btnSubmit_anyForm" onclick="loadData('table_function_color','ID_checked_color','iafColor','btnLoadOnly_color')" type="button" name="load" value="Load Data" >
    <input class="btnSubmit_anyForm" onclick="disableUpdate('iafColor','btnLoadOnly_color')" type="reset" name="reset" value="Reset" >
  </div>

</form>

<!-- Unfinished yet ======================================================== -->

<!-- Add Side Nav -->
<form hidden id="mySideAddNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideAddNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">New ID: </label>
    <input readonly class="input_anyForm" type="number" min="1" name="ID_checked" value="1"><br>

    <label class="label_anyForm" for="ral_number_manipulate">RAL Number: </label>
    <input class="input_anyForm" type="text" name="ral_number_manipulate" value=""><br>

    <label class="label_anyForm" for="color_name_manipulate">Color Name: </label>
    <input class="input_anyForm" type="text" name="color_name_manipulate" value=""><br>

    <label class="label_anyForm" for="spc_manipulate">SPC: </label>
    <input class="input_anyForm" type="text" name="spc_manipulate" value=""><br>

    <label class="label_anyForm" for="rgb_hex_manipulate">RGB HEX: </label>
    <input class="input_anyForm" type="text" name="rgb_hex_manipulate" value=""><br>

    <input hidden type="text" name="table_manipulate" value="color">
    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Add">
  </div>

</form>

<!-- Delete Side Nav -->
<form hidden id="mySideDeleteNav_color" class="sideManipulateNav" method="post">
  <a href="javascript:void(0)" class="closeManipulateBtn" onclick="closeManipulateNav('mySideDeleteNav_color','table_color')">&times;</a>

  <div class="any_form_container">

    <label class="label_anyForm" for="ID_checked">Selected ID: </label>
    <input class="input_anyForm" type="number" min="1" name="ID_checked" value=""><br>

    <input class="btnSubmit_anyForm" type="submit" name="submit" value="Delete">
  </div>

</form>
