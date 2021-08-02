import countapi from 'countapi-js';
const countapi1 = require('countapi-js');

countapi1.visits('global').then((result) => {
    console.log(result.value);
    document.getElementById("visit-countjs").innerHTML=result.value;
  });