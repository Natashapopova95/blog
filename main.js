$('form[name="callback"]').validate({
  rules: {
    full_name: "required",
    address: "required",
    tel: "required",
    email: {
      required: true,
      email: true,
    },
    topic: "required",
  },
  messages: {
    full_name: "Укажите имя",
    address: "Укажите адрес",
    tel: "Укажите телефон",
    email: "Укажите правильный E-mail",
  },
  submitHandler: function (form) {
    form.submit();
  },
});
