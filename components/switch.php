<style>
    /* From Uiverse.io by mrhyddenn */ 
/* The switch - the box around the slider */
.switch {
 font-size: 17px;
 position: relative;
 display: inline-block;
 width: 37px;
 height: 20px;
}

/* Hide default HTML checkbox */
.switch input {
 opacity: 1;
 width: 0;
 height: 0;
}

/* The slider */
.slider {
 position: absolute;
 cursor: pointer;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0px;
 background: #fff;
 transition: .4s;
 border-radius: 30px;
 border: 1px solid #ccc;
}

.slider:before {
 position: absolute;
 content: "";
 height: 1em;
 width: 1em;
 border-radius: 16px;
 left: 1.2px;
 top: 0;
 bottom: 0;
 background-color: white;
 box-shadow: 0 2px 5px #999999;
 transition: .4s;
}

input:checked + .slider {
 background-color: #5fdd54;
 border: 1px solid transparent;
}

input:checked + .slider:before {
 transform: translateX(1.5em);
}
</style>

<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>