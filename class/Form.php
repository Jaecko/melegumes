<?php


class Form
{

    private $datas = [];

    public function __construct($datas = [])
    {
        $this->$datas = $datas;
    }

    private function getValue($name)
    {
        if (isset($this->datas['name'])) {
            return $this->datas[$name];
        } else {
            return '';
        }
    }

    private function input($type, $name, $label)
    {

        $value = $this->getValue($name);
        $required = '*';

        if ($type == 'textareaRequired') {
            $input = "<textarea name='$name' id='input$name' autocomplete='off' required>$value</textarea>";
        } else if ($type == 'textarea') {
            $input = "<textarea name='$name' id='input$name' autocomplete='off'>$value</textarea>";
            $required = '';
        } else if ($type == 'tel') {
            $input = "<input id='input$name' name='$name' type='$type' minlength='9' maxlength='14' value='$value' required autocomplete='off'>";
        } else {
            $input = "<input id='input$name' name='$name' type='$type' value='$value' required autocomplete='off'>";
        }

        return "<div class='myInputs'>
                    $input
                    <label for='input$name'>$label<sup>$required</sup></label>
                    <div class='line'></div>
                </div>";

    }


    public function text($name, $label)
    {

        return $this->input('text', $name, $label);

    }


    public function email($name, $label)
    {

        return $this->input('email', $name, $label);

    }

    public function tel($name, $label)
    {

        return $this->input('tel', $name, $label);

    }


    public function radio($name, $options)
    {

        $value = $this->getValue($name);

        $radio_html = "";

        foreach ($options as $k => $v) {

            $seleted = "";

            if ($value == $k) {
                $seleted = "selected";
            }

            $radio_html .= "<div class='myInputsRadio'>
                                <input id='input$v[0]' type='radio' name='$name' value='$v[0]' required $seleted>
                                <label for='input$v[0]'>$v[1]</label>
                            </div>";
        }

        return $radio_html;
    }

    public function select($name, $label, $options){
        $options_html = "<option value='' selected disabled>Aucun</option>";

        foreach($options as $k => $v){
            $options_html .= "<option value='$k'>$v</option>";
        }

        return "<div class='myInputs select'>
                    <label for='input$name'>$label<sup>*</sup></label>
                    <select id='input$name' name='$name' required>$options_html</select>
                </div>";
    }


    public function textarea($name, $label, $required = false)
    {

        if ($required == false) {
            return $this->input('textarea', $name, $label);
        } else if ($required == true) {
            return $this->input('textareaRequired', $name, $label);
        }


    }


    public function submit($name, $label)
    {

        return "<div class='myInputs'>
                    <button class='button button_full' name='" . $name . "Submit' type='submit'>$label</button>
                </div>";

    }


}