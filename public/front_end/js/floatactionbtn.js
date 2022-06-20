function toggle12() {
    var whatsapp = document.getElementById("whatsappbtnId");
    var call = document.getElementById("callbtnId");
    var close = document.getElementById("closebtnId");
    var contact = document.getElementById("contactId");

    if (whatsapp.style.display && call.style.display === "block") {
        whatsapp.style.display = "none";
        call.style.display = "none";
        contact.style.display = "block";
        document.getElementById("chatbtnId").innerHTML = '<i class="fa fa-comment float-icon"></i>';


    } else {
        whatsapp.style.display = "block";
        call.style.display = "block";
        contact.style.display = "none";
        document.getElementById("chatbtnId").innerHTML = '<i class="fa fa-times float-icon"></i>';

    }
}