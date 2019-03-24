jQuery(document).ready(function ($) {
  $('.plus').on('click', function () {
    $(this).parent().find('.inp-modal')[0].value++;
    $(this).parent().find('.inp-modal').trigger("change");

  });
  $('.minus').on('click', function () {
    if (parseInt($(this).parent().find('.inp-modal')[0].value) !== 0) {
      $(this).parent().find('.inp-modal')[0].value--;
      $(this).parent().find('.inp-modal').trigger("change");
    }
  });
  $('.inp-modal').on('change', function () {
    $(this).parent().parent().parent().find('.item-sum')[0].innerHTML = $(this)[0].value * parseInt($(this).parent().parent().parent().find('.item-price')[0].innerHTML);
    var total = 0;
    $(this).parent().parent().parent().parent().find('.item-sum').each(function (indx, element) {
      var sum = parseInt($(element)[0].innerHTML);
      if (sum > 0) {
        total += sum;
      }
    });
    $(this).parent().parent().parent().parent().parent().find('.total-num')[0].innerHTML = total;
  });

  ymaps.ready(function () {
    var myMap = new ymaps.Map('map_contact', {
        center: [54.987962, 73.441554],
        zoom: 16,
        controls: []
      }),
      MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
      ),
      myPlacemarkWithContent = new ymaps.Placemark([54.987962, 73.433654], {});
    myMap.geoObjects
      .add(myPlacemarkWithContent);
  });
});
