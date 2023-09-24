
$("#tel").mask("+7(999) 999-9999");

$.validator.methods.email = function( value, element ) {
  return this.optional( element ) || /([A-Za-z0-9]+[.-_])*[A-Za-z0-9]+@[A-Za-z0-9-]+(\.[A-Z|a-z]{2,})+/.test( value );
}

$.validator.methods.tel = function( value, element ) {
  return this.optional( element ) || /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test( value );
}
$.validator.methods.text = function( value, element ) {
  return this.optional( element ) || /^[а-яА-ЯёЁa-zA-Z]/.test( value );
}


$('form[name="callback"]').validate({
rules: {
full_name : {
required: true,
text:true
},
address : {
required: true,
text:true
},
tel: {
required: true,

tel: true,

},
email: {
required: true,
email: true
},
},


messages : {
full_name: {
required: "Пожалуйста, укажите ФИО",
text: "Пожалуйста, введите полное ФИО"
},
address: {
required: "Пожалуйста, укажите свой адрес",
text:"Адрес должен содержать только"
},
tel: {
required: "Пожалуйста, укажите свой телефон",
tel: "Номер телефона должен быть в формате: +7-000-000-00-00",
},
email: {
  required: "Пожалуйста, укажите свой email",
email: "Электронное письмо должно быть в формате: name@domain.ru"
},
},
  
  submitHandler: function() {

    
let full_name = $('input[name="full_name"]').val(),
    address = $('input[name="address"]').val(),
    tel = $('input[name="tel"]').val(),
    email = $('input[name="email"]').val();



       $.ajax({
    url: 'signup.php',
    method: 'POST',
    data: {
      full_name: full_name,
      address: address,
      tel:tel,
      email:email,
    },
    success: function(data){
	  $('.wrapperBlock').html(data);
    $('input[name="full_name"]').val(''),
    $('input[name="address"]').val(''),
    $('input[name="tel"]').val(''),
    $('input[name="email"]').val('');
    }
})
  }
});



 















