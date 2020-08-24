function validate(form)
{
    var genderM=form.Male;
    var genderF=form.Female;
    var genderO=from.Others;

    if(genderM.checked==false && genderF.checked==false && genderO.checked==false ) {
        alert("You must select gender");
        return false;
    }   
}
   