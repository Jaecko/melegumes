var tab = document.getElementById('tab_body');


var tab_element = new Array();


function more(item) {

    var temp_tab_object = {
        name: "",
        amount: "",
        price: "",
        unite: "",
        slug:""
    };

    var id = item.dataset.num;
    var name = datasLegumes[id].name;
    var price = datasLegumes[id].price;
    var unite = datasLegumes[id].unite;
    var slug = datasLegumes[id].slug;

    var elem = document.getElementById(slug);

    if (elem != null) {
        var quantite = document.getElementById(slug + '_quantite');
        var quantite_inner = quantite.innerHTML;

        var prix = document.getElementById(slug + '_prix');

        if (unite == "kg") {
            quantite.innerHTML = Math.round(Number(quantite_inner) + 1);

            quantite_inner = quantite.innerHTML;

            prix.innerHTML = (Number(price) * Number(quantite_inner)).toFixed(2);

            document.getElementById(slug + "_input").value = Math.floor(quantite.innerHTML);
        } else {
            quantite.innerHTML = (Number(quantite_inner) + 1).toFixed(0);

            quantite_inner = quantite.innerHTML;

            prix.innerHTML = (Number(price) * Number(quantite_inner)).toFixed(2);

            document.getElementById(slug + "_input").value = Math.floor(quantite.innerHTML);
        }
        tab_element[id].amount = quantite_inner;
        tab_element[id].price = prix.innerHTML;


    } else {
        let tr = document.createElement("tr");
        let td0 = document.createElement("td");
        td0.className = "deleteLine";
        td0.addEventListener('click', function () {
            deleteLine(slug, id);
        });
        let td1 = document.createElement("td");
        td1.innerHTML = name;
        let td2 = document.createElement("td");
        td2.id = slug + "_quantite";
        td2.innerHTML = 1;
        let td3 = document.createElement("td");
        td3.id = slug + "_prix";
        td3.innerHTML = price;

        tr.id = slug;

        tab.appendChild(tr);
        tr.appendChild(td0);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);

        document.getElementById(slug + "_input").value = 1;

        temp_tab_object.name = name;
        temp_tab_object.amount = 1;
        temp_tab_object.price = price;
        temp_tab_object.unite = unite;
        tab_element[id] = temp_tab_object;
    }
    total();
}


function less(item) {

    var id = item.dataset.num;

    var id = item.dataset.num;
    var name = datasLegumes[id].name;
    var price = datasLegumes[id].price;
    var unite = datasLegumes[id].unite;
    var slug = datasLegumes[id].slug;


    if (tab_element[id].amount > 0) {
        var quantite = document.getElementById(slug + '_quantite');
        var quantite_inner = quantite.innerHTML;

        var prix = document.getElementById(slug + '_prix');

        quantite.innerHTML = (Number(quantite_inner) - 1).toFixed(0);

        quantite_inner = quantite.innerHTML;

        prix.innerHTML = (Number(price) * Number(quantite_inner)).toFixed(2);

        document.getElementById(slug + "_input").value = Math.floor(quantite.innerHTML);

        tab_element[id].amount = quantite_inner;
        tab_element[id].price = prix.innerHTML;
    }

    if (quantite_inner < 1) {
        let i = 0;
        while (tab.hasChildNodes()) {
            if (tab.childNodes[i].id == slug) {
                tab.removeChild(tab.childNodes[i]);
                break;
            }
            i++;
        }
        document.getElementById(slug + "_input").value = 0;
    }

    total();
}


function exact(item) {

    var temp_tab_object = {
        name: "",
        amount: "",
        price: "",
        unite: "",
        slug:""
    };

    var id = item.dataset.num;

    var itemValue = item.value;

    var name = datasLegumes[id].name;
    var price = datasLegumes[id].price;
    var unite = datasLegumes[id].unite;
    var slug = datasLegumes[id].slug;

    var elem = document.getElementById(slug);

    var quantite = document.getElementById(slug + '_quantite');
    var prix = document.getElementById(slug + '_prix');

    if (elem != null) {
        if (unite == "kg") {
            quantite.innerHTML = Math.round(itemValue);
            prix.innerHTML = (Number(price) * Number(Math.round(itemValue))).toFixed(2);

        } else {
            quantite.innerHTML = itemValue;

            prix.innerHTML = (Number(price) * Number(itemValue)).toFixed(2);
        }

        tab_element[id].amount = quantite_inner;
        tab_element[id].price = prix.innerHTML;

    } else {

        let tr = document.createElement("tr");
        let td0 = document.createElement("td");
        td0.className = "deleteLine";
        td0.addEventListener('click', function () {
            deleteLine(slug, id);
        });
        let td1 = document.createElement("td");
        let td2 = document.createElement("td");
        let td3 = document.createElement("td");

        if (unite == "kg") {

            td2.innerHTML = itemValue;
            var itemPrice = (Number(price) * Number(itemValue)).toFixed(2);

        } else {
            td2.innerHTML = Math.floor(itemValue);
            var itemPrice = (Number(price) * Number(Math.floor(itemValue)));
            document.getElementById(slug + "_input").value = Math.floor(itemValue);
        }

        td1.innerHTML = name;
        td2.id = slug + "_quantite";
        td3.id = slug + "_prix";
        td3.innerHTML = itemPrice;

        tr.id = slug;

        tab.appendChild(tr);
        tr.appendChild(td0);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);


        temp_tab_object.name = name;
        temp_tab_object.amount = quantite;
        temp_tab_object.price = itemPrice;
        temp_tab_object.unite = unite;
        tab_element[id] = temp_tab_object;
    }
    total();
}


function deleteLine(slug, id) {
    let i = 0;
    while (tab.hasChildNodes()) {
        if (tab.childNodes[i].id == slug) {
            tab.removeChild(tab.childNodes[i]);
            tab_element[id].amount = 0;
            tab_element[id].price = 0;
            document.getElementById(slug + "_input").value = 0;
            total();
            break;
        }
        i++;
    }

}


function total() {
    let total = 0;
    let amount = 0;
    for (let key in tab_element) {
        total += Number(tab_element[key].price);
        if(tab_element[key].amount != 0){
            amount++;
        } 
    }

    $('#span_total').text(total.toFixed(2));
    
    if(amount == 0){
        $('#buttonForm.clickable span').text(amount);
        $('#buttonForm.clickable span').css('display', 'none');
    }else{
        $('#buttonForm.clickable span').css('display', 'block');
        $('#buttonForm.clickable span').text(amount);
    }

    


    toPhp();
}


function toPhp() {
    let TableData;
    let myArray = {};
    myArray.data = tab_element;
    TableData = JSON.stringify(myArray);
    // console.log(TableData);
    $.ajax({
        type: "POST",
        url: "ajax/ajax.php",
        data: {tab: TableData},

        error: function () {
            console.error('La conversion JS vers PHP n\'a pas fonctionné')
        },
        success: function (data) {
            // console.log('La conversion JS vers PHP est un succès');
            // console.log(data);
            // console.table(data);
        }
    });
}