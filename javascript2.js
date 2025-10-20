
const otevrit = document.getElementById('otevrit');
const zavrit = document.getElementById('zavrit');
const dialog = document.getElementById('dialog');

otevrit.addEventListener('click', () => {dialog.showModal();});

zavrit.addEventListener('click', () => {dialog.close();});

function testNum(jmeno) {
  let result;
  if (jmeno > 0) {
    result.style.border = red;
  } else {
    result = "NOT positive";
  }
  return result;
}

console.log(testNum(-6));


const input = document.getElementById('Jmeno');

console.log(input);

let value = event.


