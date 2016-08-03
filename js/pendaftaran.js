// Validasi JS untuk halaman pendaftaran

$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
   
   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });
   
   $("#formulirPendaftaran").validate({
     
    rules:
    {
    namaDepan: {
     required: true,
     validname: true
    },
    namaBelakang: {
     validname: true
    },
    namaPengguna: {
     required: true,
     validname: true,
     minlength: 4,
     maxlength: 12
    },
    email: {
     required: true,
     validemail: true
    },
    kataKunci: {
     required: true,
     minlength: 6
    },
    konfirmasiKataKunci: {
     required: true,
     equalTo: '#kataKunci'
    },
     },
     messages:
     {
    namaDepan: {
     required: "Harap tuliskan nama depan",
     validname: "Nama depan hanya boleh mengandung abjad"
    },
    namaBelakang: {
     validname: "Nama belakang hanya boleh mengandung abjad"
    },
    namaPengguna: {
     required: "Harap tuliskan nama pengguna",
     validname: "Nama pengguna hanya boleh mengandung abjad",
     minlength: "Nama pengguna minimal 4 karakter",
     maxlength: "Nama pengguna maksimal 12 karakter"
    },
    email: {
     required: "Harap tuliskan alamat email anda",
     validemail: "Email yang anda tulis tidak valid"
    },
    kataKunci:{
     required: "Harap tuliskan kata kunci anda",
     minlength: "Kata kunci harus lebih dari 5 karakter"
     },
    konfirmasiKataKunci:{
     required: "Harap tulis ulang kata kunci anda",
     equalTo: "Kata kunci tidak sesuai!!"
     }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();
                }
     }); 
 })