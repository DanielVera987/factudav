function init_add_concept()
{
    if (! load_inputs()){ return false; }
    add_concept();
    clean_inputs();
    calculate_totals();
}

function load_inputs()
{
    var product_id = document.querySelector('#search_product');
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
    $('#divConceptos').append(`
        <div class="x_panel">
            <div class="x_title">
                <h2><strong>${description_search.value}</strong></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="bg bg-red" onclick="$(this).parent().parent().parent().remove(); calculate_totals()"><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Clave prod/serv:</strong> ${produserv_id_search.textContent}</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Cantidad:</strong> ${quantity_search.value}</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Descuento:</strong> ${discount_search.value}</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Clave unidad: </strong> ${unit_id_search.textContent}</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Precio: </strong> $ ${price_search.value}</h6>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h6><strong>Importe: </strong> $ 30</h6>
                    </div>
                </div>
                <input type="hidden" name="discount[]" class="discount_hidden" value="${discount_search.value}" />
                <input type="hidden" name="amount[]" class="amount_hidden" value="${price_search.value}" />
                <input type="hidden" name="product_id[]" class="product_id_hidden" value="${document.querySelector('#search_product').value}" />
                <input type="hidden" name="prodserv_id[]" class="prodserv_id_hidden" value="${produserv_id_search.value}" />
                <input type="hidden" name="unit_id[]" class="unit_id_hidden" value="${unit_id_search.value}" />
                <input type="hidden" name="description[]" class="description_hidden" value="${description_search.value}" />
                <input type="hidden" name="quantity[]" class="quantity_hidden" value="${quantity_search.value}" />
            </div>
        </div>
    `);
}

function clean_inputs()
{
    document.querySelector('#search_product').value = null;
    document.querySelector('#quantity_search').value = '';
    document.querySelector('#description_search').value = '';
    document.querySelector('#discount_search').value = '';
    document.querySelector('#price_search').value = '';
    document.querySelector('#produserv_id_search');
    document.querySelector('#unit_id_search');
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
    console.log(subTotal);
    console.log(descuento);
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
        subTotal += parseFloat(amount);
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