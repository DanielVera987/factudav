function init(){
  var code_currency_modal = document.getElementById('code_currency_modal');
  var name_currency_modal = document.getElementById('name_currency_modal');
  var type_currency_modal = document.getElementById('type_currency_modal');
  var table_currency = document.getElementById('table_currency');
}

function add_currency(){
  init();
  add_children_node();
  clean_input();
  close_modal();
}

function add_children_node(){
  table_currency.insertRow(-1).innerHTML = `
    <tr>
      <td>${code_currency_modal.value}</td>
      <td>${name_currency_modal.value}</td>
      <td>$ ${type_currency_modal.value}</td>
      <td></td>
    <tr>
  `;
}

function clean_input(){
  code_currency_modal.value = null;
  name_currency_modal.value = null;
  type_currency_modal.value = null;
}

function close_modal(){
  document.getElementById('close_currency').click();
}