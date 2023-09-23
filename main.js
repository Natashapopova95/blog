$('form[name="callback"]').validate({
  rules: {
    full_name: {
      required: true,
      minlength: 3,
    },
    address: {
      required: true,
      minlength: 3,
    },
    tel: {
      required: true,
      digits: true,
      minlength: 11,
    },
    email: {
      required: true,
      email: true,
    },
  },

  messages: {
    full_name: {
      required: "Пожалуйста, укажите ФИО",
      minlength: "Имя должно содержать не менее 3 символов",
    },
    address: {
      required: "Пожалуйста, укажите свой адрес",
      minlength: "Адрес должен содержать не менее 3 символов",
    },
    tel: {
      required: "Пожалуйста, укажите свой телефон",
      digits: "Пожалуйста, введите свой телефон в качестве числового значения",
      minlength: "Номер должен состоять из 11 цыфр",
    },
    email: {
      required: "Пожалуйста, укажите свой email",
      email: "Электронное письмо должно быть в формате: name@domain.ru",
    },
  },

  submitHandler: function (form) {
    form.submit();
  },
});
