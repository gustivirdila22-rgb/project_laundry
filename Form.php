<?php 
class Form {
    private $form;

    function __construct($action, $method) {
        $this->form = "<form action='$action' method='$method'>";
    }

    function addText($name, $label) {
        $this->form .= "$label: <input type='text' name='$name'><br>";
    }

    function addPassword($name, $label) {
        $this->form .= "$label: <input type='password' name='$name'><br>";
    }

    function addCheckbox($name, $options = []) {
        $this->form .= "Jenis Laundry:<br>";
        foreach ($options as $value => $label) {
            $this->form .= "<input type='checkbox' name='{$name}[]' value='$value'> $label<br>";
        }
    }

    function addRadio($name, $options = []) {
        $this->form .= "Layanan:<br>";
        foreach ($options as $value => $label) {
            $this->form .= "<input type='radio' name='$name' value='$value'> $label<br>";
        }
    }

    function addDropdown($name, $options = []) {
        $this->form .= "Karakteristik:<br><select name='$name'>";
        foreach ($options as $value => $label) {
            $this->form .= "<option value='$value'>$label</option>";
        }
        $this->form .= "</select><br>";
    }

    function addTextarea($name, $label) {
        $this->form .= "$label:<br><textarea name='$name'></textarea><br>";
    }

    function addSubmit($label) {
        $this->form .= "<input type='submit' value='$label'>";
    }

    function render() {
        return $this->form . "</form>";
    }
}
?>
