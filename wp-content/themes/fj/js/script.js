jQuery(document).ready(function ($) {
    // ymaps.ready(function () {
    //         var myMap = new ymaps.Map('map_contact', {
    //                 center: [54.987962, 73.441554],
    //                 zoom: 16,
    //                 controls: []
    //             }),
    //             // Создаём макет содержимого.
    //             MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
    //                 '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    //             ),
    //             myPlacemarkWithContent = new ymaps.Placemark([54.987962, 73.433654], {});
    //         myMap.geoObjects
    //             .add(myPlacemarkWithContent);
    //     });
    $('#calc_btn').on('click', function () {
        var width = parseFloat($('#width')[0].value.replace(/,/, '.'));
        var height = parseFloat($('#height')[0].value.replace(/,/, '.'));
        var quant_length;
        var priceFilm;
        var priceFastener;
        var priceinstall = 451;
        var price2200;
        var price2200k;
        var price3300;
        var price3300k;
        var price4400;
        var price4400k;

        var type_size2200_40;
        var type_size3300_29;
        var type_size3300_57;
        var type_size3300_86;
        var type_size4400_60;

        var cle_descr2200_40;
        var cle_descr3300_29;
        var cle_descr3300_57;
        var cle_descr3300_86;
        var cle_descr4400_60;

        if ($('#calc_select').val() == 0) {
            price2200 = parseFloat($('#morozModal .item-price[data-type=2х200]')[0].innerHTML);
            price2200k = parseFloat($('.item-price[data-type=200]')[0].innerHTML);
            price3300 = parseFloat($('#morozModal .item-price[data-type=3х300]')[0].innerHTML);
            price3300k = parseFloat($('.item-price[data-type=300]')[0].innerHTML);
            price4400 = parseFloat($('#morozModal .item-price[data-type=4х400]')[0].innerHTML);
            price4400k = parseFloat($('.item-price[data-type=400]')[0].innerHTML);
            type_size2200_40 = "2х200";
            type_size3300_29 = "3х300";
            type_size3300_57 = "3х300";
            type_size3300_86 = "3х300";
            type_size4400_60 = "4х400";

            cle_descr2200_40 = "40%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_29 = "29%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_57 = "57%, соседние полосы в нахлест на 2 проушины с каждой стороны на 8 мм";
            cle_descr3300_86 = "86%, соседние полосы в нахлест на 3 проушины с каждой стороны на 12 мм";
            cle_descr4400_60 = "60%, соседние полосы в нахлест на 3 проушины с каждой стороны на 12 мм";
        } else if ($('#calc_select').val() == 1) {
            price3300 = price4400 = price2200 = parseFloat($('#standartModal .item-price[data-type=2х200]')[0].innerHTML);
            price4400k = price3300k = price2200k = parseFloat($('.item-price[data-type=200]')[0].innerHTML);
            type_size2200_40 = type_size3300_29 = type_size3300_57 = type_size3300_57 = type_size3300_86 = type_size4400_60 ="2х200";

            cle_descr2200_40 = "40%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_29 = "29%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_57 = "57%, соседние полосы в нахлест на 2 проушины с каждой стороны на 8 мм";
            cle_descr3300_86 = cle_descr4400_60 ="86%, соседние полосы в нахлест на 3 проушины с каждой стороны на 12 мм";
        } else {
            price3300 = price4400 = price2200 = parseFloat($('#specModal .item-price[data-type=2х300]')[0].innerHTML);
            price4400k = price3300k = price2200k = parseFloat($('.item-price[data-type=300]')[0].innerHTML);

            type_size2200_40 = type_size3300_29 = type_size3300_57 = type_size3300_57 = type_size3300_86 = type_size4400_60 ="2х300";

            cle_descr2200_40 = "40%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_29 = "29%,соседние полосы в нахлест на 1 проушину с каждой стороны на 4 мм";
            cle_descr3300_57 = "57%, соседние полосы в нахлест на 2 проушины с каждой стороны на 8 мм";
            cle_descr3300_86 = cle_descr4400_60 ="86%, соседние полосы в нахлест на 3 проушины с каждой стороны на 12 мм";
        }
        if (height <= 2) {
            $('#type_size')[0].innerText = type_size2200_40;
            $('.cle-descr')[0].innerText = cle_descr2200_40;
            quant_length = ((width - 0.2) / 0.164) + 1;
            priceFilm = price2200;
            priceFastener = price2200k;
        } else if (height > 2 && height <= 2.3) {
            $('#type_size')[0].innerText = type_size3300_29;
            $('.cle-descr')[0].innerText = cle_descr3300_29;
            quant_length = ((width - 0.3) / 0.24) + 1;
            priceFilm = price3300;
            priceFastener = price3300k;

        } else if (height > 2.3 && height <= 4) {
            $('#type_size')[0].innerText = type_size3300_57;
            $('.cle-descr')[0].innerText = cle_descr3300_57;
            quant_length = ((width - 0.3) / 0.205) + 1;
            priceFilm = price3300;
            priceFastener = price3300k;

        } else if (height > 4 && height <= 5) {
            $('#type_size')[0].innerText = type_size3300_86;
            $('.cle-descr')[0].innerText = cle_descr3300_86;
            quant_length = ((width - 0.3) / 0.165) + 1;
            priceFilm = price3300;
            priceFastener = price3300k;

        } else {
            $('#type_size')[0].innerText = type_size4400_60;
            $('.cle-descr')[0].innerText = cle_descr4400_60;
            quant_length = ((width - 0.4) / 0.287) + 1;
            priceFilm = price4400;
            priceFastener = price4400k;
        }
        quant_length = Math.round(quant_length);
        $('#quant_length')[0].innerText = $('#quant_plates')[0].innerText = quant_length; //количество полос  количество пластин
        $('#quant_plates')[0].dataset.prodid = 67; //********id пластины
        var pogonnie_metry = quant_length * height;
        if (pogonnie_metry < 100 && pogonnie_metry > 50) {
            pogonnie_metry = 50 + (quant_length - Math.floor(50 / height)) * height;
        } else if (pogonnie_metry > 100) {
            pogonnie_metry = 100 + (quant_length - Math.floor(100 / height)) * height;
        }
        $('#strip_length')[0].innerText = pogonnie_metry.toFixed(2); // длинна полосы
        $('#strip_length')[0].dataset.prodid = 66; //********id полосы
        var film_price = priceFilm * pogonnie_metry; //цена полосы
        var fastener_price = priceFastener * width; //цена крепления
        var install_price = priceinstall * width; //цена монтажа
        var total = film_price + fastener_price + install_price; //Итого
        $('#film_price')[0].innerText = film_price.toFixed(2); // цена пленки
        $('#fastener_price')[0].innerText = fastener_price.toFixed(2); //цена крепления
        $('#install_price')[0].innerText = install_price.toFixed(2); //цена монтажа
        $('#metal_comb')[0].innerText = width; //Металлическая гребенка
        $('#metal_comb')[0].dataset.prodid = 68; //********id гребенки
        $('#total')[0].innerText = total.toFixed(2); //Итого
        $('#calc_hidden_block').show(1000);
        $('.gray-line-block').animate({width: '100%'}, 1000);
    });
    $('.plus').on('click', function () {
        //.(this).parent().parent().find('.item-sum')[0].innerHTML =  parseInt(++$(this).parent().find('.inp-modal')[0].value)*parseInt( $(this).parent().parent().find('.item-price')[0].innerHTML);
        $(this).parent().find('.inp-modal')[0].value++;
        $(this).parent().find('.inp-modal').trigger("change");

    });
    $('.minus').on('click', function () {
        if (parseInt($(this).parent().find('.inp-modal')[0].value) !== 0) {
            //$(this).parent().parent().find('.item-sum')[0].innerHTML =  parseInt(--$(this).parent().find('.inp-modal')[0].value)*parseInt( $(this).parent().parent().find('.item-price')[0].innerHTML);
            $(this).parent().find('.inp-modal')[0].value--;
            $(this).parent().find('.inp-modal').trigger("change");
        }
    });
    $('.inp-modal').on('change', function () {
        $(this).parent().parent().parent().find('.item-sum')[0].innerHTML = $(this)[0].value * parseInt($(this).parent().parent().parent().find('.item-price')[0].innerHTML);
        var total = 0;
        $(this).parent().parent().parent().parent().find('.item-sum').each(function(indx, element){
            var sum = parseInt($(element)[0].innerHTML);
            if(sum>0){
                total +=sum;
            }
        });
        $(this).parent().parent().parent().parent().parent().find('.total-num')[0].innerHTML=total;
    });
});