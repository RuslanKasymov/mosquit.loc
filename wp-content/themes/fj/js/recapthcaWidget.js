var widgetId1;
var widgetId2;
var onloadCallback = function() {
  widgetId1 = grecaptcha.render('widget-compl', {
    'sitekey' : '6Lf6l1AUAAAAADOaYhpc7c00pRmv-jyVVSV-j3DX',
    'theme' : 'dark'
  });
  widgetId2 = grecaptcha.render('widget-net', {
    'sitekey' : '6Lf6l1AUAAAAADOaYhpc7c00pRmv-jyVVSV-j3DX',
    'theme' : 'dark'
  });
};
