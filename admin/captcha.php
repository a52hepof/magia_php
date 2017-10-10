<?php

function captcha_genera(){
    
    return "10+0"; 
}

function captcha_verifica($codigo, $valor){
    if($codigo == $valor){
        return true;
    }else{
        false;
    }
}
function captcha_html(){
    echo '<div class="form-group">
          <label for="captcha">Captcha</label>
          <input type="text" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="'. captcha_genera().'">
          </div>    '; 
}