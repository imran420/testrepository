$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".container1");
    var add_button      = $(".add_form_field");
 
    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div><label for="msalary">Succession Person Name</label><input type="text" id="fname" name="msalary" placeholder="Name"><label for="msalary">Succession Person Relation</label><input type="text" id="fname" name="msalary" placeholder="Relation"><br><label for="birthday">Date of Birth</label><br><input type="date" id="birthday" name="birthday"><br><a href="#" class="delete">Delete</a></div>'); //add input box
        }
  else
  {
  alert('You Reached the limits')
  }
    });
 
    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
