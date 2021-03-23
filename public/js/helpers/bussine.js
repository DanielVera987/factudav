function init_currency(){
  var code_currency_modal = document.getElementById('code_currency_modal');
  var name_currency_modal = document.getElementById('name_currency_modal');
  var type_currency_modal = document.getElementById('type_currency_modal');
  var table_currency = document.getElementById('table_currency');
}

function add_currency(){
  init_currency();
  add_children_node();
  clean_input_currency();
  close_modal();
}

function add_children_node(){
  if( code_currency_modal.value == '' 
      || name_currency_modal.value == '' 
      || type_currency_modal.value == ''
    ){
    alert('Llenar todos los campos');
    return;
  }

  table_currency.insertRow(-1).innerHTML = `
    <tr>
      <td>
        <input type="hidden" name="code_currency[]" value="${code_currency_modal.value}">
        ${code_currency_modal.value}
      </td>
      <td>
        <input type="hidden" name="name_currency[]" value="${name_currency_modal.value}">
        ${name_currency_modal.value}
      </td>
      <td>
        <input type="hidden" name="type_currency[]" value="${type_currency_modal.value}">
        $ ${type_currency_modal.value}
      </td>
      <td>
        <button type="button" class="btn btn-sm btn-danger" onclick="delete_currency(this)"><i class="fa fa-trash-o"></i></button>
      </td>
    <tr>
  `;
}

function clean_input_currency(){
  code_currency_modal.value = null;
  name_currency_modal.value = null;
  type_currency_modal.value = null;
}

function close_modal(name = 'close_currency'){
  document.getElementById(name).click();
}

function init_tax(){
  var name_tax_modal = document.getElementById('name_tax_modal');
  var tax_tax_modal = document.getElementById('tax_tax_modal');
  var type_tax_modal = document.getElementById('type_tax_modal');
  var factor_tax_modal = document.getElementById('factor_tax_modal');
  var tasa_tax_modal = document.getElementById('tasa_tax_modal');
  var table_tax = document.getElementById('table_tax');
}

function add_tax(){
  init_tax();
  add_children_tax();
  clean_input_tax();
  close_modal('close_tax');
}

function add_children_tax(){
  if( name_tax_modal.value == '' 
      || tasa_tax_modal.value == ''
      || factor_tax_modal.value == ''
      || type_tax_modal.value == ''
      || tax_tax_modal.value == ''
    ){
      alert('Llenar todos los campos');
      return;
  }

  var rowCount = table_tax.rows.length;
  table_tax.insertRow(-1).innerHTML = `
    <tr>
      <td>
        <input type="hidden" name="name_tax[]" value="${name_tax_modal.value}">
        ${name_tax_modal.value}
      </td>
      <td>
        <input type="hidden" name="tasa_tax[]" value="${tasa_tax_modal.value}">
        ${tasa_tax_modal.value}
      </td>
      <td>
        <input type="hidden" name="factor_tax[]" value="${factor_tax_modal.value}">
        ${factor_tax_modal.value}
      </td>
      <td>
        <input type="hidden" name="type_tax[]" value="${type_tax_modal.value}">
        ${type_tax_modal.value}
      </td>
      <input type="hidden" name="tax_tax[]" value="${tax_tax_modal.value}">
      <td>
        <button type="button" class="btn btn-sm btn-danger" onclick="delete_tax(this)"><i class="fa fa-trash-o"></i></button>
      </td>
    </tr>
  `;
}

function clean_input_tax(){
  name_tax_modal.value = null;
  tasa_tax_modal.value = null;
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('input[]').forEach( node => node.addEventListener('keypress', e => {
    if(e.keyCode == 13) {
      e.preventDefault();
    }
  }));
 
});