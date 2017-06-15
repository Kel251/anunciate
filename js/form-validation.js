

   
    $(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 30), '='].join(' '));
	//EXAMPLE REGISTER FORM
    $('#registerForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            nickname: {
                message: 'Tu nombre de usuario no es valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre de usuario es requerido no puede quedar vacio'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El nombre de usuario debe tener minimo 6 y maximo 30 caracteres de longitud'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The nombre de usuario solo puede tener carcteres alfabeticos y numericos'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password can\'t be the same as each other'
                    }
                }
            },
            emailr: {
                validators: {
                    notEmpty: {
                        message: 'El email es requerido no puede estar vacio'
                    },
                    emailAddress: {
                        message: 'La dirección de correo electronico no es valida'
                    }
                }
            },
            nombrer: {
                message: 'EL nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'EL nombre es requerido no puede estar vacio'
                    },                    
                    regexp: {
                        regexp: /^[A-Z][a-z\.]+$/,
                        message: 'El nombre debe comenzar con mayuscula y solo puede tener caracteres alfabeticos'
                    }
                }
            },
            apellidor: {
                message: 'EL apellido no es valido',
                validators: {
                    notEmpty: {
                        message: 'Apellodo es requerido no puede estar vacio'
                    },
                    regexp: {
                        regexp: /^[A-Z][a-z\.]+$/,
                        message: 'El apellido debe comenzar con mayuscula y solo puede tener caracteres alfabeticos'
                    }
                }
            },
            password1: {
                validators: {
                    notEmpty: {
                        message: 'La contraseña es requerida no puede estar vacio'
                    },
                    identical: {
                        field: 'password2',
                        message: 'La contraseña no es igual'
                    },
                    different: {
                        field: 'nickname',
                        message: 'La contraseña no debe ser igual al nombre de usuario'
                    }
                }
            },
            password2: {
                validators: {
                    notEmpty: {
                        message: 'Debes confirmar la contraseña'
                    },
                    identical: {
                        field: 'password1',
                        message: 'La contraseña no es igual'
                    },
                    different: {
                        field: 'nickname',
                        message: 'La contraseña no debe ser igual al nombre de usuario'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Tienes que aceptar las Condiciones del Servicio'
                    }
                }
            },
            anunciante: {
                validators: {
                    notEmpty: {
                        message: 'Tienes que aceptar una opción'
                    }
                }
            },             
           captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
	
	
	//EXAMPLE CONTACT FORM
    $('#contactForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            nickname: {
                message: 'Name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Name is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Name can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            Contactmessage: {
                validators: {
                    notEmpty: {
                        message: 'Message is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'Message must be more than 6 characters long'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
	
	
	//Regular expression based validators
    $('#ExpressionValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
             email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            phoneNumber: {
                validators: {
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            color: {
                validators: {
                    hexColor: {
                        message: 'The input is not a valid hex color'
                    }
                }
            },
            zipCode: {
                validators: {
                    usZipCode: {
                        message: 'The input is not a valid US zip code'
                    }
                }
            }
        }
    });
	
	
	//Regular expression based validators
    $('#NotEmptyValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            }
        }
    });
	
	
	//Regular expression based validators
    $('#IdenticalValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
	
	//Regular expression based validators
    $('#OtherValidator').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            }
        }
    });
	
});
