$(function () {
    $("form[name='unos']").validate({
        rules: {
            naslov: {
                required: true,
                minlength: 5,
                maxlength:30
            },
            kratko: {
                required: true,
                minlength: 10,
                maxlength:100

            },
            vijesti: {
                required: true,
            },
            slika:{
                required:true
            },
            kategorija:{
                required:true 
            }
            
        },
        // Specify validation error messages
        messages: {
            naslov: {
                required: "Morate unijeti naslov!",
                minlength: "Naslov ne može imati manje od 5 znakova",
                maxlength:"Naslov ne može imati više od 30 znakova"
            },
            kratko:{
                required: "Potrebno je upisati kratki sadržaj!",
                minlength: "Kratki sadržaj ne može imati manje od 10 znakova",
                maxlength:"Kratki sadržaj ne može imati više od 100 znakova"
            },
            vijesti: {
                required: "Potrebno je unijeti tekst vijesti!",               
            },
            slika: {
                required: "Postavite sliku!"
            },
            kategorija:{
                required:"Morate odabrati kategoriju!"
            }
        },

        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});