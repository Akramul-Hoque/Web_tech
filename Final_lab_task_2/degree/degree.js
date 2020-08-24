document.getElementById('myform').onsubmit = function (e) {
  var checkbox = document.getElementsByName("del[]"),
      i,
      checked;
  for (i = 0; i < checkbox.length; i += 1) {
    checked = (checkbox[i].checked||checked===true)?true:false;
  }

  if (checked == false) {
    alert('Check Something!');
    e.preventDefault();
    return false;
  } else if(confirm('confirm submit?')) {
    alert('done!');
    return true;
  }
}