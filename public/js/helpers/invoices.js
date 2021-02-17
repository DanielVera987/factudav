var numDetail = 0;

function init_add_concept()
{
    if (! load_inputs()){ return false; }   
    add_concept();
    clean_inputs();
    
    numDetail++;
}

function load_inputs()
{
    var quantity_search = document.querySelector('#quantity_search');
    var description_search = document.querySelector('#description_search');
    var discount_search = document.querySelector('#discount_search');
    var price_search = document.querySelector('#price_search');
    var produserv_id_search = document.querySelector('#produserv_id_search');
    var unit_id_search = document.querySelector('#unit_id_search');

    if (quantity_search.value.trim() == ''  
        || description_search.value.trim() == ''  
        || discount_search.value.trim() == ''
        || price_search.value.trim() == ''  
        || produserv_id_search.value.trim() == ''
        || unit_id_search.value.trim() == ''
    ){
        new PNotify({
            title: 'Oh No!',
            text: 'La cantidad, descripción, precio unitario, clave producto y clave unidad son obligatorias.',
            type: 'error',
            styling: 'bootstrap3'
        });
        return false; 
    }
    return true;
}

function add_concept() 
{
    let product_id = (document.querySelector('#search_product').value != '') ? document.querySelector('#search_product').value : 0 ;

    //verify taxes
    let taxes = [];
    let taxesCheck = document.getElementsByClassName('impuestos_search');
    for (let i = 0; i < taxesCheck.length; i++) {
        if(taxesCheck[i].checked) {
           taxes.push(taxesCheck[i].value);    
        }
    }

    let url = '/json/convertHtml';
    let data = {
        product_id:  product_id,
        quantity: quantity_search.value,
        description: description_search.value,
        discount: discount_search.value,
        price: price_search.value,
        produserv_id: produserv_id_search.value,
        unit_id: unit_id_search.value,
        numDetail: numDetail,
        taxes: taxes
    };

    console.log(data);

    $.get(url, data, function (data) {
        $('#divConceptos').append(data)

        calculate_totals();
    });
}

function clean_inputs()
{
    document.querySelector('#search_product').textContent = '';
    document.querySelector('#quantity_search').value = '';
    document.querySelector('#description_search').value = '';
    document.querySelector('#discount_search').value = '';
    document.querySelector('#price_search').value = '';
    document.querySelector('#produserv_id_search').value = '';
    document.querySelector('#unit_id_search').value = '';
    document.querySelector('#produserv_id_search').textContent = '';
    document.querySelector('#unit_id_search').textContent = '';
}

function calculate_totals()
{
    let length = 0;
    let descuento = 0;
    let subTotal = 0;
    let totalImpuestosRetenidos = 0;
    let totalImpuestosTrasladados = 0;
    let total = 0;
    clear_txts();

    length = document.getElementsByClassName('prodserv_id_hidden').length;
    descuento = calDescuento(length);
    subTotal = calSubTotal(length);

    total = parseFloat(subTotal) - parseFloat(descuento);

    document.getElementById('txt_total').innerHTML = total.toFixed(2);
    console.log('Subtotal: ' + subTotal);
    console.log('Descuento: ' + descuento);
}

function calDescuento(length) 
{
    let descuento = 0;

    for (let i = 0; i < length; i++) {
        let amount = document.getElementsByClassName('discount_hidden')[i].value;
        if (amount > 0 && amount != '') descuento += parseFloat(amount);
    }
    document.getElementById('txt_descuento').innerHTML = descuento.toFixed(2);
    return Decimal(descuento).toNumber();
}

function calSubTotal(length)
{
    let subTotal = 0;

    for (let i = 0; i < length; i++) {
        let amount = document.getElementsByClassName('amount_hidden')[i].value;
        let qty = document.getElementsByClassName('quantity_hidden')[i].value
        subTotal += parseFloat(amount * qty);
    }

    document.getElementById('txt_subtotal').innerHTML = subTotal.toFixed(2);
    return Decimal(subTotal).toNumber();
}

function clear_txts()
{
    document.getElementById('txt_subtotal').innerHTML = '';
    document.getElementById('txt_descuento').innerHTML = '';
    document.getElementById('txt_total').innerHTML = '';
}